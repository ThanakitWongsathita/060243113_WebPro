<html>
    <head>
        <title> Edit customer </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php
            $customerId=$_REQUEST['customerId'];
            $hostName="localhost";
            $userName="root";
            $password="";
            $dbName="bookstore";
            $conn=mysqli_connect($hostName,$userName,$password);
            echo'<center>';
            if(!$conn)
            {
                die("Can't connect mySQL");
            }
            mysqli_select_db($conn,$dbName) or die("Can't slelct bookstore database");

            mysqli_query($conn,"set character_set_connection=utf8mb4");
            mysqli_query($conn,"set character_set_client=utf8mb4");
            mysqli_query($conn,"set character_set_results=utf8mb4");

            $sql="select * from customer WHERE customerId = '$customerId'";
            $dbQuery=mysqli_query($conn,$sql);

            if(!$dbQuery)
            {
                die("Select data error".mysqli_error());
            }
            $result=mysqli_fetch_object($dbQuery);
        ?>

        <form action="customerEditInfo.php" method="post" name="form2" id="form2">
            <table border="2" bordercolor="black" width="60%" height="170" align="center">
            <caption>Edit customer</caption>
            <tr><td colspan="2"><font color="red">* require field</font></th></tr>
            <tr>
                <td>Id :</td>
                <td><input type="text" name="customerId" value="<?php echo $result->customerId ?>" readonly></td>
            </tr>
            <tr>
                <td>Name-Surename :</td>
                <td><input type="text" name="uName" value="<?php echo $result->customerName ?>"/></td>
            </tr>
            <tr>
                <td>Adress :</td> 
                <td><textarea name="live" cols="55" rows="5" required><?php echo $result->customerAddress ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" value="<?php echo $result->customerEmail ?>"></td>
            </tr>
            <tr>
                <td>Tel.phone :</td>
                <td><input type="text" maxlength="10" minlength="10" name="telNum" value="<?php echo $result->customerTelephone ?>"></td>
            </tr>
            </table>
            <center>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" />
            </center>
        </form>
    </body>
</html>