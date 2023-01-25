<html>
    <head>
        <title>โปรแกรมรับค่าจากฟอร์มแบบ POST</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    <?php
        function info($name,$pass,$comm)
        {
            echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br>";
            echo "ID : <i> $name </i> <br>";
            echo "Name : <i> $pass </i> <br>";
            echo "Sex : <i> $comm </i> <br>";
        }
        
        $user = $_POST['uname'];
        $password = $_POST['pass'];
        $comment = $_POST['comment'];
        info($user,$password,$comment);
    ?>
    <a href='txtArea.php'> Back </a>
    </body>
</html>