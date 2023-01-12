<html>
    <head>
        <title> การสร้างฟอร์ม </title>
    </head>

    <body>
        <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
        <form action="" method="post" name="form1" id="form1">
            รหัสนักศึกษา : <input type="text" name="id" maxlength="10" /><br />
            ชื่อ-นามสกุลนักศึกษา : <input type="text" name="nameSure" size="40" /><br />
            รหัส่ผ่าน : <input type="password" name="password" maxlength="6" size="6" /><br />
            เพศ :   <input type="radio" name="sex" value="1" /> ชาย
                    <input type="radio" name="sex" value="2" /> หญิง <br />
            งานอดิเรก :
            <input type="checkbox" name="readBook" value="1" /> อ่านหนังสือ
            <input type="checkbox" name="watchTv" value="2" /> ดูโทรทัศน์
            <input type="checkbox" name="playSport" value="3" /> เล่นกีฬา<br />
            อัพโหลดข้อมูล : 
            <input type="file" name="sendFile"/> <br />
            <input type="submit" name="subFile" />
            <input type="reset" name="resetFile"/>
        </form>
    </body>
</html>