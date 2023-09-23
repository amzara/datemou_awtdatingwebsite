<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<title>Match Profile List</title>
<link rel="stylesheet" href="listallprofile.css">
</head>
<body>
<h2>Match Profile List</h2>
<p>Displaying all user information for users that has matching on.</p>
<?php

$sql = "SELECT user_name, age,sex,location FROM usersinfo WHERE matching=1";
$result = $con->query($sql);
$myname=$user_data['user_name'];

if ($result->num_rows > 0) {

    echo "<table border=1 style='width:60%;border-collapse:collapse;'> 
		<tr>
		<th>Username</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Location</th>
		
		</tr>";


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
		echo "<td>" .$row['user_name']. "</td>";
		echo "<td>" .$row['age']. "</td>";
		echo "<td>" .$row['sex']. "</td>";
		echo "<td>" .$row['location']. "</td>";
		
		echo "</tr>";
    }
    echo "</table>";
} 

else {
    echo "0 results";
}


?>

<p>Enter the username that you want to match with:</p>

<form method="POST">
<input type="text" name="user_name">
<input type="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
if($_POST['user_name']==$myname){
echo '<script>alert("You cannot enter your own name. Please try again.")</script>';
}else{	
    
    $user_name=$_POST['user_name'];


$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);

echo "<br>";


if ($result->num_rows > 0) {
    "<table border=1 style='width:60%;border-collapse:collapse;'> 
    <tr>
    <th>Username</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Location</th>
    
    </tr>";
    while($row = $result->fetch_assoc()) {
        $matchusername=$row["user_name"];
       echo "Send match request to user ".$matchusername. " ?";
		
        echo "<form method='post' action='matchfunction.php'>
<input type='hidden' value ='$matchusername'  name='matchusername'>
<input value='Confirm' type='submit'>
</form>";
		
    }
} else {
    echo "0 results";
}

echo "<br><br>";

}
}
?>














<br><br>
<a href="lovecalculator.html" target="_blank">If you need help figuring out who to match with, use our Love Calculator to measure your compatilibity rate!</a><br><br>
<a href="index.php">Go back to Main Menu</a><br>



</body>
</html>




	
	