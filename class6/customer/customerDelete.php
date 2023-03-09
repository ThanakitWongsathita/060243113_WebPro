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

    $sql="delete from customer where customerId = '$customerId'";
    mysqli_query($conn,$sql) or die("Delete from customer error".mysqli_error());
    mysqli_close($conn);
    header("location:customerList.php");
?>