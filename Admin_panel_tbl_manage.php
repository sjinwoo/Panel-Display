<html>
    <head><link rel="stylesheet" href="../final/css/style.css"></head>
    <body>
        <br>
        <center><h2>PANEL Management</h2></center><hr>
        <?php
            include "../final/lib/connect_db.php";
            $sql = "SELECT * FROM panel_tbl";
            $result = mysqli_query($connect, $sql);
            $result1 = mysqli_query($connect, $sql);
        ?>
        <br>
        <center>
        <table class="admin_panel_table" width='1100' border='2' bordercolor='#000000' cellpadding='10' bgcolor='#FFFFFF'>
            <tr>
                <td class="td_top" align='center' width='3%'><B> 순번 </B></td>
                <td class="td_top" align='center' width='9%'><B> 카테고리 </B></td>
                <td class="td_top" align='center' width='27%'><B> 패널 이름 </B></td>
                <td class="td_top" align='center' width='45%'><B> 패널 요약 </B></td>
                <td class="td_top" align='center' width='5%'><B> 평점 </B></td>
                <td class="td_top" align='center' width='11%'><B> 비고 </B></td>
            </tr>
            <?php
                $rows = mysqli_fetch_row($result);
                if ($rows == []) {
                    echo "<tr><td align='center' colspan='4'>등록된 판넬이 없습니다.</td></tr>";
                }
                while ($rows = mysqli_fetch_row($result1)) {
                    echo "<tr>";
                    for ($a = 0; $a < 5; $a++) echo "<td align='center'>$rows[$a]";
                    echo "<td><form name='delete' style='float:left;' method='post' action='Admin_panel_tbl_delete.php'>";
                    echo "<input type='submit' class='admin_button' value='삭제'>&nbsp;";
                    echo "<input type='hidden' name='delete' value='$rows[0]'></form>";

                    echo "<form name='modify' style='float:left;' method='post' action='Admin_panel_tbl_modify.php'>";
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