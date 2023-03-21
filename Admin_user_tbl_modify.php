<html>
    <head><link rel="stylesheet" href="../final/css/style.css"></head>
    <body>
    <?php
    include "../final/lib/connect_db.php";
    $no = $_POST['modify'];

    $sql1 = "SELECT * FROM user_tbl WHERE NO=$no";
    $result1 = mysqli_query($connect, $sql1);
    $array = mysqli_fetch_array($result1);
    ?>
    <br><center><h2>Modify</h2></center><hr><br>
    <center>
        <form name='sign_up' method='post' action='DB_modify.php'>
            <input type='hidden' name='no' value=<?php echo "$array[0]"; ?>>
            <table  class="mymenu_table" border='1' width='700' height='120' cellspacing='1'>
                <tr>
                    <td align='center' class="td_top" colspan=2>
                        사용자 정보 수정 [ * 는 반드시 기입할 사항입니다.]
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>* 아이디</p></td>
                    <td class="td_ex" width='80%'>
                        <?php echo "$array[1]"; ?>
                        (영문과 숫자 12자리 까지)
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>* 비밀번호</p></td>
                    <td class="td_ex" width='80%'>
                        <input type='password' size = '20' name='pw1' value=''>
                        (영문과 숫자 혼합하여 10자리 까지)
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>* 비밀번호 확인</p></td>
                    <td class="td_ex" width='80%'>
                        <input type='password' size = '20' name='pw2' value=''>
                        (비밀번호와 똑같이 입력하세요.)
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>* 이름</p></td>
                    <td class="td_ex" width='80%'>
                        <input type='text' size = '20' name='name' id='name' value=<?php echo "$array[3]"; ?>>
                        (5글자 까지 가능)
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>성별</p></td>
                    <td class="td_ex" width='80%'>
                        <input type='radio' name='sex' value='M' <?php if($array[4] == 'M') echo "checked"; ?>> 남
                        <input type='radio' name='sex' value='W' <?php if($array[4] == 'W') echo "checked"; ?>> 여
                    </td>
                </tr>
                <tr>
                    <td class="td_menu" width='20%'><p align='right'>이메일</p></td>
                    <td class="td_ex" width='80%'>
                        <input type='text' size='40' name='email' value=<?php echo "$array[5]"; ?>>
                        (예: sjw5953@naver.com)
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align=center>
                        <input type='submit' class="buttons" value=' Modify '>
                        <input type='reset' class="buttons" value=' Cancel ' onclick="location.replace('Admin_user_tbl_manage.php');return false;">
                    </td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>