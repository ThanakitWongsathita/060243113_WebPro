<?php
    $userId = $_POST['customerId'];
    $user = $_POST['uName'];
    $place = $_POST['live'];
    $mail = $_POST['email'];
    $tel = $_POST['telNum'];
    info($userId,$user,$place,$mail,$tel);

    function info($id,$user,$place,$mail,$tel)
        {
            echo "<b>Input info </b><br>";
            echo "Id : <i> $id </i> <br>";
            echo "Name-Surname : <i> $user </i> <br>";
            echo "Adress : <i> $place </i> <br>";
            echo "Email : <i> $mail </i> <br>";
            echo "Tel.phone : <i> $tel </i> <br>";
        }
    
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

    $sql="update customer set customerName='$user',customerAddress='$place',customerEmail='$mail',customerTelephone='$tel' WHERE customerId='$customerId'";
    mysqli_query($conn,$sql) or die("Edit to customer table error".mysqli_error());
    mysqli_close($conn);
    echo'<br><br><h2>Edit customer id '.$userId.' complete</h2>';
    echo'</center>';
?>
<a href='customerList.php'> Back </a>