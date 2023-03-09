<html>
    <head>
        <title>Create book</title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <form action="bookInfo.php" method="post" name="form2" id="form2">
            <table border="2" bordercolor="black" width="60%" height="170" align="center">
            <caption>Create book</caption>
            <tr><td colspan="2"><font color="red">* require field</font></th></tr>
            <tr>
                <td>Book id :</td>
                <td><input type="text" name="bookId"></td>
            </tr>
            <tr>
                <td>Book name :</td>
                <td><input type="text" name="bookName"></td>
            </tr>
            
            <tr>
                <td>Type :</td>
                <td><input type="text" name="typeId"></td>
            </tr>
            <tr>
                <td>Status :</td>
                <td><input type="text" name="statusId"></td>
            </tr>
            <tr>
                <td>Publish :</td> 
                <td><input type="text" name="publish"></td>
                </td>
            </tr>
            <tr>
                <td>Price :</td> 
                <td><input type="text" name="unitPrice"></td>
                </td>
            </tr>
            <tr>
                <td>Rent :</td>
                <td><input type="text" name="unitRent"></td>
            </tr>
            <tr>
                <td>Day amount :</td>
                <td><input type="text" name="dayAmount" ></td>
            </tr>
            <tr>
                <td>Picture :</td>
                <td><input type="text" name="picture" ></td>
            </tr>
            <tr>
                <td>Book date :</td>
                <td><input type="date" name="bookDate" ></td>
            </tr>
            </table>
            <center>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
            </center>
        </form>
    </body>
</html>