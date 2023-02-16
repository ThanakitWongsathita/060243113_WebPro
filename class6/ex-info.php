<html>
    <head>
        <title>โปรแกรมรับค่าจากฟอร์มแบบ POST</title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
    <?php
        function info($user,$place,$mail,$tel)
           {
            echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br>";
            echo "ชื่อขนามสกุล : <i> $user </i> <br>";
            echo "ที่อยู่ : <i> $place </i> <br>";
            echo "อีเมล : <i> $mail </i> <br>";
            echo "เบอร์โทร : <i> $tel </i> <br>";
        }
        
        $user = $_POST['uName'];
        $place = $_POST['live'];
        $mail = $_POST['email'];
        $tel = $_POST['telNum'];
        info($user,$place,$mail,$tel);

        if(empty(trim($user))||empty(trim($place))||empty(trim($mail))||empty(trim($tel)))
        {
            echo"<script>alert('Please input all info'); history.back();</script>";
            exit();
        }
        elseif(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮๅะาิีึืุูเแัโำํใไ่็๊๋็a-zA-Z ]+$/",$user))
        {
            echo"<script>alert('Name is character only'); history.back();</script>";
            exit();
        }
        elseif(!filter_var(trim($mail),FILTER_VALIDATE_EMAIL))
        {
            echo"<script>alert('$mail is not invalid email'); history.back();</script>";
            exit();
        }
        elseif(!ctype_digit(trim($tel)))
        {
            echo"<script>alert('Telphone is number only'); history.back();</script>";
            exit();
        }
    ?>
    <a href='ex.php'> Back </a>
    </body>
</html>