<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$user_name=$_POST['username'];

$sql="SELECT user_name,age,sex,location FROM usersinfo WHERE user_name='$user_name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "true";
		
    }
} else {
    echo "false";
}

}
?>