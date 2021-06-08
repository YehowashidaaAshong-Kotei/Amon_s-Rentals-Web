<?php
session_start();

$v= $_SESSION['loginValid'];

if($v!=1)
{
    header("Location: index.html");
}

?>

<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css"  href="home.css">
</head>

<body>
    <h1>THANK YOU FOR USING OUR SERVICES..</h1>

    <form action="logout.php" method="POST">
        <button type="submit" name="logout"  id="logOutB">Log Out</button>
    </form>
    
</body>



</html>