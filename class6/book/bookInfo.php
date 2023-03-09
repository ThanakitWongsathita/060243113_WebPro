<html>
    <head>
        <title> Input success </title>
        <link rel="stylesheet" type="text/css">
    </head>

    <body>
    <?php
        $bookId = $_POST['bookId'];
        $bookName = $_POST['bookName'];
        $typeId = $_POST['typeId'];
        $statusId = $_POST['statusId'];
        $publish = $_POST['publish'];
        $unitPrice = $_POST['unitPrice'];
        $unitRent = $_POST['unitRent'];
        $dayAmount = $_POST['dayAmount'];
        $picture = $_POST['picture'];
        $bookDate = $_POST['bookDate'];

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

        $sql="insert into books(bookId ,bookName,typeId,statusId,publish,unitPrice,unitRent,dayAmount,picture,bookDate)values('$bookId' ,'$bookName','$typeId','$statusId','$publish','$unitPrice','$unitRent','$dayAmount','$picture','$bookDate')";
        mysqli_query($conn,$sql) or die("Insert to customer table error".mysqli_error());
        echo'<br><br><h2>Insert Book name'.$bookName.'complete</h2>';
        echo'</center>';
    ?>
    <a href='bookList.php'> Back </a>
    </body>
</html>