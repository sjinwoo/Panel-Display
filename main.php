<?php
    if(!empty($_SESSION['session_id'])) session_destroy();
?>
<html>
    <head>
        <link rel="stylesheet" href="../final/css/style.css">
        <title> main </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="primary">
        <br>
        <center><h3 class='word'><B>캡스톤 디자인 패널 전시</B></h3></center>
        <form name='login_form' action='login.php' method='post'>
            <table class='main_menu' width='350' border='1'align='center' cellpadding='5' cellspacing='0'>
                <tr>
                    <td class="td_top" align= 'center' colspan='2'><b> Login </b></td>
                </tr>
                <tr><td class="td_menu" width='35%' align='right'> ID </td>
                    <td align='left'><input type='text' name='id' id='id' size='20'></td>
                </tr>
                <tr><td class="td_menu" align='right'> Password </td>
                    <td align='left'><input type='password' name='pw' id='pw' size='20'></td>
                </tr>
                <tr><td colspan='2' align='center'>
                    <button type='submit' class="buttons"> Login </button>&nbsp;&nbsp;
                    <a href='http://localhost/final/User_sign_up.php'><input type='button' class="buttons" value='Sign Up'></a></td>
                </tr>
            </table>
        </form>
    </body>
</html>