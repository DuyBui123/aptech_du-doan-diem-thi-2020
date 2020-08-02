<?php
    include_once('../db.php');
    if ($_POST) {
        $real_mark = $_POST['textRealMark'];
        $id = $_POST['txtId'];
        $db = new DB();
        $db->updateRealMark($id, $real_mark);
        header('Location: ../?p=3-1');
    }