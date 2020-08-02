<?php
  require('./config.php');

  class DB {
    protected $_db;

    public function __construct() {
      $server   = DB_HOST;
      $username = DB_USN;
      $password = DB_PWD;
      $db_name  = DB_NAME;
      try {
        $this->_db = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) { 
        error_log($e, 0);
      }
    }

    public function close() {
      $this->_db = null;
    }
    
    public function getUserByEmail($email) {
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $stmt = $this->_db->prepare($sql);
      $stmt->execute();
      $rs = $stmt->fetchAll();
      return count($rs) > 0 ? $rs[0] : null;
    }

    public function getUserById($id) {
      $sql = "SELECT * FROM users WHERE id = '$id'";
      $stmt = $this->_db->prepare($sql);
      $stmt->execute();
      $rs = $stmt->fetchAll();
      return count($rs) > 0 ? $rs[0] : null;
    }

    public function isExistUser($email) {
      $user = $this->getUserByEmail($email);
      return isset($user) ? true : false;
    }

    public function predictMask($user) {
      $name = $user['name'];
      $phone = $user['phone'];
      $email = $user['email'];
      $city = $user['city'];
      $class = $user['class'];
      $predicted_mark = $user['predicted_mark'];

      try {
        $sql = "INSERT INTO users (name, phone, email, city, class, predicted_mark) 
                VALUES ('$name', '$phone', '$email', '$city', '$class', $predicted_mark)";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
      } catch (Exception $ex) {
        error_log($ex, 0);
        die;
      }
    }

    public function updateRealMark($id, $real_mark) {
      try {
        $sql = "UPDATE users SET real_mark = $real_mark WHERE id = $id";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
      } catch (Exception $ex) {
        error_log($e, 0);
      }
    }
  }
