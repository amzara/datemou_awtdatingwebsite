<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	
?>

<!DOCTYPE html>
<html>
<head>
<style>

body{
	background-color: lightblue;
}

hr{
width:65%;
border: 5px ;
border-radius: 2px;
}

#coupleimage{
position:absolute;
left:65%;
top:15%;	

}

#notnavbar{
margin-left:99px;
padding:10px;

}


}	
	</style>

	
<title>AWT DATING WEBSITE</title>
<link rel="stylesheet" href="base.css">
</head>
<body>
<nav>
    <div class="logo">
		
        <p>💙AWT DATING WEBSITE</p>
    </div>
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="quickguide.php">Quick Guide</a></li>
        <li><a href="lovecalculator.html" target="_blank">Love Calculator</a></li>
        <li><a href="googletranslate.html" target="_blank">Google Translate</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<div id="notnavbar">	
	
	<a href="logout.php">Logout</a>
	<div class="myHeader">
	<h1>AWT DATING WEBSITE!!</h1>
	<h1>Where you can finally find a friend or girlfriend in QIU!</h1>
</div>
	

	<br>
	Hello, <?php echo $user_data['user_name']; ?>.
	<br>
	Current matching status : <?php echo $user_data['matching']; ?>
	
	<br><br>
	<p>What do you want to do?</p>
	<a href="editprofile.php">Edit my profile information and set matching status.</p>
	<a href="listallprofile.php">Start matching up with people.</a><br>

	
	<hr><br><br>

	<?php 
	$user_data = check_login($con);
	$json = json_encode($user_data);
	$result = json_decode($json,true);
	$matchrequestfrom=$result['matchrequestfrom'];
	$currentmatch=$result['currentmatch'];
	$daterequest=$result['daterequest'];
	$currentuser=$result['user_name'];
	
	if($result['matchrequest'] == 1){
		echo "You currently have a match request from user: " .$result['matchrequestfrom'];
		echo "<br>";
		
		echo "<form method='post' action='multiquery.php'>
		<input type='hidden' value ='$matchrequestfrom'  name='matchrequestfrom'>
		<input value='Match!' type='submit'>
		</form>";
		echo "<form method='post' action='declinematch.php'>
		<input value='Reject' type='submit'>";
	}
	
		

		
	else if($result['matching']==2){
		echo "You are currently matched with user " .$result['currentmatch']."<br>";
		if($daterequest==1){
			echo $result['currentmatch']. " has sent you a date request. Click here to view<br>";
			echo "<form method='post' action='viewdaterequest.php'>";
			echo "<input type='submit' value='View'>";
			echo "</form>";

		}else if($daterequest==2){
		$query3="SELECT date,time,venue,datemessage FROM usersdate WHERE user_name='$currentuser'";
	$resultt = $con->query($query3);
	if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
        $date=$row['date'];
        $time=$row['time'];
        $venue=$row['venue'];
        $datemessage=$row['datemessage'];
        echo "You have an ongoing date scheduled at: <br>";
        echo "Date: ".$date."<br>";
        echo "Time: ".$time."<br>";
        echo "Venue: ".$venue."<br>";
        }
		}
	}else{
		echo "Click here to send a date request<br>";
		echo "<form method='post' action='requestdate.php'>	
		<input value='Request a date' type='submit'></form>";
		
		}
		echo "<br>";
		echo "Click here to unmatch";
		echo "<br>";
		echo "<form method='post' action='unmatch.php'>
	<input value='Unmatch!' type='submit'>
		</form>"; 


	}else{
		echo "You do not have a match request right now.<br>";
	}
	

	
	
	

?>	
<br>
<hr><br>


<div id="coupleimage">
<img src="https://images.hdqwalls.com/wallpapers/anime-couple-holding-hands-hatsune-miku-rd.jpg" alt="Girl in a jacket" width="400" height="400">
</div>
</div>
</div>

</body>
</html>