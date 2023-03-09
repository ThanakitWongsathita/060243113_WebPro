<html>
    <head>
        <title> Book list </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php
            echo '<center>';
            echo '<br><h3>Book List</h3></br>';
            echo '<table width="800" border="0">';
            echo '<tr><td align="left"><a href="bookCreate.php">Add book</a></td></tr>';

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

            $sql = "select * from books order by bookId";
            $result = mysqli_query($conn,$sql);
            
            echo '<br><table width="800" border="1">';
            echo '<tr bgcolor="">';
            echo '<th width="150">Id</th>';
            echo '<th width="200">Book name</th>';
            echo '<th width="200">Type</th>';
            echo '<th width="200">Status</th>';
            echo '<th width="200">Publish</th>';
            echo '<th width="80">Price</th>';
            echo '<th width="80">Rent</th>';
            echo '<th width="80">Day amount</th>';
            echo '<th width="80">Picture</th>';
            echo '<th width="80">Book date</th></tr>';

            while($rs = mysqli_fetch_array($result))
            {
                echo '<tr align="center" bgcolor="">';
                echo '<td>'.$rs["bookId"].'</td>';
                echo '<td>'.$rs["bookName"].'</td>';
                echo '<td>'.$rs["typeId"].'</td>';
                echo '<td>'.$rs["statusId"].'</td>';
                echo '<td>'.$rs["publish"].'</td>';
                echo '<td>'.$rs["unitPrice"].'</td>';
                echo '<td>'.$rs["unitRent"].'</td>';
                echo '<td>'.$rs["dayAmount"].'</td>';
                echo '<td>'.$rs["picture"].'</td>';
                echo '<td>'.$rs["bookDate"].'</td>';
            }
            echo '</table>';
            mysqli_close($conn);
        ?>
    </body>
</html>