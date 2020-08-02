<?php
    require('../db.php');

    if ($_POST) {

        $db = new DB();

        if ($db->isExistUser($_POST['txtEmail'])) {
            header('Location: ../?p=1-2');
        }

        $user = [];
        $user['name'] = $_POST['txtName'];
        $user['phone'] = $_POST['txtPhone'];
        $user['email'] = $_POST['txtEmail'];
        $user['city'] = $_POST['txtCity'];
        $user['class'] = $_POST['txtClass'];
        $user['predicted_mark'] = $_POST['txtPredictedMask'];
        $db->predictMask($user);

        header('Location: ../?p=1-1');
    }