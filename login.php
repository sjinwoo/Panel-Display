    <?php
        include "../final/lib/connect_db.php";
        include "../final/lib/session.php";

        # 관리자 모드 
        if ($_SESSION['session_id'] == 'admin' && $_SESSION['session_pw'] == 'admin') {
            echo "<script>
            alert('관리자 모드로 접속합니다.');
            location.replace('Admin_page.php');
            </script>";
        }

        # 유저 모드
        $sql = "SELECT * FROM user_tbl WHERE ID = '{$_SESSION['session_id']}' AND PW = '{$_SESSION['session_pw']}'";
        $res = mysqli_query($connect, $sql);
        $num_rows = mysqli_num_rows($res);
        
        if($num_rows == 1) {
            $row = mysqli_fetch_array($res);
            echo "<script>
            alert('{$row[3]} 님 환영합니다.');
            location.replace('User_page.php');
            </script>";
            
        } else {
            echo "<script>
            alert('[로그인 실패]\\r\\n아이디 또는 비밀번호가 일치하지 않습니다.\\r\\n메인 화면으로 이동합니다. ');
            history.back();
            </script>";
        }
        mysqli_close($connect);
    ?>
