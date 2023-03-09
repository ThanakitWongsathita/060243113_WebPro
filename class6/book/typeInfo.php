<html>
    <head>
        <title> Input success </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
    <?php
        $typeId = $_POST['typeId'];
        $typeName = $_POST['typeName'];

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

        $sql="insert into typebook(typeId,typeName)values('$typeId' ,'$typeName')";
        mysqli_query($conn,$sql) or die("Insert to customer table error".mysqli_error());
        echo'<br><br><h2>Insert Book name'.$typeName.'complete</h2>';
        echo'</center>';
    ?>
    <a href='typeAdd.php'> Back </a>
    </body>
</html>