<html>
    <head>
        <title>Add book status</title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <form action="statusInfo.php" method="post" name="form2" id="form2">
            <table border="2" bordercolor="black" width="60%" height="170" align="center">
            <caption>Add book status</caption>
            <tr><td colspan="2"><font color="red">* require field</font></th></tr>
            <tr>
                <td>Status id :</td>
                <td><input type="text" name="statusId"></td>
            </tr>
            <tr>
                <td>Status name :</td>
                <td><input type="text" name="statusName"></td>
            </tr>
            </table>
            <center>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
            </center>
        </form>
    </body>
</html>