<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
    <head>
        <title> การสร้างฟอร์ม </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
        if (isset($_POST['submit']))
        {
            function info($stdId,$name,$sex)
            {
                echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br>";
                echo "ID : <i> $stdId </i> <br>";
                echo "Name : <i> $name </i> <br>";
                echo "Sex : <i> $sex </i> <br>";
            }
            function interest($hobbie,$color)
            {
                echo "Hobbie : ";
                for($i=0;$i<count($hobbie);$i++)
                {
                    if(trim($hobbie[$i])!="")
                    {
                        echo $hobbie[$i].", "; 
                    }
                }
                echo "<br>Color : ";

                for($i=0;$i<count($color);$i++)
                {
                    if(trim($color[$i])!="")
                    {
                        echo $color[$i].", "; 
                    }
                }
            }
            $id = $_POST['id'];
            $nameSurename = $_POST['nameSurename'];
            $sex = $_POST['sex'];

            info($id,$nameSurename,$sex);
            interest($_POST["chkhob"],$_POST["chkcolor"]);
        }
        //else
        //{
        ?>
        <form method="post" action="droplistBox.php" name="form1" id="form1">
            รหัสบัตรประชาชน : <input type="text" size="34" maxlength="13" name="id" /><br>
            ชื่อ-นามสกุล : <input type="text" size="40" name="nameSurename" /><br>
            เพศ : 
            <select name="sex">
                <option value="male" />ชาย 
                <option value="female" />หญิง
            </select><br>
            งานอดิเรก :
            <input type="checkbox" name="chkhob[]" value="book" /> อ่านหนังสือ 
            <input type="checkbox" name="chkhob[]" value="tv" /> ดูโทรทัศน์ 
            <input type="checkbox" name="chkhob[]" value="sport" /> เล่นกีฬา
            <br>
            เลือกสี :
            <input type="checkbox" name="chkcolor[]" value="Red" /> สีแดง
            <input type="checkbox" name="chkcolor[]" value="Blue" /> สีนํ้าเงิน
            <input type="checkbox" name="chkcolor[]" value="Yellow" /> สีเหลือง
            <br>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
        </form>
        <?php
        //}
        ?>
    </body>
</html>