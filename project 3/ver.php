<?php
session_start();

$username=  $_POST['username'];
$password=  $_POST['password'];

$host= 'localhost';
$dbusername= 'root';
$dbpassword= '';
$dbname= 'car_rental';

if(isset($_POST['login']))
{
    //connect to server
    $con= new mysqli($host, $dbusername, $dbpassword, $dbname);

    //check if connection was successful
    if($con->connect_error)
    {
        die( "Connection Error: ".  $con->connect_error );

    }


    $query= "SELECT * FROM users WHERE username= '$username' AND password= '$password' ;";

    $ver= mysqli_query($con, $query);

    $number= mysqli_num_rows($ver);

    

    if($number == 1)
    {
        echo "Login Successful <p> Welcome  $username ";
        $_SESSION['loginValid']= 1;
        
        header("Location: rent.html");

    }
    else
    {
        echo "Unsuccessful Login.<p> Incorrect Username or Password" ;
    }

    $con->close();



}

?>