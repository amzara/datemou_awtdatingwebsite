

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email=$_POST['email'];

		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(10);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";
			mysqli_query($con, $query);
			
			$query2= "insert into usersinfo (user_id,user_name) values ('$user_id','$user_name')";
			mysqli_query($con, $query2);

			$query3= "insert into usersdate (user_name) values ('$user_name')";
			mysqli_query($con, $query3);
			
			
			
			

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 5px;text-align:center;color: white;">Signup</div>

			Name<input id="text" type="text" name="user_name" pattern="[A-Za-z0-9]{3,12}$" required title="Username must be 3-12 character"><br><br>
			Password:<input id="text" type="password" name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,13}$" required title="Minimum eight characters, at least one letter, one number and one special character"><br><br> 
			Email<input id="text" type="password" name="email" pattern="^\w+([.-]{3,10}?\w+)*@\w+([.-]{3,5}?\w+)*(\.\w{2,3})+$" required title="Please insert in proper email format."><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>