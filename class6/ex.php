<html>
    <head>
        <title> การสร้างฟอร์ม </title>
        <link rel="stylesheet" type="text/css">
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
            <table border="2" bordercolor="black" width="60%" height="170" align="center">
            <caption>เพิ่มข้อมูลลูกค้า</caption>
            <tr><td colspan="2"><font color="red">* require field</font></th></tr>
            <tr>
                <td>ชื่อ-นามสกุล :</td>
                <td><input type="text" name="uName"></td>
            </tr>
            <tr>
                <td>ที่อยู่ :</td> 
                <td><textarea cols="40" rows="4" required name="live">
                </textarea><font color="red"></font>
                </td>
            </tr>
            <tr>
                <td>อีเมล :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>หมายเลขโทรศัพท์ :</td>
                <td><input type="text" maxlength="10" minlength="10" name="telNum" ></td>
            </tr>
            </table>
            <center>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
            </center>
        </form>
        <?php
        //}
        ?>
    </body>
</html>