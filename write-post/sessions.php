<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:../Authuser/authlogin.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM member WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
  $id = $res['Id'];
$username = $res['username']; 
   
$lname = $res['lastname'];  
$email = $res['email'];  
$accountype = $res['accountype'];
$gender = $res['gender'];
$age = $res['age'];
$country2 = $res['country'];
$city2 = $res['city'];
$state2 = $res['state'];
$vp = $res['vp'];
}
 ?> 