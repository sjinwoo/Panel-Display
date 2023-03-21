<html>
    <head>
        <title>관리자 페이지</title>
        <link rel="stylesheet" href="../final/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="Primary">
        <center>
        <td align='center'>
            <?php session_start(); ?>
            <b><?php echo "User: 관리자 ({$_SESSION['session_id']})"; ?></b>
            <a href='http://localhost/final/main.php' onclick="alert('관리자 님 로그아웃합니다.');
                                                               location.replace('main.php');
                                                               return false;">
                <input type='button' class="buttons" value=' Logout '>
            </a>
        </td><br><br><hr><br>
        <table border='0' class="user_menu" width='200' cellspacing='1'>
            <tr>
                <td align='center'>
                    <B> 관리자 메뉴 </B>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='Admin_user_tbl_make.php'><input type='button' class="menu_buttons" value=' [user_tbl] 생성하기 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='Admin_user_tbl_manage.php'><input type='button' class="menu_buttons" value=' 회원 관리 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='Admin_panel_tbl_make.php'><input type='button' class="menu_buttons" value=' [panel_tbl] 생성하기 '></a>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <a href='Admin_panel_tbl_manage.php'><input type='button' class="menu_buttons" value=' 패널 관리 '></a>
                </td>
            </tr>
        </table>
    </body>
</html>