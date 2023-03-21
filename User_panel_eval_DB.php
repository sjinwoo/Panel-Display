<?php
    include "../final/lib/connect_db.php";
    session_start();
    $user_id = $_SESSION['session_id'];
    $panel_no = $_POST['panel_no'];
    $score = $_POST['score'];

    $sql0 = "SELECT NO FROM user_tbl WHERE ID = '{$_SESSION['session_id']}'";
    $result0 = mysqli_query($connect, $sql0);
    $result0 = mysqli_fetch_array($result0);

    $sql1 = "SELECT * FROM score_tbl WHERE USER_NO = '$result0[0]' AND PANEL_NO = '$panel_no'";
    $result1 = mysqli_query($connect, $sql1);
    $result1 = mysqli_num_rows($result1);

    if($result1 > 0) {
        echo "<script>
        alert('이미 등록한 패널입니다.');
        history.back();
        </script>";
        die;
    }

    $sql2 = "INSERT INTO score_tbl (SCORE, USER_NO, PANEL_NO)";
    $sql2.= "VALUES ('$score', '$result0[0]', '$panel_no')";
    $result2 = mysqli_query($connect, $sql2);

    $sql3 = "SELECT * FROM panel_tbl WHERE PANEL_NO = '$panel_no'";
    $result3 = mysqli_query($connect, $sql3);
    $result3 = mysqli_fetch_array($result3);
    
    $sql4 = "SELECT AVG(SCORE) FROM score_tbl WHERE PANEL_NO = '$result3[0]'";
    $result4 = mysqli_query($connect, $sql4);
    $result4 = mysqli_fetch_array($result4);

    $sql5 = "UPDATE panel_tbl SET PANEL_SCORE = '$result4[0]' WHERE PANEL_NO = '$result3[0]'";
    $result5 = mysqli_query($connect, $sql5);

    if($result5) {
        echo "<script>
        alert('[$result3[2]]\\r\\n$score 점 등록 완료');
        history.back();
        </script>";
    }

    mysqli_close($conncet);
    
?>