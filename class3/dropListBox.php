<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
    <head>
        <title> การสร้างฟอร์ม </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <form method="post" action="post_info.php" name="form1" id="form1">
            รหัสบัตรประชาชน : <input type="text" size="34" maxlength="13" name="id" /><br>
            ชื่อ-นามสกุล : <input type="text" size="40" name="nameSurename" /><br>
            เพศ : 
            <select name="sex">
                <option value="male" />ชาย 
                <option value="female" />หญิง
            </select><br>
            งานอดิเรก :
            <input type="checkbox" name="chk1" value="book" /> อ่านหนังสือ 
            <input type="checkbox" name="chk2" value="tv" /> ดูโทรทัศน์ 
            <input type="checkbox" name="chk3" value="sport" /> เล่นกีฬา
            <br>
            เลือกสี :
            <input type="checkbox" name="chkcolor[]" value="Red" /> สีแดง
            <input type="checkbox" name="chkcolor[]" value="Blue" /> สีนํ้าเงิน
            <input type="checkbox" name="chkcolor[]" value="Yellow" /> สีเหลือง
            <br>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
        </form>
    </body>
</html>