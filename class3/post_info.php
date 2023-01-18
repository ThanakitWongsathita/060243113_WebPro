<html>
    <head>
        <title>โปรแกรมรับค่าจากฟอร์มแบบ POST</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    <?php
        $id = $_POST['id'];
        $nameSurename = $_POST['nameSurename'];
        $sex = $_POST['sex'];


        echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br>";
        echo "ID : <i> $id </i> <br>";
        echo "Name : <i> $nameSurename </i> <br>";
        echo "Sex : <i> $sex </i> <br>";
        echo "Hobbie : ";
        if(!empty($_POST["chk1"]))
        {
            echo $_POST["chk1"];
        }
        if(!empty($_POST["chk2"]))
        {
            echo ", ".$_POST["chk2"];
        }
        if(!empty($_POST["chk3"]))
        {
            echo ", ".$_POST["chk3"];
        }
        echo "<br>";

        for($i=0;$i<count($_POST["chkcolor"]);$i++)
        {
                if(trim($_POST["chkcolor"][$i])!="")
            {
                echo "chkcolor $i = ".$_POST["chkcolor"][$i]."<br>"; 
            }
        }
        echo "<br>";
        ?>
    <a href='dropListBox.php'> Back </a>    
    </body>
</html>