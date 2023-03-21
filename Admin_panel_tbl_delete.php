<?php
    include "../final/lib/connect_db.php";
    $no = $_POST['delete'];
    $sql = "DELETE FROM score_tbl WHERE PANEL_NO = '$no'";
    $result = mysqli_query($connect, $sql);

    $sql1 = "DELETE FROM panel_tbl WHERE PANEL_NO = '$no'";
    $result1 = mysqli_query($connect, $sql1);
    
    if($result1) {
        echo "<script>
        alert('삭제되었습니다.');
        location.replace('Admin_panel_tbl_manage.php');
        </script>";
        return false;
    }
?>
