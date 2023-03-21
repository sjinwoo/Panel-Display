<?php
    include "../final/lib/connect_db.php";
    session_start();
    $no = $_POST['no'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pw = $_POST['pw1'];
    $pw_chk = $_POST['pw2'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];

    // 관리자 접근 수정
    if($_SESSION['session_id']=='admin') {
        $sql1 = "UPDATE user_tbl SET NAME = '$name' WHERE NO = $no";
        $result1 = mysqli_query($connect, $sql1);
        // 비밀번호를 입력하지 않으면, 기존 비밀번호 사용
        if ($pw != '') {
            $sql2 = "UPDATE user_tbl SET PW = '$pw' WHERE NO = $no";
            $result2 = mysqli_query($connect, $sql2);
        }
        $sql3 = "UPDATE user_tbl SET SEX = '$sex' WHERE NO = $no";
        $result2 = mysqli_query($connect, $sql3);
        $sql4 = "UPDATE user_tbl SET EMAIL = '$email' WHERE NO = $no";
        $result4 = mysqli_query($connect, $sql4);
        echo "<script>
        alert('수정이 완료되었습니다.');
        location.replace('Admin_user_tbl_manage.php');
        </script>";
        return false;
    } 

    // 사용자 접근 수정
    else {
        $sql1 = "UPDATE user_tbl SET NAME = '$name' WHERE NO = $no";
        $result1 = mysqli_query($connect, $sql1);
        $_SESSION['session_id'] = $id;
        if ($pw == '') {
            echo "<script>
            alert('비밀번호를 입력하세요.');
            history.back();
            </script>";
            return false;
        }
        if ($pw != $pw_chk) {
            echo "<script>
            alert('비밀번호가 일치하지 않습니다.');
            history.back();
            </script>";
            return false;
        }
        $sql2 = "UPDATE user_tbl SET PW = '$pw' WHERE NO = $no";
        $result2 = mysqli_query($connect, $sql2);
        $_SESSION['session_pw'] = $pw;
        $sql3 = "UPDATE user_tbl SET SEX = '$sex' WHERE NO = $no";
        $result2 = mysqli_query($connect, $sql3);
        $sql4 = "UPDATE user_tbl SET EMAIL = '$email' WHERE NO = $no";
        $result4 = mysqli_query($connect, $sql4);
        echo "<script>
        alert('수정이 완료되었습니다.');
        location.replace('User_my_menu.php')
        </script>";
        return false;
    }
?>
