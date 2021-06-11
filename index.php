<?php
include("sessions.php");
include("geo_plugin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     article{
        font-size: 13px;
       padding: 20px;
        width: 100%;
        border: 0.1px solid lightgray;
        border-radius: 15px;
        box-shadow:0.25px 0.25px 0.5px grey, 0 0 6.25px lightgrey, 0 0 1.25px lightgray;
        margin-top: 15px;
      }
   

    article:hover {
        color: black;

    }

    .twitter {
        background-color: white;
        color: skyblue;
    }

    .facebook {
        background-color: white;
        color: blue;
    }

    .whatsapp {
        background-color: white;
        color: lightgreen;
    }

    .linkedin {
        background-color: white;
        color: darkblue;
    }

    .twitter:hover {
        background-color: snow;
        color: skyblue;
    }

    .facebook:hover {
        background-color: snow;
        color: blue;
    }

    .whatsapp:hover {
        background-color: snow;
        color: lightgreen;
    }

    .linkedin:hover {
        background-color: snow;
        color: darkblue;
    }

 
  </style>
  <?php
include("head.php");
?>
</head>
<body>
<?php
include("navbar.php");
?>


<?php
include("post.php")
?>


<?php
if(!isset($_SESSION["login_sess"])) 
{
    
    mysqli_query($dbc, "INSERT INTO visitor(ip, city, country, lati,longi, page ) 
    VALUES('$ip', '$city', '$country','$lati','$long','homepage')");


}
?>














</body>
</html>