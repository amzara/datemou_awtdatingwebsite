<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

echo json_encode($user_data);
?>