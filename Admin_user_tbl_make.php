<html>
    <head><link rel="stylesheet" href="../final/css/style.css"></head>
<body>
    <center>
        <br><br>
        <?php
            include "../final/lib/connect_db.php";
            if ($db){ echo "<B>[ final_db ]</B> 데이터베이스 선택 완료"; }
            else { echo "데이터베이스 선택 실패!"; exit; }
        ?>
        <br><br><hr><br>
        <?php
            $sql1 = "SHOW tables LIKE 'user_tbl'";
            $result1 = mysqli_fetch_row(mysqli_query($connect, $sql1));
            if ($result1[0] != NULL) {
                echo "<B>[ user_tbl ]</B> 테이블이 이미 존재합니다.<br>";
            }
            else {
                $sql = "CREATE TABLE IF NOT EXISTS user_tbl(";
                $sql = $sql."NO int NOT NULL AUTO_INCREMENT, ";
                $sql = $sql."ID varchar(12) NOT NULL, ";
                $sql = $sql."PW varchar(12) NOT NULL, ";
                $sql = $sql."NAME varchar(12), ";
                $sql = $sql."SEX char(1), ";
                $sql = $sql."EMAIL varchar(30), ";
                $sql = $sql."Primary Key (NO)) ";
                $sql = $sql."default charset=utf8";
                $result = mysqli_query($connect, $sql);

                if ($result)  { echo "<B>[ user_tbl ]</B> 테이블을 성공적으로 만들었습니다.<br>"; }
                else { echo "user_tbl 테이블 생성 실패!"; }
                mysqli_close($connect);
            }
        ?>
        <br><hr><br>
        <tr>
            <a href='http://localhost/final/Admin_page.php'><input type='button' class="buttons" value=' Go to Menu '></a>
        </tr>
    </center>
</body>
</html>
