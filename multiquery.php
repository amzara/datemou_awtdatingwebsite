<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$currentuser = $result['user_name'];
$matcheduser=$_POST['matchrequestfrom'];



$query = "UPDATE users SET matching=2,matchrequest=0,matchrequestfrom='',currentmatch='$matcheduser' WHERE user_name='$currentuser'";
mysqli_query($con, $query);
$query2= "UPDATE users SET matching=2,matchrequest=0,matchrequestfrom='',currentmatch='$currentuser' WHERE user_name='$matcheduser'";
mysqli_query($con, $query2);
$query3 = "UPDATE usersinfo SET matching=2 WHERE user_name='$currentuser'";
mysqli_query($con, $query3);
$query4= "UPDATE usersinfo SET matching=2 WHERE user_name='$matcheduser'";
mysqli_query($con, $query4);

echo "Matching between ". $currentuser. " and ".$matcheduser." is succesful.";
echo "<br>";

echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
  header("refresh:3;url=index.php" );
?>

<?php
//change the current logged in user's data un user's tble
/*matching =2(matched with someoen currently) matchrequest=0 mathrequestfrom=0 currentmatch=matcheduser

//change the matched user's logged in user data
matching =2(matched with someoen currently) matchrequest=0 mathrequestfrom=0 currentmatch=currentuser

  $sql = "UPDATE users SET matchrequest=1,matchrequestfrom='$requestfrom'  WHERE user_name='$user_name'";
    $result = $con->query($sql);
2updatequery



echo "success";
*/
?>

<head>
<link rel="stylesheet" href="base.css">
</head>
