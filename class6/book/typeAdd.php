<html>
    <head>
        <title>Add book type</title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <form action="typeInfo.php" method="post" name="form2" id="form2">
            <table border="2" bordercolor="black" width="60%" height="170" align="center">
            <caption>Add book type</caption>
            <tr><td colspan="2"><font color="red">* require field</font></th></tr>
            <tr>
                <td>Type id :</td>
                <td><input type="text" name="typeId"></td>
            </tr>
            <tr>
                <td>Type name :</td>
                <td><input type="text" name="typeName"></td>
            </tr>
            </table>
            <center>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
            </center>
        </form>
    </body>
</html>