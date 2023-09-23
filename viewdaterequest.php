<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="base.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request match</title>

  <style>


@import url('http://fonts.cdnfonts.com/css/romantic');


  #wrapper{
    text-align:center;
    margin:20px;
    color:Black;
    font-style:italic;
    font-family: 'Winter', sans-serif;
    font-size:40px;
    
    }

  #theImg{
    
    width:20%; 
    

  }

  #acceptbutton{
    margin-left:41%;
    position:absolute;

  }

  #rejectbutton{
    margin-left:53%;
    position:absolute;

  }

  #datemsg{
  font-family: 'Romantic', sans-serif;
    font-size:30px;

  }

    </style>
</head>

    

<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = json_encode(check_login($con));
$result = json_decode($user_data,true);

$myname=$result['user_name'];



$sql="SELECT date,time,venue,datemessage FROM usersdate WHERE user_name='$myname'";
$result = $con->query($sql);

$resultt = $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
        $date=$row['date'];
        $time=$row['time'];
        $venue=$row['venue'];
        $datemessage=$row['datemessage'];
        echo "<br>";
        echo "<div id='wrapper'>";
        echo "Date: ".$date."<br>";
        echo  "Time: ".$time."<br>";
        echo "Venue: ".$venue."<br>";
        echo "<div id='image'></div>";
        
        echo "<div id='datemsg'>".$datemessage."</div><br>";

        echo "</div>";

    




    }
}

?>

<script type="text/javascript">


var venue = "<?php Print($venue); ?>";
    var final_result;
    var settings = {
                    "url": `https://bing-image-search1.p.rapidapi.com/images/search?q=${venue}`,
                    "method": "GET",
                    "timeout": 0,
                    "async":false,
                    
                    "headers": {
                    "x-rapidapi-host": "bing-image-search1.p.rapidapi.com",
                      "x-rapidapi-key": "39dc5092cfmsh6d681f0d9f7e41dp1efdeejsn5e2fc15ff323"
                    },
                  };
                  
                  $.ajax(settings).done(function (response) {
                    console.log(response);
                    final_result = response.value[0].contentUrl;
                    console.log(final_result);
                    $("#image").prepend(`<img id="theImg" width="40%" height="40%" src="${final_result}" />`);
                   
                   
                  });

                  

                //   console.log(final_result);

/*
    var venue = "<?php Print($venue); ?>";
    var final_result;
    var settings = {
                    "url": `https://google-image-search1.p.rapidapi.com/?keyword=${venue}&max=1`,
                    "method": "GET",
                    "timeout": 0,
                    "async":false,
                    
                    "headers": {
                    "x-rapidapi-host": "google-image-search1.p.rapidapi.com",
                      "x-rapidapi-key": "39dc5092cfmsh6d681f0d9f7e41dp1efdeejsn5e2fc15ff323"
                    },
                  };
                  
                  $.ajax(settings).done(function (response) {
                    console.log(response);
                    final_result = response.image.url;
                   
                    $("#image").prepend(`<img id="theImg" width="40%" height="40%" src="${final_result}" />`);
                   
                   
                  });

                  

                //   console.log(final_result);
                
  */
</script>



    <body>
      <div id="acceptbutton">
        <form method="POST" action="acceptdaterequest.php">
            <input type="submit" value="Accept">
</form>
                </div>
                <div id="rejectbutton">
<form method="POST" action="rejectdaterequest.php">
            <input type="submit" value="Reject">
                </div>
</form>