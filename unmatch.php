<head>
<link rel="stylesheet" href="base.css">
</head>

<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$currentuser=$result['user_name'];
$matcheduser=$result['currentmatch'];

$query= "UPDATE users SET matching=0,currentmatch='',daterequest='',daterequestfrom='' WHERE user_name='$currentuser'";
mysqli_query($con, $query);
$query2= "UPDATE users SET matching=0,currentmatch='',daterequest='',daterequestfrom='' WHERE user_name='$matcheduser'";
mysqli_query($con, $query2);
$query3 = "UPDATE usersinfo SET matching=0 WHERE user_name='$currentuser'";
mysqli_query($con, $query3);
$query4= "UPDATE usersinfo SET matching=0 WHERE user_name='$matcheduser'";
mysqli_query($con, $query4);
$query5= "UPDATE usersdate SET date='',time='',venue='',datemessage='' WHERE user_name='$currentuser'";
mysqli_query($con, $query5);
$query6= "UPDATE usersdate SET date='',time='',venue='',datemessage='' WHERE user_name='$matcheduser'";
mysqli_query($con, $query6);

echo "Unmatching between user ".$currentuser. " and user ".$matcheduser. " is succesful<br>";


echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
header("refresh:3;url=index.php" );


//if people were to unmatch, what would happen to them.

