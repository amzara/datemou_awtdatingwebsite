<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);
$me=$result['user_name'];
$target=$result['currentmatch'];

?>

<html>
<head>
<title>Request a Date</title>
<link rel="stylesheet" href="requestdate.css">
</head>
<body>
<h2>Request A Date</h2>
<form method="POST">
<table border=0>
<tr>
  <td>Date: </td> 
  <td><input type="date" required name="date" min="2022-01-01" max="2023-01-01"></td>
</tr>
<tr>
  <td>Time: </td>
  <td><input type="time" required name="time"></td>
</tr>
<tr>
  <td>Venue: </td>
  <td><input type="text" required name="venue"></td>
</tr>
<tr>
  <td>Drop a Message Here: </td>
  <td><input type="text" required name="datemessage"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit"></td>
</tr>
</table>
</form>

<br><br>Language barrier getting in the way of love? <br/>Use our <a href="googletranslate.html" target="_blank">Google Translate API</a> to help you convey your love!<br><br>
<a href="index.php">Go back to main menu</a>;


<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
if(isset($_POST['date'])||isset($_POST['time'])||isset($_POST['venue'])||isset($_POST['datemessage'])){

$date=($_POST['date']);
$time=($_POST['time']);
$venue=($_POST['venue']);
$datemessage=($_POST['datemessage']);

/*
$date=isset($_POST['date']);
$time=isset($_POST['time']);
$venue=isset($_POST['venue']);
$datemessage=isset($_POST['datemessage']);
*/




$query = "UPDATE users SET daterequest=1,daterequestfrom='$me' WHERE user_name='$target'";
mysqli_query($con, $query);
$query2= "UPDATE usersdate SET date='$date',time='$time',venue='$venue',datemessage='$datemessage' WHERE user_name='$target'";
mysqli_query($con, $query2);

echo "<br><br>";


echo '<script>alert("Date request is succesful.")</script>';
echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
  header("refresh:3;url=index.php" );

}
}
?>