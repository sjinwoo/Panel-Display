<?php
    session_start();
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $_SESSION['session_id'] = $id;
    $_SESSION['session_pw'] = $pw;
?>