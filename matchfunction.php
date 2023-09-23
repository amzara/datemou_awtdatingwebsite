<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);


    $requestfrom = $result['user_name'];
    $user_name=$_POST['matchusername'];

    $sql = "UPDATE users SET matchrequest=1,matchrequestfrom='$requestfrom'  WHERE user_name='$user_name'";
    $result = $con->query($sql);


    echo "Succesfully sent a match request to user ".$requestfrom;
    echo "<br>"; 
    echo "<a href='index.php'>You will be redirected after 3 second</a>";
    
    header("refresh:3;url=index.php" );



?>
<html>
<head>
    <style>
       body{
    background-color: lightblue;
    background-image:url(https://media.kasperskydaily.com/wp-content/uploads/sites/92/2021/07/16173855/mwc21-online-dating-apps-featured.png);
    background-repeat:no-repeat;
    background-size:contain;
    background-position: center;
}

        </style>
        </head>

</head>
<body>
    
</body>
</html>