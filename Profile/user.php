<?php
include("../sessions.php")
?>
<?php require('../includes/config.php'); 



$stmt = $db->prepare('SELECT * FROM member WHERE Id = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("../head/head.php");

    ?>
</head>
<body>
<?php
    include("../navbar.php");
    ?>

<div class="columns">
  <div class="column is-one-quarter" style="text-align: center;">
  <div class="image is-96x96" style="text-align: center; margin-left: 35%;">
  <img src="images/3.png" class="is-rounded" alt="">
  
  </div>
  <span><?php echo $row['username'];?> <?php echo $row['lastname'];?></span><br>
  <span><?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['country'];?></span>
  </div>



  <div class="column">
  
  
  
  <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid style="width: 95%; margin: 2%;">
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-hover" style="background-image: url('image/chart-vp.png');
    
    background-position: 90% 70%;
  background-repeat: no-repeat;
  background-size: 300px 150px;
            ">
                <h3 class="uk-card-title">Total VP</h3>
                <h3><?php echo $row['vp'];?></h3>
                
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body uk-card-hover">
                <h3 class="uk-card-title">Primary</h3>
                <?php
         
            $id = $row['Id'];
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
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body uk-card-hover">
                <h3 class="uk-card-title">Secondary</h3>
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
       
    </div>


    <!--tab-->
    <div style="width: 80%; margin-left: 10%; margin-top: 30px;">
        <ul uk-tab>
         
            <li><a href="#">Posts</a></li>
            <li><a href="#">Quote</a></li>
            <li><a href="Profile">Update data</a></li>
            <li><a href="setting">Settings</a></li>
        </ul>

        <ul class="uk-switcher uk-margin">
        



            <li>



            <?php
$post = "SELECT * FROM blog_posts_seo where userId = $id";
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
              
            </li>






















            <li>
            <?php
            
$post = "SELECT * FROM hand where postedid = $id";
if ($result = mysqli_query($dbc, $post)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo ' 
            <article class="uk-comment uk-card uk-comment-primary">
    <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-comment-avatar is-rounded" src="images/avatar.jpg" width="80" height="80" alt="">
            </div>
            <div class="uk-width-expand">
                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">'.$row['posted_by'].'</a></h4>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><a href="#">12 days ago</a></li>
                    <li><a href="#">Reply</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="uk-comment-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
</article>';
            
        }
    }else{
        echo "0 post Published";
    }
}?>
            
            
           </li>


























            <!--update data-->
            <li>


                <div class="uk-column-1-2@s uk-column-divider">
                    <form class="uk-form-horizontal uk-margin-large">
                        <figure class="image is-128x128 is-centered" uk-toggle="target: #modal-close-default" style="
cursor: pointer;
left: 40%;

">
                            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                        </figure>




                        <div id="modal-close-default" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <h2 class="uk-modal-title">Default</h2>



                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    placeholder="<?php echo $username;?>">
                            </div>
                        </div>
                         <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">LastName</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    placeholder="<?php echo $lname;?>">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-select">Gender</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" id="form-horizontal-select">
                                    <option></option>
                                    <option>Option 02</option>
                                </select>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">DOB</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    placeholder="Some text...">
                            </div>
                        </div>


                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-horizontal-text" type="text"
                                    placeholder="<?php echo $email;?>">
                            </div>
                        </div>



                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Address</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="3" placeholder="Textarea"></textarea>
                            </div>


                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">Pincode</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text"
                                        placeholder="Some text...">
                                </div>
                            </div>



                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">State</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text"
                                        placeholder="Some text...">
                                </div>
                            </div>


                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-horizontal-text">country</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text"
                                        placeholder="Some text...">
                                </div>
                            </div>

                            <br><br>
                            <button class="button is-success is-fullwidth">Save Changes</button>


                    </form>
                </div>






            </li>
        </ul>
    </div>



  
  </div>
  
</div>

</body>
</html>