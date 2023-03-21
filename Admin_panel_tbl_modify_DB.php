<?php
    include "../final/lib/connect_db.php";
    session_start();
    $panel_no = $_POST['panel_no'];
    $panel_category = $_POST['panel_category'];
    $panel_name = $_POST['panel_name'];
    $panel_desc = $_POST['panel_desc'];
    $panel_score = $_POST['panel_score'];

    $sql1 = "UPDATE panel_tbl SET PANEL_NAME = '$panel_name' WHERE PANEL_NO='$panel_no'";
    $result1 = mysqli_query($connect, $sql1);

    $sql2 = "UPDATE panel_tbl SET PANEL_CATEGORY = '$panel_category' WHERE PANEL_NO='$panel_no'";
    $result2 = mysqli_query($connect, $sql2);
    if(!empty($panel_desc)) {
        $sql3 = "UPDATE panel_tbl SET PANEL_DESC = '$panel_desc' WHERE PANEL_NO='$panel_no'";
        $result3 = mysqli_query($connect, $sql3);
    }
    $sql4 = "UPDATE panel_tbl SET PANEL_SCORE = '$panel_score' WHERE PANEL_NO='$panel_no'";
    $result4 = mysqli_query($connect, $sql4);
    
    echo "<script>
    alert('수정이 완료되었습니다.');
    location.replace('Admin_panel_tbl_manage.php');
    </script>";
    return false;
?>

