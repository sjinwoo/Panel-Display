<html>
    <head>
        <title>사용자 페이지</title>
        <link rel="stylesheet" href="../final/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head> 
    <body class="Primary">
    <div class="page">
        <?php
            include "../final/lib/connect_db.php";
            session_start();
            $sql = "SELECT * FROM user_tbl WHERE ID ='{$_SESSION['session_id']}' AND PW = '{$_SESSION['session_pw']}'";
            $result = mysqli_query($connect, $sql);
            $array = mysqli_fetch_array($result);
        ?>

        <center>
        <td align='center'>
            <b><?php echo "User: {$array[3]} ( {$_SESSION['session_id']} )"; ?></b>
            <a href='http://localhost/final/main.php' onclick="alert('<?php echo ($array[3]); ?> 님 로그아웃합니다.');
                                                               location.replace('main.php');
                                                               return false;">
                <input type='button' class="buttons" value=' Logout '>
            </a>
        </td><br><br><hr><br>
        <table border='0' class="user_menu" width='200' cellspacing='1'>
            <tr>
                <td align='center'>
                    <B> 사용자 메뉴 </B>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='http://localhost/final/User_my_menu.php'><input type='button' class="menu_buttons" value=' 내 정보 관리 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='http://localhost/final/User_panel_register.php'><input type='button' class="menu_buttons" value=' 캡스톤 패널 등록 신청 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='http://localhost/final/User_show_panel.php'><input type='button' class="menu_buttons" value=' 캡스톤 패널 보기 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='http://localhost/final/User_panel_eval.php'><input type='button' class="menu_buttons" value=' 패널 평가하기 '></a>
                </td>
            </tr>
        </table>
        </center>
    </div>
    </body>
</html>