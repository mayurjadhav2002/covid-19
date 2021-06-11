<?php
include("../sessions.php");
?>
<?php require('../includes/config.php'); 
if(!$username){
    header("LOCATION: ../Authuser/Authlogin.php");
}
?>

<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


if($vp << '990'){

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


        //Server settings
                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.themedaid.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'home@themedaid.in';                     //SMTP username
    $mail->Password   = 'hello';                               //SMTP password
      //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
        $mail->setFrom('home@themedaid.in', 'Covidbreak');
        $mail->addAddress("$email");     //Add a recipient


        //Attachments
        //Add attachments
        //Optional name

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Certificate';
        $mail->Body    = 'more than 990 vp';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="image/image-picker.css">
    <script src="image/image-picker.js"></script>
        <script src="image/image-picker.min.js"></script>
    <?php
    include("../head/head.php");

    ?>
    <style>
    .uk-card-body {
        border-radius: 30px;
    }

    .uk-input {
        background-color: transparent;
        border: 0px solid;
        height: 20px;
        width: 160px;
        color: #CCC;
    }
    </style>
</head>

<body>

    <?php
    include("../navbar.php");
    ?>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid style="width: 95%; margin: 2%;">
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-hover" style="background-image: url('image/chart-vp.png');
    
    background-position: 90% 70%;
  background-repeat: no-repeat;
  background-size: 300px 150px;
            ">
                <h3 class="uk-card-title">Total VP</h3>
                <h3><?php echo $vp;?></h3>
                
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body uk-card-hover">
                <h3 class="uk-card-title">Post Published</h3>
                <?php
         
        
         $post = "SELECT COUNT(*) as count FROM blog_posts_seo where userId = $id";
         if ($result = mysqli_query($dbc, $post)) {
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  echo '<h3>'.$row['count'].'</h3>';
                  
              }
          }else{
              echo "<p>0</p>";
          }
         }
         ?>
              
            </li>

            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body uk-card-hover">
                <h3 class="uk-card-title">Helping quotes</h3>
                <?php
         
        
         $post = "SELECT COUNT(*) as count FROM hand where postedid = $id";
         if ($result = mysqli_query($dbc, $post)) {
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                  echo '<h3>'.$row['count'].'</h3>';
                  
              }
          }else{
              echo "<p>0</p>";
          }
         }
         ?>
            </div>
        </div>
        <div> 
            <div class="uk-card uk-card-default uk-card-body" >
                <h3 class="uk-card-title">Default</h3>
                <h3><?php echo $org?></h3>
            </div>
        </div>
     
    <!--tab-->
    <div style="width: 80%; margin-left: 10%; margin-top: 30px;">
        <ul uk-tab>
            <li><a href="#">XP</a></li>
            <li><a href="Posts">Posts</a></li>
            <li><a href="#">Quote</a></li>
            <li><a href="Profile">Update data</a></li>
            <li><a href="setting">Settings</a></li>
        </ul>

        <ul class="uk-switcher uk-margin">
            <!--xp-->

            <li>

                <div class="uk-width-1-4@m">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Component
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stars" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stars" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                            </svg>

                        </header>
                        <div class="card-content">
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                                <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">Wow</a>

                            <a href="#" class="card-footer-item">May 3, 2020</a>
                        </footer>
                    </div>
                </div>

            </li>



            <li>

            

<script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
}
</script>



            <?php
$post = "SELECT * FROM blog_posts_seo where userId = '$id'";
if ($result = mysqli_query($dbc, $post)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo '  <article class="message is-primary">
            <div class="message-body">
                <div class="uk-column-1-1@s">
                <h5 class="title is-5"><a class="uk-link-reset" href="">
            '.$row['postTitle'].'
                </a></h5>
                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>

                </div>
               
                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <div>
                        <a class="uk-button uk-button-text" href="#">Edit</a>
                    </div>
                    <div>
                        <a class="uk-button uk-button-text" href="delete.php?id='.$row['postID'].'" onclick="return deleletconfig()" >Delete</a>
                    </div>
                </div>
            </div>


        </article>';
            
        }
    }
}
?>
              
            </li>






















            <li>

<?php
$post = "SELECT * FROM hand where postedid = $id";
if ($result = mysqli_query($dbc, $post)) {
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
echo '  <article class="message is-primary">
<div class="message-body">
    <div class="uk-column-1-1@s">
    <h5 class="title is-5"><a class="uk-link-reset" href="">
   " '.$row['postTitle'].'"
    </a></h5>
    <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>

    </div>
   
    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">Read more</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="#">5 Comments</a>
        </div>
    </div>
</div>


</article>';

}
}else{
echo "0 post Published";
}
}
?>
  
</li></li>


























            <!--update data-->
            <li>


                <div class="uk-column-1-2@s uk-column-divider">
                    <form class="uk-form-horizontal uk-margin-large" action="index.php" method="post">
                        <figure class="image is-128x128 is-centered" style="
cursor: pointer;
left: 40%;

">
                            <img class="is-rounded" src="images/<?php echo $img?>.png">
                        </figure>




                        
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    value="<?php echo $username;?>" name="name">
                            </div>
                        </div>
                         <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">LastName</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text" name="lname"
                                    value="<?php echo $lname;?>">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-select">Gender</label>
                            <div class="uk-form-controls">
                                <select class="uk-select"  name="gender" id="form-horizontal-select">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">DOB</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text" name="DOB"
                                    placeholder="Some text...">
                            </div>
                        </div>


                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    value="<?php echo $email;?>" name="email">
                            </div>
                        </div>



                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Bio</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="3" placeholder="Textarea" name="bio"></textarea>
                            </div>




                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">State</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text" name="city"
                                    placeholder="Enter city Name" value="<?php echo $city?>">
                                </div>
                            </div>


                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">country</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text" name="country"
                                        placeholder="Enter Country Name" value="<?php echo $country?>">
                                </div>
                            </div>

                            <br><br>
                            <button type="submit" name="update" class="button is-success is-fullwidth">Save Changes</button>


                    </form>
          <?php   
                 if(isset($_POST['update'])) {
                     $radio =$_POST['img'];
mysqli_query($dbc,"UPDATE member set username='" . $_POST['name'] . "',
 lastname='" . $_POST['lname'] . "', email='" . $_POST['email'] . "', country='" . $_POST['country'] . "' , gender='" . $_POST['gender'] . "',
city='" . $_POST['city'] . "', profile2='".$_POST['1']."' WHERE  Id=$id");

echo "<script>UIkit.notification({message: 'Data Updated Successfully', status: 'success'})</script>";
}

?>
                </div>






            </li>
        </ul>
    </div>




</body>

</html>