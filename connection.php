<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "portfolio";
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    if(!$conn){
        die("connection failed!!".mysqli_connect_error());

    }
    echo "";

    
if (isset($_POST ['submit'] ) )
{
    $name =$_POST ['name'];
    $email =$_POST ['email'];
    $sql_query = " INSERT INTO portfolio_users (name, email) values ('$name', '$email')";
    if(mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted Successfully !";
    }

else{
    echo 'something went wrong try agian'.$sql. "" .$mysqli_error($conn);
}
    mysql_close($conn);
}   
?>