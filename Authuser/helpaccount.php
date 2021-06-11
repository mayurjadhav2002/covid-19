<!DOCTYPE html>
<?php require_once("../config.php");
 ?>

<html>
<head>
<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    include("../head/head.php");
    ?>
</head>
<body>
<div style="display:none;"><?php require_once("../geo_plugin.php")?></div>
<img src="../images/mainlogo.png" alt="covidbreak" style=" width: 20%; margin-left: 40%;" class="logo img-fluid"> <br><br><br><br>
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    

if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from member where (username='$username' or email='$email');";
      $res=mysqli_query($dbc,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);


       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
              $date=date('Y-m-d');
            $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);
            
           $result = mysqli_query($dbc,"INSERT into member(username, lastname, email,gender, password, accountype,org, city, state, country,vp, ip, Occupation) 
           values('$fname','$lname','$email','$gender','$password','$volunteer','$org','$city', '$state', '$country', '50' ,'$ip', '$occupation' )");

           if($result)
           
    {
     $done=2; 

    }
    else{
      echo error_reporting(E_ALL | E_STRICT);
    }
 }
 } ?>

	
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>

      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . 
    
     <a href="authlogin.php" style="color:black;">Login here... </a> </div>
      <?php } else { ?>
        <form action="" method="post" class="uk-grid-small" uk-grid style="width: 80%; margin-left: 10%;">
    <input type="hidden" name="country" value="<?php echo $country?>">
    <input type="hidden" name="city" value="<?php echo $city?>">
    <input type="hidden" name="state" value="<?php echo $state?>">
    <input type="hidden" name="ip" value="<?php echo $ip?>">
    <input type="hidden" name="volunteer" value="volunteer" >
    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">FirstName</span>*
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="FirstName" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
    </span>
  </p>
</div>
    </div>






    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">LastName</span>*
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="LastName" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
    </span>
  </p>
</div>
    </div>



    <div class="form-group" style="display: none;">
    <label class="label_txt">Username </label>
    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>">
  </div>

    <div class="uk-width-1-2@s">


    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Email</span>*
  <p class="control has-icons-left">
    <input class="input" type="email" placeholder="Email" name="email" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>
    </span>
  </p>
</div>


    </div>


    <div class="uk-width-1-2@s">

    
<div class="field">
<span class="uk-label" style="text-decoration: normal;">Gender</span>*
<p class="control has-icons-left">

<div class="control">
  <label class="radio">
    <input type="radio" name="gender" value="male">
    Male
  </label>
  <label class="radio">
    <input type="radio" name="gender" value="female">
    Female
  </label>

  <label class="radio">
    <input type="radio" name="gender" value="not mentioned">
    Not Specify
  </label>


</div>
</p>
</div>


</div>


<div class="uk-width-1-2@s">


<div class="field">
<span class="uk-label" style="text-decoration: normal;">Occupation</span>*
<p class="control has-icons-left">
<input class="input" type="text" placeholder="e.g. Student, Doctor, Police..." name="occupation" class="form-control" required>
<span class="icon is-small is-left">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
</span>

</p>
</div>


</div>




<div class="uk-width-1-2@s">


<div class="field">
<span class="uk-label" style="text-decoration: normal;">Organisation Name</span>*
<p class="control has-icons-left">
<input class="input" type="text" placeholder="XYZ Medical College or ..." name="org" class="form-control" required>
<span class="icon is-small is-left">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>
</span>
</p>
</div>


</div>

    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Password</span>*
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password" name="password"  id="myInput" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>
    </span>
  </p>
</div>
    </div>

   
    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Confirm Password</span>*
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Confirm Password" id="cmyInput" name="passwordConfirm" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg>
    </span>
  </p>
</div>
    </div>

    <div class="uk-width-1-2@s">
    <input type="checkbox" onclick="myFunction()" name="" id=""> Show Password
</div>
    <script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }


  var x = document.getElementById("cmyInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
    <label class="checkbox">
  <input type="checkbox">
  I agree to the <a href="#">terms and conditions</a>
</label>
    </div>
    
    <div class="uk-width-1-1@s">

<button type="submit" name="signup" class="button is-primary is-light is-outlined is-medium is-fullwidth">Register</button>


    </div>

    


    </form>
<?php } ?> 

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>