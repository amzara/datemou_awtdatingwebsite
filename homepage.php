<?php 
session_start();

	include("connection.php");
	include("functions.php");

?>

<html>
    <head>
        <title>
            Welcome to AWT DATING WEBSITE
        </title>
        <link rel="stylesheet" href="homepage.css">
    </head>
    <body>
        <h1 id="title">AWT Dating Website</h1>
        <div id="box">
            <h1>Make the first move</h1>
            Meet new friends in EQIU! <br/>
            If you already have an account, login to use AWT Dating Website on the web.
            If you don't have an account, signup to join AWT Dating Website.<br/><br/>
            <button id="button" onclick="document.location='login.php'">Login</button>
            <button id="button" onclick="document.location='signup.php'">Signup</button>
        </div>
    </body>
</html>