<html>
    <head>
        <title> Input success </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
    <?php
        $statusId = $_POST['statusId'];
        $statusName = $_POST['statusName'];

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

        $sql="insert into statusbook(statusId,statusName)values('$statusId' ,'$statusName')";
        mysqli_query($conn,$sql) or die("Insert to customer table error".mysqli_error());
        echo'<br><br><h2>Insert Book name'.$statusName.'complete</h2>';
        echo'</center>';
    ?>
    <a href='statusAdd.php'> Back </a>
    </body>
</html>