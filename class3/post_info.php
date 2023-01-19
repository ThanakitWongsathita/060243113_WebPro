<html>
    <head>
        <title>โปรแกรมรับค่าจากฟอร์มแบบ POST</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    <?php
        function info($stdId,$name,$sex)
        {
            echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br>";
            echo "ID : <i> $stdId </i> <br>";
            echo "Name : <i> $name </i> <br>";
            echo "Sex : <i> $sex </i> <br>";
        }
        function interest($hobbie,$color)
        {
            for($i=0;$i<count($hobbie);$i++)
            {
                if(trim($hobbie[$i])!="")
            {
                echo "Hobbie : ".$hobbie[$i]."<br>"; 
            }
            }

            for($i=0;$i<count($color);$i++)
            {
                if(trim($color[$i])!="")
            {
                echo "Color : ".$color[$i]."<br>"; 
            }
            }
        }
        $id = $_POST['id'];
        $nameSurename = $_POST['nameSurename'];
        $sex = $_POST['sex'];

        info($id,$nameSurename,$sex);
        interest($_POST["chkhob"],$_POST["chkcolor"]);
        ?>
    <a href='dropListBox.php'> Back </a>    
    </body>
</html>