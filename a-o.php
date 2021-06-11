<?php require('includes/config.php'); 



$stmt = $db->prepare('SELECT * FROM blog_posts_seo WHERE postID = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COVIDBREAK | <?php echo $row['postTitle']?></title>
  <style>
        .uk-link-toggle{
            padding: 10px 45px 10px 45px;
            
        }
        .uk-link-toggle:hover{
           background-color: #fafafa;
           border-radius: 30px;
        }
        .uk-list{
margin-top: 50px;
        }
        .uk-list li{
            margin-top: 22px !important;
        }
        .sidenav-button{
            padding: 10px 45px 10px 45px  !important;

        }
        .column2{
            border-left: 0.5px solid lightgrey;
            border-right: 0.5px solid lightgrey;
            margin: none !important;

        }
        .count{
            margin-top: -25px !important;
        }
        .ul-list{
            text-align: center  !important;
            width: 100%;
            margin-top: -18px !important;
        }
        .ul-list li{
width: 20%;
padding: 5px;
        }
        .ul-list li:hover{
            background-color: #fafafa;
            border-radius: 15px;
        }
        .uk-comment-body{
            margin-top: -12px;
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

<div class="columns is-desktop">

<div class="column is-one-quarter">

<!----->    






        <div class="menu" style="width:70%; margin-left: 20%; text-align: left;    position: sticky !important;
top: 0px;

z-index:100;">

            <ul class="uk-list">

                <li>
                    <a class="uk-link-toggle nav_link" href="geo_plugin.php">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon" uk-icon="icon: home;ratio: 1.5"
                                    style="font-size: 20px; font-weight: 600;"> </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Home</span>
                        </span>
                    </a>
                </li>





                <li>
                    <a class="uk-link-toggle nav_link" href="messages.php">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon" style="font-size: 20px; font-weight: 600;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                                        <path
                                            d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                    </svg>
                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Articles</span>
                        </span>
                    </a>
                </li>



                <li>
                    <a class="uk-link-toggle" href="#">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon" uk-icon="icon: bell;ratio: 1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute;
                    color: navyblue;
                    margin-left: 5px;
                    margin-top: -10px;
                    " width="30" height="30" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">
                                Notifications</span>
                        </span>
                    </a>
                </li>



                <li>
                    <a class="uk-link-toggle" href="#">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon" uk-icon="icon: bookmark;ratio: 1.5">

                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> BookMarks</span>
                        </span>
                    </a>
                </li>



                <li>
                    <a class="uk-link-toggle" href="#">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                                        <path
                                            d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                                    </svg>
                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Messages</span>
                        </span>
                    </a>
                </li>







                <li>
                    <a class="uk-link-toggle" href="#">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                                        <path
                                            d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                                    </svg>

                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Stats</span>
                        </span>
                    </a>
                </li>



                <li>

                    <a href="" class="uk-link-toggle">
                        <span class="icon-text" style="">
                            <span class="icon">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>

                                </i>
                            </span>
                            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> More</span>
                        </span></a>

                    <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 100; mode: click">
                        <a href="#" class="dropdown-item">
                            Overview
                        </a>
                        <a href="#" class="dropdown-item">
                            Modifiers
                        </a>
                        <a href="#" class="dropdown-item">
                            Grid
                        </a>
                        <a href="#" class="dropdown-item">
                            Form
                        </a>
                        <a href="#" class="dropdown-item">
                            Elements
                        </a>
                        <a href="#" class="dropdown-item">
                            Components
                        </a>
                        <a href="#" class="dropdown-item">
                            Layout
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            More
                        </a>
                    </div>
                </li>

            </ul>


        </div>
   






   <!----->    
</div>




        
        <div class="column column2">




        <article class="uk-comment">
        
    <header class="uk-comment-header">
    <h6 style="font-size: 23px; font-weight: 700; text-align:center; font-family: Helvetica
; font-style: uppercase;"><?php echo $row['postTitle']?></h6>
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto image">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png" style="width: 40px; height: 40px;">
            </div>

            <div class="uk-width-expand">
                <h7 class="uk-comment-title uk-margin-remove" style="font-size: 14px; font-weight: 700; margin-left: -18px !important;">
                  <a class="uk-link-reset" href="profile/user.php?id=php echo $row['userId']?>"><?php echo $row['username']?> <?php echo $row['lastname']?></a>
                  <?php
                  if($row['accounttype'] =='volunteer'){
                      echo
                  '<img src="images/3.png" alt="" style="width: 15px; margin-top: -5px;">';
                }else{
                    echo ($row['accounttype']);
                }
                  ?>
                </h7>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><a href="#" style="font-size: 10px; font-weight: 400; margin-left: -18px !important; margin-top: -5px !important">12 days ago</a></li>
                    <li><a href="#" style="font-size: 10px; font-weight: 400; margin-left: -18px !important; margin-top: -5px !important">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>  
                     <?php echo $row['country']?></a></li>
                </ul>
            </div>
            <div class="uk-menu">
            <a class="" uk-icon="icon: more" style="font-size: 30px;"></a>
<div uk-dropdown="animation: uk-animation-slide-top-small; duration: 100">
    <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
            </div>
        </div>
    </header>
    <div class="uk-comment-body">
        <?php
        echo $row['postCont']
        ?>

<br>
<div class="count">
<a href=""><span> 165k</span> comments</a> |
<a href=""><span>16k </span> Shares</a>
</div>
<hr>


        <ul class="uk-iconnav ul-list" style="text-align: center; ">
       
  
    <li>
<a href="" class="uk-margin-small-right">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
</svg>

</a>

<div class="uk-card uk-card-body uk-card-default" style="text-align: center !important;" uk-dropdown>
     <span>Share to Spread more</span><br>
     <a target="blank" href="https://twitter.com/share?hashtags=covid19,covidhelp,IndiaFightsCorona,Unite2FightCorona,Covishield,covidbreak.org&text=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A'.$row['covidpost'].'%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK) %2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button uk-margin-small-right twitter" uk-icon="twitter"></a>
<a target="blank"  href="http://www.facebook.com/sharer.php?u=https://www.covidbreak.org/a-o.php?id=<?php echo $row['postID']?>&quote=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A<?php echo $row['postTitle']?>%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK)  %0D%0A%0D%0A%0D%0AFind%20Help%20or%20Help%20others%20during%20Covid%2C%20share%20the%20information%2C%20blogs%2C%20help%20you%20can%20...%20visit%20https%3A%2F%2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button  uk-margin-small-right facebook" uk-icon="facebook"></a>
<a target="blank" href="https://wa.me/?text=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A'.$row['covidpost'].'%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK)  %0D%0A%0D%0A%0D%0AFind%20Help%20or%20Help%20others%20during%20Covid%2C%20share%20the%20information%2C%20blogs%2C%20help%20you%20can%20...%20visit%20https%3A%2F%2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button  uk-margin-small-right whatsapp" uk-icon="whatsapp"></a>
<a href="" class="uk-icon-button uk-margin-small-right linkedin" uk-icon="linkedin"></a>

     </div>



    </li>


</ul>
    </div>
  
  
</article>

<hr>
<div class="fb-comments" data-href="https://localhost/mape/a-o.php?id=<?php echo $row['postID']?>" data-width="100%" data-numposts=""></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="MFlQv9K5"></script>
        </div>
       



        <div class="column is-one-quarter

">

    
        <div class="uk-margin" style="width: 100%; position: sticky; top:0; background-color: white;
z-index: 100; text-align: center;">
  


  <figure class="image is-96x96" style="margin-left: 35%; border: 1px soild skyblue;">
  <img class="is-rounded" src="images/3.png">
</figure>

<span style="text-align: center; font-weight: 700">
<?php
echo $username;
?>  <?php
echo $lname;
?>
</span>
(Volunteer)
</div>







        </div>

    </div>

















</body>
</html>