<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$currentuser=$result['user_name'];
$matchrequestfrom=$result['matchrequestfrom'];

$query = "UPDATE users SET matchrequestfrom='',matchrequest=0 WHERE user_name='$currentuser'";
mysqli_query($con, $query);


echo "You have rejected match request from user $matchrequestfrom";

echo "<a href='index.php'>Click here to go back to main menu</a>";

?>
<head>
<link rel="stylesheet" href="base.css">
</head>

