<html>
    <head>
        <title> การสร้างฟอร์ม </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php
            echo '<center>';
            echo '<br><h3>Customer List</h3></br>';
            echo '<table width="800" border="0">';
            echo '<tr><td align="left"><a href="ex.php">Add customer</a></td></tr>';

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

            $sql = "select * from customer order by customerId";
            $result = mysqli_query($conn,$sql);
            
            echo '<br><table width="800" border="1">';
            echo '<tr bgcolor="">';
            echo '<th width="150">Id</th>';
            echo '<th width="200">Name-Surname</th>';
            echo '<th width="200">Address</th>';
            echo '<th width="200">Email</th>';
            echo '<th width="200">Tel.number</th>';
            echo '<th width="80">Edit</th>';
            echo '<th width="80">Delete</th></tr>';

            while($rs = mysqli_fetch_array($result))
            {
                echo '<tr bgcolor="">';
                echo '<td align="center">'.$rs["customerId"].'</td>';
                echo '<td>'.$rs["customerName"].'</td>';
                echo '<td>'.$rs["customerAddress"].'</td>';
                echo '<td>'.$rs["customerEmail"].'</td>';
                echo '<td>'.$rs["customerTelephone"].'</td>';
                
                echo '<td><a href="customerUpdate.php?customerId='.$rs["customerId"].'">[edit]</a></td>';
                echo '<td><a href="customerDelete.php?customerId='.$rs["customerId"].'" onclick="return confirm(\'Confirm delete customer id '.$rs["customerId"].'\')">[delete]</a></td>';
            }
            echo '</table>';
            mysqli_close($conn);
        ?>
    </body>
</html>