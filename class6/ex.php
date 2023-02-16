<html>
    <head>
        <title> การสร้างฟอร์ม </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php
        /*if (isset($_POST['submit']))
        {
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
        }*/
        //else
        //{
        ?>
        <form action="ex-info.php" method="post" name="form2" id="form2">
            Username : <input type="text" maxlength="10" name="uname"><br> <br>
            Password : <input type="password" maxlength="6" name="pass"><br> <br>
            ความคิดเห็น : <textarea cols="40" rows="5" name="comment"></textarea><br>
            <br />
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
        </form>
        <?php
        //}
        ?>
    </body>
</html>