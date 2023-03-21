<?php
    $connect = mysqli_connect('localhost', 'root', '5953') or die("mysql서버 접속 에러!");
    $db = mysqli_select_db($connect, 'final_db');
    mysqli_select_db($connect, 'final_db') or die("DB 접속 에러!");
?>