<html>
    <head>
        <title> 내 패널 </title>
        <link rel="stylesheet" href="../final/css/style.css">
    </head>
    <body>
        <br><center><h2>My Panel</h2></center><hr>
        <center>
            <form name='panel_register_form' method='post' action='User_panel_register_DB.php'>
                <br>
                <table class="panel_table" border='1' width='700' height='120' cellspacing='1'>
                    <tr>
                        <td align='center' class="td_top" colspan=2>
                            <B>내 패널 등록 정보</B>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'> 패널 카테고리 </p></td>
                        <td width='80%'>
                            <?php echo $_POST['panel_category']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'> 패널 제목 </p></td>
                        <td width='80%'>
                        <?php echo $_POST['panel_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" align=right width='20%'> 패널 요약 </td>
                        <td width='80%'>
                            <?php echo $_POST['panel_desc']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" align=right width='20%'> 패널 평점 </td>
                        <td width='80%'>
                            <?php echo $_POST['panel_score']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center>
                            <a href='http://localhost/final/User_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
