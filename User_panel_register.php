<html>
    <head>
        <title> 패널 등록 신청 </title>
        <link rel="stylesheet" href="../final/css/style.css">
    </head>
    <body>
        <?php
            include "../final/lib/connect_db.php";
            session_start();
            
            $sql = "SELECT NO FROM user_tbl WHERE ID = '{$_SESSION['session_id']}'";
            $result = mysqli_query($connect, $sql);
            $result = mysqli_fetch_array($result);

            $sql1 = "SELECT * FROM panel_tbl WHERE USER_NO = '$result[0]'";
            $result1 = mysqli_query($connect, $sql1);
            $result1 = mysqli_num_rows($result1);
            if ($result1 != 0) {
                echo "<script>
                alert('이미 패널을 등록하셨습니다.\\r\\n사용자 메뉴로 이동합니다. ');
                history.back();
                </script>";
            }
        ?>
        <br><center><h2>Register My Panel</h2></center><hr>
        <center>
            <form name='panel_register_form' method='post' action='User_panel_register_DB.php'>
                <table class="panel_table" border='1' width='600' height='120' cellspacing='1'>
                    <tr>
                        <td class="td_top" align='center' colspan=2>
                            패널 등록 신청서 [ * 는 반드시 기입할 사항입니다.]
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'> 패널 카테고리 </p></td>
                        <td width='80%'>
                            <input type='text' size = '20' name='panel_category' id='panel_category' value=''>
                            (연구, 개발, 서비스 등)
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'> * 패널 제목 </p></td>
                        <td width='80%'>
                            <input type='text' size = '48' name='panel_name' id='panel_name' value=''>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" align=right width='20%'> 패널 요약 </td>
                        <td width='80%'>
                            <textarea name='panel_desc' rows=8 cols=50></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center>
                            <input type='submit' class="buttons" value=' Register '>&nbsp;&nbsp;
                            <input type='reset' class="buttons" value=' Reset '>&nbsp;&nbsp;
                            <a href='http://localhost/final/User_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
