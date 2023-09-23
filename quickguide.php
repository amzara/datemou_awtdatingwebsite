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
margin-left:5%;	

}

#keyinfo{
margin-left:80%;	


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
        <li><a href="index.php">Home</a></li>
        <li><a href="quickguide.php" class="active">Quick Guide</a></li>
        <li><a href="lovecalculator.html" target="_blank">Love Calculator</a></li>
        <li><a href="googletranslate.html" target="_blank">Google Translate</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<div id="notnavbar">	


<br><br><br><br>
<h1>Steps to find your soulmate?</h1>
<p>Step 1 => Edit your profile and turn your matching status to on since it allows people to find you</p>
<p>Step 2 => You can either wait for someone to match up with you or go on the initiative!</p>
<p>Step 3 => You can view other users with matching status 'ON' in the home page!</p>
<p>Step 4 => Select your desired individual, and start dating!</p>
<br><br>
<h4>API's to help you find your match</h4>
<p><ol><li><a href="">Love Calculator</a> </li>
<li><a href="">Translo Google Translate</a></li>
<li><a href="">Google Image Search</a></li>
</ol></p>


</div>

<div id="keyinfo">
<h4>Database Keys</h4>
<p>Matching:<ul><li>0: Not Interested to Date</li>
<li>1: Interested to date</li>
<li>2: Currently Dating Someone</li>
</ul></p>
<br>
<p>Match Request</p>
<ul><li>0: No Match Request</li>
<li>1: Someone sent a match request</li></ul></p>
<br>
<p>Date Request</p>
<p><ul><li>0: No Date Request</li>
<li>1: Your match sent a date request.</li>
<li>2: Date has been confirmed.</li>
</ul>	


</body>
</html>