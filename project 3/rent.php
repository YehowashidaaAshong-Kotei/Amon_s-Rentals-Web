<?php

$fname=  $_POST['fname'];
$pay=  $_POST['pay_ment'];
$phone=  $_POST['phone_number'];
$vehicle = $_POST['vehicle'];
$date=  $_POST['date'];
$dur=  $_POST['duration'];

$host= 'localhost';
$dbusername= 'root';
$dbpassword= '';
$dbname= 'car_rental';

if(isset($_POST['rent']))
{
    //connect to server
    $con= new mysqli($host, $dbusername, $dbpassword, $dbname);

    //check if connection was successful
    if($con->connect_error)
    {
        die( "Connection Error: ".  $con->connect_error );

    }

    $querry=  "INSERT INTO rentals (Full_name, payment,telephone_number,vehicle,date,duration)  VALUES ('$fname' , '$pay', '$phone','$vehicle','$date','$dur') ";

    $result= mysqli_query($con, $querry);

    if($result==true)
    {
        echo "Rental Successful";
        header("Location: welcomepage.php");
    }
    else
    {
        echo "Re Failed". $querry. "<br>". mysqli_error($con);
    }

    $con->close();

}
  

?>