<html>
    <head><link rel="stylesheet" href="../final/css/style.css"></head>
    <body>
    <?php
        include "../final/lib/connect_db.php";
        $no = $_POST['modify'];

        $sql1 = "SELECT * FROM panel_tbl WHERE PANEL_NO = '$no'";
        $result1 = mysqli_query($connect, $sql1);
        $array = mysqli_fetch_array($result1);
    ?>
    <br><center><h2>Modify Panel</h2></center><hr><br>
    <center>
        <form name='f2' method='post' action='Admin_panel_tbl_modify_DB.php'>
            <input type='hidden' name='panel_no' value=<?php echo "$array[0]"; ?>>
            <input type='hidden' name='panel_category' value="<?php echo "$array[1]"; ?>">
            <input type='hidden' name='panel_name' value="<?php echo "$array[2]"; ?>">
            <input type='hidden' name='panel_desc' value="<?php echo "$array[3]"; ?>">
            <input type='hidden' name='panel_score' value=<?php echo "$array[4]"; ?>>
            <table class="panel_table" border='1' width='600' height='120' cellspacing='1'>
                <tr>
                    <td align='center' class="td_top" colspan=2>
                        <B>내 패널 등록 정보</B>
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'> 패널 카테고리 </p></td>
                    <td class="td_ex" width='80%'>
                        <input type='text' name='panel_category' value="<?php echo $array[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'> 패널 제목 </p></td>
                    <td class="td_ex" width='80%'>
                        <input size='48' type='text' name='panel_name' value="<?php echo $array[2]; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" align=right width='20%'> 패널 요약 </td>
                    <td class="td_ex" width='80%'>
                        <textarea name='panel_desc' rows=8 cols=50 placeholder="<?php echo $array[3]; ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" align=right width='20%'> 패널 평점 </td>
                    <td class="td_ex" width='80%'>
                        <?php echo $array[4]; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align=center>
                        <input type='submit' class="buttons" value=' Modify '>
                        <input type='reset' class="buttons" value=' Cancel '
                               onclick="location.replace('Admin_panel_tbl_manage.php');return false;">
                    </td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>