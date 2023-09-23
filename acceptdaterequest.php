<?php

session_start();
include("connection.php");
include("functions.php");


$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$currentuser =$result['user_name'];
$matcheduser=$result['currentmatch'];


$query = "UPDATE users SET daterequest=2  WHERE user_name='$currentuser'";
mysqli_query($con, $query);
$query2 = "UPDATE users SET daterequest=2  WHERE user_name='$matcheduser'";
mysqli_query($con, $query2);


$query3="SELECT date,time,venue,datemessage FROM usersdate WHERE user_name='$currentuser'";
$resultt = $con->query($query3);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
        $date=$row['date'];
        $time=$row['time'];
        $venue=$row['venue'];
        $datemessage=$row['datemessage'];
        
     

    }

    $query4 = "UPDATE usersdate SET date='$date',time='$time',venue='$venue',datemessage='$datemessage'  WHERE user_name='$matcheduser'";
    mysqli_query($con, $query4);
    
    echo "Date with user ". $matcheduser." has been confirmed.<br>";
     
    echo "Date: ".$date."<br>";
    echo "Time: ".$time."<br>";
    echo "Venue: ".$venue."<br>";
    echo "<a href='index.php'>Click here to go back to main menu.</a><br><br>";

}

echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
  header("refresh:3;url=index.php" );

?>

<head>
<link rel="stylesheet" href="base.css">
</head>