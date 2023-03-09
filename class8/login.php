<?php
    session_start(); //เรยี กฟังกช์ นั่ session_start() เพอื่ เรมิ่ ใชง้ําน session
    session_unregister("UserName");
?>
<form action="checkuser.php" method="post">
    <table align="center" border='1' width='300'>
    <tr>
        <td colspan='2' align='center'> กรุณําป้อนชอื่ ผใู้ชง้ํานและรหัสผํา่ น</td>
    </tr>
    <tr>
        <td>Username :</td> 
        <td><input type="text" name="UserName"></td>
    </tr>
    <tr>
        <td>Password :</td> 
        <td><input type="password" name="Password"></td>
    </tr>
    <tr>
        <td colspan='2' align='center'><input type="submit" value=" OK "></td>
    </tr>
</table>
</form>