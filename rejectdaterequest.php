<?php

session_start();
include("connection.php");
include("functions.php");


$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$currentuser =$result['user_name'];
$matcheduser=$result['currentmatch'];


$query = "UPDATE users SET daterequest=0,daterequestfrom=''  WHERE user_name='$currentuser'";
mysqli_query($con, $query);

$query2 = "UPDATE usersdate SET date='',time='',venue='',datemessage='' WHERE user_name='$currentuser'";
mysqli_query($con, $query2);

echo "Rejected date request from ". $matcheduser;
echo "<a href='index.php'><br>Click here to go back to main menu</a><br><br>";

echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
header("refresh:3;url=index.php" );

?>

<head>
<link rel="stylesheet" href="base.css">
</head>