<html>
    <head>
        <link rel="stylesheet" href="../final/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="Primary">
        <br>
        <center><h2> 패널 평가 </h2></center><hr>
        <?php
            include "../final/lib/connect_db.php";
            $sql = "SELECT * FROM panel_tbl";
            $result = mysqli_query($connect, $sql);
            $result1 = mysqli_query($connect, $sql);
        ?>
        <center>
        <br>
        <table class="panel_table" width='700' border='2' cellpadding='10'>
            <tr>
                <td class="td_top" align='center' width='15%'><B> 순번 </B></td>
                <td class="td_top" align='center' width='20%'><B> 카테고리 </B></td>
                <td class="td_top" align='center' width='50%'><B> 패널 이름 </B></td>
                <td class="td_top" align='center' width='15%'><B> 평점 </B></td>
            </tr>
            <?php
                $rows = mysqli_fetch_row($result);
                if ($rows == []) {
                    echo "<tr><td align='center' colspan='4'>등록된 패널이 없습니다.</td></tr>";
                }
                while ($rows = mysqli_fetch_row($result1)) {
                    echo "<tr>";
                    for ($a = 0; $a < 3; $a++) echo "<td align='center'>$rows[$a]</td>";
                    echo "<form name='f1' method='post' action='User_panel_eval_DB.php'>";
                    echo "<td align='center'><input type='number' name='score' value=''>";
                    echo "<input type='hidden' name='panel_no' value='$rows[0]'>";
                    echo "<input type='submit' class='submit_button' value=' Submit '>";
                    echo "</td></form></tr>";
                }
            ?>
        </table><br><hr>
        <center>
            <a href='http://localhost/final/User_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
        </center>
    </body>
</html>