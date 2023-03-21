<html>
    <head><link rel="stylesheet" href="../final/css/style.css"></head>
    <body>
        <center><h2> 유저 목록 </h2></center><hr>
        <?php
            include "../final/lib/connect_db.php";
            $sql = "SELECT * FROM user_tbl";
            $result = mysqli_query($connect, $sql);
            $result1 = mysqli_query($connect, $sql);
        ?>
        <center>
        <br>
        <table width='800' border='2' bordercolor='#000000' cellpadding='10' bgcolor='#FFFFFF'>
            <tr>
                <td class="td_top" align='center'><B> 순번 </B></td>
                <td class="td_top" align='center'><B> 아이디 </B></td>
                <td class="td_top" align='center'><B> 비밀번호 </B></td>
                <td class="td_top" align='center'><B> 이름 </B></td>
                <td class="td_top" align='center'><B> 성별 </B></td>
                <td class="td_top" align='center'><B> 이메일 </B></td>
                <td class="td_top" align='center' width='16%'><B> 비고 </B></td>
            </tr>
            <?php
                $rows = mysqli_fetch_row($result);
                if ($rows == []) {
                    echo "<tr><td align='center' colspan='4'>등록된 회원이 없습니다.</td></tr>";
                }
                while ($rows = mysqli_fetch_row($result1)) {
                    echo "<tr>";
                    for ($a = 0; $a < 6; $a++) echo "<td align='center'>$rows[$a]";
                    echo "<td><form name='del' style='float:left;' method='post' action='Admin_user_tbl_delete.php'>";
                    echo "<input type='submit' class='admin_button' value='삭제'>&nbsp;";
                    echo "<input type='hidden' name='delete' value='$rows[0]'></form>";
                    echo "<form name='mod' style='float:left;' method='post' action='Admin_user_tbl_modify.php'>";
                    echo "<input type='submit' class='admin_button' value='수정'>";
                    echo "<input type='hidden' name='modify' value='$rows[0]'></form></td>";
                    echo "</tr>";
                }
                ?>
        </table><br><hr>
        </center>
        <center>
        <tr>
            <a href='http://localhost/final/Admin_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
        </tr>
        </center>
    </body>
</html>