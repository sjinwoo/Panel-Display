<?php
    include "../final/lib/connect_db.php";
    session_start();
    $category = $_POST['panel_category'];
    $name = $_POST['panel_name'];
    $desc = $_POST['panel_desc'];
    $id = $_SESSION['session_id'];
    
    $sql = "SELECT NO FROM user_tbl WHERE ID = '$id'";
    $res = mysqli_query($connect, $sql);
    $no = mysqli_fetch_array($res);

    if(empty($name)) {
        echo "<script>
        alert('[필수 입력 사항 확인]\\r\\n패널 이름은 반드시 입력해야 합니다.');
        history.back();
        </script>";
        die;
    }

    $sql = "INSERT INTO panel_tbl (PANEL_CATEGORY, PANEL_NAME, PANEL_DESC, PANEL_SCORE, USER_NO)";
    $sql.= "VALUES ('$category', '$name', '$desc', '0.0', '$no[0]')";
    $res = mysqli_query($connect, $sql);
    
    if($res) {
        echo "<script>
        alert('[등록 성공]\\r\\n패널이 등록되었습니다.');
        location.replace('User_page.php');
        </script>";
    } else {
        echo "<script>
        alert('[등록 실패]\\r\\n패널 등록을 실패했습니다.');
        history.back();
        </script>";
    }
    mysqli_close($conncet);
?>