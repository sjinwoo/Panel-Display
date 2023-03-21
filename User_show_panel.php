<html>
    <head>
        <link rel="stylesheet" href="../final/css/style.css">
    </head>
    <body>
        <br>
        <center><h2> Panel List </h2></center><hr>
        <?php
            include "../final/lib/connect_db.php";
            $sql = "SELECT * FROM panel_tbl";
            $result = mysqli_query($connect, $sql);
            $result1 = mysqli_query($connect, $sql);
        ?>
        <br>
        <center>
        <table class="list_table" border='2' cellpadding='10'>
            <tr>
                <td class="td_top" align='center' width='6%'><B> 순번 </B></td>
                <td class="td_top" align='center' width='9%'><B> 카테고리 </B></td>
                <td class="td_top" align='center' width='29%'><B> 패널 이름 </B></td>
                <td class="td_top" align='center' width='49%'><B> 패널 요약 </B></td>
                <td class="td_top" align='center' width='7%'><B> 평점 </B></td>
            </tr>
            <?php
                $rows = mysqli_fetch_row($result);
                if ($rows == []) {
                    echo "<tr><td align='center' colspan='4'>등록된 패널이 없습니다.</td></tr>";
                }
                while ($rows = mysqli_fetch_row($result1)) {
                    echo "<tr>";
                    for ($a = 0; $a < 5; $a++) echo "<td align='center'>$rows[$a]</td>";
                    echo "</tr>";
                }
                ?>
        </table><br><hr>
        <?php
            session_start();
            $sql1 = "SELECT NO FROM user_tbl WHERE ID = '{$_SESSION['session_id']}'";
            $result1 = mysqli_query($connect, $sql1);
            $result1 = mysqli_fetch_array($result1);
            
            $sql2 = "SELECT * FROM panel_tbl WHERE USER_NO = '{$result1[0]}'";
            $result2 = mysqli_query($connect, $sql2);
            $result2 = mysqli_fetch_array($result2);

            if (empty($result2)) {
                echo"<script>
                alert('패널을 먼저 등록하세요.');
                history.back();
                </script>";
            }
        ?>
        <form name='my_panel_form' method='post' action='User_my_panel.php'>
            <input type='hidden' name='panel_no' value=<?php echo "$result2[0]"; ?>>
            <input type='hidden' name='panel_category' value="<?php echo "$result2[1]"; ?>">
            <input type='hidden' name='panel_name' value="<?php echo "$result2[2]"; ?>">
            <input type='hidden' name='panel_desc' value="<?php echo "$result2[3]"; ?>">
            <input type='hidden' name='panel_score' value=<?php echo "$result2[4]"; ?>>
            <tr>
                <input type='submit' class="buttons" value=' Go to My Panel '>
                <a href='http://localhost/final/User_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
            </tr>
        </form>
        
        </center>
    </body>
</html>