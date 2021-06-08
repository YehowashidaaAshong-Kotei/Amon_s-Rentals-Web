<?php

$username=  $_POST['username'];
$email=  $_POST['email'];
$password=  $_POST['password_1'];
$password = $_POST['password_2'];

$host= 'localhost';
$dbusername= 'root';
$dbpassword= '';
$dbname= 'car_rental';

if(isset($_POST['register']))
{
    //connect to server
    $con= new mysqli($host, $dbusername, $dbpassword, $dbname);

    //check if connection was successful
    if($con->connect_error)
    {
        die( "Connection Error: ".  $con->connect_error );

    }

    $querry=  "INSERT INTO users (username, email,password)  VALUES ('$username' , '$email', '$password') ";

    $result= mysqli_query($con, $querry);

    if($result==true)
    {
        echo "Registration Successful";

        header("Location: signin.html");

    }
    else
    {
        echo "Registration Failed". $querry. "<br>". mysqli_error($con);
    }

    $con->close();

}
  

?>