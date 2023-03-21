<?php
    include "../final/lib/connect_db.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pw = $_POST['pw1'];
    $pw_chk = $_POST['pw2'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    
    $sql = "SELECT * FROM user_tbl WHERE ID = '$id'";
    $res = mysqli_query($connect, $sql);
    $num_id = mysqli_num_rows($res);

    if($num_id > 0) {
        echo "<script>
        alert('[아이디 중복]\\r\\n이미 사용중인 아이디 입니다.');
        history.back();
        </script>";
        die;
    }

    if(empty($id) || empty($name) || empty($pw) || empty($pw_chk)) {
        echo "<script>
        alert('[필수 입력 사항 확인]\\r\\n필수 입력 사항은 반드시 입력해야 합니다.');
        history.back();
        </script>";
        die;
    }
    if($pw!=$pw_chk) {
        echo "<script>
        alert('[비밀번호 확인 불일치]\\r\\n비밀번호 확인이 비밀번호와 일치하지 않습니다.');
        history.back();
        </script>";
        die;
    }

    $sql = "INSERT INTO user_tbl (ID, PW, NAME, SEX, EMAIL)";
    $sql.= "VALUES ('$id', '$pw', '$name', '$sex', '$email')";
    $res = mysqli_query($connect, $sql);
    
    if($res > 0) {
        echo "<script>
        alert('[등록 성공]\\r\\n회원으로 등록되었습니다.');
        location.replace('main.php');
        </script>";
    } else {
        echo "<script>
        alert('[등록 실패]\\r\\n회원으로 등록을 실패했습니다.');
        history.back();
        </script>";
    }
    mysqli_close($conncet);
?>