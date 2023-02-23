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
        elseif(!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮๅะาิีึืุูเแัโำํใไ่็๊๋็์a-zA-Z ]+$/",$user))
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

        $hostName="localhost";
        $userName="root";
        $password="";
        $dbName="bookstore";

        $conn=mysqli_connect($hostName,$userName,$password);
        echo'<center>';
        if(!$conn)
        {
            die("Can't connect mySQL");
        }

        mysqli_select_db($conn,$dbName) or die("Can't slelct bookstore database");

        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_client=utf8mb4");
        mysqli_query($conn,"set character_set_results=utf8mb4");

        $sql="insert into customer(customerName,customerAddress,customerEmail,customerTelephone)values('$user','$place','$mail','$tel')";
        mysqli_query($conn,$sql) or die("Insert to customer table error".mysqli_error());
        echo'<br><br><h2>Insert customer name'.$user.'complete</h2>';
        echo'</center>';
    ?>
    <a href='customerList.php'> Back </a>
    </body>
</html>