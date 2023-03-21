<html>
    <head>
        <title> 회원가입 </title>
        <link rel="stylesheet" href="../final/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="Primary">
        <br><center><h2>Sign Up</h2></center><hr>
        <center>
            <form name='sign_up_form' method='post' action='User_sign_up_DB.php'>
                <table class="signup_table" border='1' width='700' height='120' cellspacing='1'>
                    <tr>
                        <td align='center' class="td_top" colspan=2>
                            회원 가입 [ * 는 반드시 기입할 사항입니다.]
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>* 아이디</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='text' size = '20' name='id' id='id' value=''>
                            (영문과 숫자 12자리 까지)
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>* 이름</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='text' size = '20' name='name' id='name' value=''>
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
                            <input type='radio' name='sex' value='M' checked> 남
                            <input type='radio' name='sex' value='W'> 여
                        </td>
                    </tr>
                    <tr>
                        <td class="td_menu" width='20%'><p align='right'>이메일</p></td>
                        <td class="td_ex" width='80%'>
                            <input type='text' size='40' name='email' value=''>
                            (예: sjw5953@naver.com)
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center>
                            <input type='submit' class="buttons" value=' Sign Up '>&nbsp;&nbsp;
                            <input type='reset' class="buttons" value=' Reset '>&nbsp;&nbsp;
                            <a href='http://localhost/final/main.php'><input type='button' class="buttons" value=' Go to main '></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
