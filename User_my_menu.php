<html>
    <head>
        <link rel="stylesheet" href="../final/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="Primary">
        <?php
            include "../final/lib/connect_db.php";
            session_start();
            $id = $_SESSION['session_id'];
            $pw = $_SESSION['session_pw'];
            
            $sql = "SELECT * FROM user_tbl WHERE ID = '$id' AND PW = '$pw' ";
            $result = mysqli_query($connect, $sql);
            $array = mysqli_fetch_array($result);
        ?>
        <br><center><h2>My Menu</h2></center><hr>
        <center>
            <form name='my_menu_form' method='post' action='DB_modify.php'>
                <input type='hidden' name='no' value=<?php echo "$array[0]"; ?>>
                <input type='hidden' name='id' value=<?php echo "$array[1]"; ?>>
                <table class="signup_table" border='1' width='700' height='120' cellspacing='1'>
                    <tr>
                        <td align='center' class="td_top" colspan=2>
                            내 정보 관리
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>아이디</p></td>
                        <td class="td_ex" width='80%'>
                            <B><?php echo "$array[1]"; ?></B>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>* 이름</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='text' size = '20' name='name' id='name' value=<?php echo "$array[3]"; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>* 비밀번호</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='password' size = '20' name='pw1' id='pw1' value=''>
                            (영문과 숫자 혼합하여 10자리 까지)
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>* 비밀번호 확인</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='password' size = '20' name='pw2' id='pw2' value=''>
                            (비밀번호와 똑같이 입력하세요.)
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
                            <input type='reset' class="buttons" value=' Cancel ' onclick="location.replace('User_page.php');return false;">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>