
<?php
include("sessions.php");
include("geo_plugin.php");
?>


<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($_SESSION["login_sess"])) 
{
    
    mysqli_query($connect, "INSERT INTO visitor(ip, city, country, lati,longi, page ) 
    VALUES('$ip', '$city', '$country','$lati','$long','post')");


}

?>




<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .top-nav-home{
            display: block;
        }
        .top-nav-filter{
            display: none;
        }
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
        @media only screen and (max-width: 1024px) {
        body{
            overflow: hidden;
        }
        .is-one-quarter{
            display:none;
        }
        .uk-filter{

            display:none;
        }
        .top-nav-home{
            display: none;
        }
        .top-nav-filter{
            display: block;
        }
        .menu-column, .menu{
            display:none;
        }
       .article-column{
           width:98%;
           margin-left:1% !important;
       }
     
       .column2{
           display: block;
           margin-top: -170px;
       }
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

<div class="column is-one-quarter menu-column">

<!----->    






        <div class="menu" style="width:70%; margin-left: 20%; text-align: left;    position: sticky !important;
top: 0px;

z-index:100;">

            <ul class="uk-list">

                <li>
                    <a class="uk-link-toggle nav_link" href="index.php">
                        <span class="icon-text">
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
                        <span class="icon-text">
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
                        <span class="icon-text">
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
                        <span class="icon-text">
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
                        <span class="icon-text">
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
                        <span class="icon-text">
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
                        <span class="icon-text">
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

<br><br>
<br><br>
<br><br>

        
        <div class="column column2">
        <div class="top-heading" style="text-align: center; border-bottom: 1px solid lightgrey; width: 100%;
position: sticky; top:0; background-color: white;
z-index: 100
">
<span style="font-size: 20px; font-weight: 700; " class="top-nav-home"> Home</span>
                
                <span uk-toggle="target: #modal-filter-default" class="top-nav-filter" style="font-size: 20px; font-weight: 700; right: 0; margin-left: 80%; "> Filter</span>

            </div>
            <div id="modal-filter-default" uk-modal>
                            <?php 

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=mape", "root", "");

?>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-inline">
                                <span class="uk-text" type="button"
                                    style="font-size: 18px; text-align: left; cursor: pointer;">Filter By city</span>
                                <div uk-drop="mode: click">
                                    <div class="menu uk-card uk-card-default uk-card-bod" id="dropdown-menu3"
                                        style="width: 60%; margin-top: -70px !important; margin-left: 30%; border-radius: 15px;">
                                        <div class="content">
                                            <dl>
                                                <dt style="text-align: center">Select the city</dt>
                                            </dl>
                                            <?php

$query = "
SELECT DISTINCT(city) FROM hand ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>                                     <a href="#" class="dropdown-item checkbox menu-lable">
                                                <label><input type="checkbox"
                                                        class="common_selector brand city is-primary"
                                                        value="<?php echo $row['city']; ?>">
                                                    <?php echo $row['city']; ?></label>
                                            </a>
                                            <?php }
?>

                                        </div>
                                    </div>
                                </div>

                            </div>

<hr>


                                <div class="uk-inline">
                                <span class="uk-text" type="button"
                                    style="font-size: 18px; text-align: left; cursor: pointer;">Posted by</span>
                                <div uk-drop="mode: click">
                                    <div class="menu uk-card uk-card-default uk-card-bod" id="dropdown-menu3"
                                        style="width: 60%; margin-top: -70px !important; margin-left: 30%; border-radius: 15px;">
                                        <div class="content">
                                            <dl>
                                                <dt style="text-align: center">Select the city</dt>
                                            </dl>

                                <?php

$query = "
SELECT DISTINCT(ac) FROM hand ORDER BY id DESC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>

 <a href="#" class="dropdown-item checkbox menu-lable">
 <label><input type="checkbox" class="common_selector ram title" value="<?php echo $row['ac']; ?>" > <?php echo $row['ac']; ?> </label>

                                            </a>
                                            <?php }
?>

                                        </div>
                                    </div>
                           


















                        </div>














                            </div>
                        </div>





































































            </div>



            <div class="filter_data"></div>

       














<div class="columns" style="border: 4px solid lightgray !important; margin-top: 15px; border-radius: 10px;">
  <div class="column is-one-third">
<img src="images/background (2).png" alt="" style="width:100%; height: 100%; border-radius: 10px; border: 10px solid ghostwhite;">
  </div>
 
  <div class="column">
  <h4 style="font-size: 18px; font-weight: 600;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nostrum eaque rem ex harum perspiciatis perferendis facilis delectus.
  </h4>

  <span style="font-size: 14px; font-weight: 500; ">By    <img src="images/3.png" alt="" style="width: 30px; border-radius: 30px;"> Name last </span>
  <br>
  <span  style="font-size: 12px; font-weight: 400;">10min ago   |  Mumbai</span>
  <span style="right: 0 !important;">
  <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
<a href="" class="uk-icon-button" uk-icon="youtube"></a>
</span>
  </div>
</div>

<hr style="width: 80%; margin-left: 10%; margin-top: -10px">
<hr style="width:70%; margin-left: 15%; margin-top: -18px">


















<div class="columns" style="border: 4px solid lightgray !important; margin-top: 15px; border-radius: 10px;">
  <div class="column is-one-third">
<img src="images/background (2).png" alt="" style="width:100%; height: 100%; border-radius: 10px; border: 10px solid ghostwhite;">
  </div>
 
  <div class="column">
  <h4 style="font-size: 18px; font-weight: 600;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nostrum eaque rem ex harum perspiciatis perferendis facilis delectus.
  </h4>

  <span style="font-size: 14px; font-weight: 500; ">By    <img src="images/3.png" alt="" style="width: 30px; border-radius: 30px;"> Name last </span>
  <br>
  <span  style="font-size: 12px; font-weight: 400;">10min ago   |  Mumbai</span>
  <span style="right: 0 !important;">
  <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
<a href="" class="uk-icon-button" uk-icon="youtube"></a>
</span>
  </div>
</div>

<hr style="width: 80%; margin-left: 10%; margin-top: -10px">
<hr style="width:70%; margin-left: 15%; margin-top: -18px">

















<div class="columns" style="border: 4px solid lightgray !important; margin-top: 15px; border-radius: 10px;">
  <div class="column is-one-third">
<img src="images/background (2).png" alt="" style="width:100%; height: 100%; border-radius: 10px; border: 10px solid ghostwhite;">
  </div>
 
  <div class="column">
  <h4 style="font-size: 18px; font-weight: 600;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nostrum eaque rem ex harum perspiciatis perferendis facilis delectus.
  </h4>

  <span style="font-size: 14px; font-weight: 500; ">By    <img src="images/3.png" alt="" style="width: 30px; border-radius: 30px;"> Name last </span>
  <br>
  <span  style="font-size: 12px; font-weight: 400;">10min ago   |  Mumbai</span>
  <span style="right: 0 !important;">
  <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
<a href="" class="uk-icon-button" uk-icon="youtube"></a>
</span>
  </div>
</div>

<hr style="width: 80%; margin-left: 10%; margin-top: -10px">
<hr style="width:70%; margin-left: 15%; margin-top: -18px">

        </div>
       










                                    





























<script>
$(document).ready(function(){

filter_data();

function filter_data()
{
$('.filter_data').html('<div id="loading" ></div>');
var action = 'fetch_data';
var minimum_price = $('#hidden_minimum_price').val();
var maximum_price = $('#hidden_maximum_price').val();
var brand = get_filter('city');
var ram = get_filter('title');
var storage = get_filter('state');
$.ajax({
url:"fetch_data.php",
method:"POST",
data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, 
storage:storage},
success:function(data){
$('.filter_data').html(data);
}
});
}

function get_filter(class_name)
{
var filter = [];
$('.'+class_name+':checked').each(function(){
filter.push($(this).val());
});
return filter;
}

$('.common_selector').click(function(){
filter_data();
});

$('#price_range').slider({
range:true,
min:1000,
max:65000,
values:[1000, 65000],
step:500,
stop:function(event, ui)
{
$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
$('#hidden_minimum_price').val(ui.values[0]);
$('#hidden_maximum_price').val(ui.values[1]);
filter_data();
}
});

});
</script>







<div class="result"></div>

<!---->





        <div class="column is-one-quarter

">


            <div class="uk-margin search-box" style="width: 100%; position: sticky; top:0; background-color: white;
z-index: 100">
                <form action="" method="post" class="uk-search uk-search-default" style="width: 90%; border-radius: 10px; margin-top: 10px;">
                    <a href="" type="submit" name="submit" class="uk-search-icon-flip" uk-search-icon></a>
                    <input class="uk-search-input" name="search" type="search" placeholder="Search"
                        style="border-radius: 15px;  background-color : #e4e7e7">
                </form>

        
                <script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
                <hr>

                <?php 

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=mape", "root", "");

?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

                <ul uk-accordion 
                    style="background-color: #f1f1f1; padding: 10px; border-radius: 15px; margin-right: 50px;" class="uk-filter">
                    <li>
                        <a class="uk-accordion-title" href="#" style="background-color: #f1f1f1;">Filter</a>
                        <div class="uk-accordion-content" style="background-color: #f1f1f1;">




                            <div class="uk-inline">
                                <span class="uk-text" type="button"
                                    style="font-size: 18px; text-align: left; cursor: pointer;">Filter By city</span>
                                <div uk-drop="mode: click">
                                    <div class="menu uk-card uk-card-default uk-card-bod" id="dropdown-menu3"
                                        style="width: 60%; margin-top: -70px !important; margin-left: 30%; border-radius: 15px;">
                                        <div class="content">
                                            <dl>
                                                <dt style="text-align: center">Select the city</dt>
                                            </dl>
                                            <?php

$query = "
SELECT DISTINCT(city) FROM hand ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>                                     <a href="#" class="dropdown-item checkbox menu-lable">
                                                <label><input type="checkbox"
                                                        class="common_selector brand city is-primary"
                                                        value="<?php echo $row['city']; ?>">
                                                    <?php echo $row['city']; ?></label>
                                            </a>
                                            <?php }
?>

                                        </div>
                                    </div>
                                </div>

                            </div>

<hr>


                                <div class="uk-inline">
                                <span class="uk-text" type="button"
                                    style="font-size: 18px; text-align: left; cursor: pointer;">Posted by</span>
                                <div uk-drop="mode: click">
                                    <div class="menu uk-card uk-card-default uk-card-bod" id="dropdown-menu3"
                                        style="width: 60%; margin-top: -70px !important; margin-left: 30%; border-radius: 15px;">
                                        <div class="content">
                                            <dl>
                                                <dt style="text-align: center">Select the city</dt>
                                            </dl>

                                <?php

$query = "
SELECT DISTINCT(ac) FROM hand ORDER BY id DESC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>

 <a href="#" class="dropdown-item checkbox menu-lable">
 <label><input type="checkbox" class="common_selector ram title" value="<?php echo $row['ac']; ?>" > <?php echo $row['ac']; ?> </label>

                                            </a>
                                            <?php }
?>

                                        </div>
                                    </div>
                                </div>
</div>





















                            </div>
                        </div>
                    </li>
                </ul>

            </div>







        </div>
    </div>

</body>

</html>