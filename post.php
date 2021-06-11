<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include("head.php");
    ?>
    <style>
    .uk-link-toggle {
        padding: 10px 45px 10px 45px;

    }

    .uk-link-toggle:hover {
        background-color: #fafafa;
        border-radius: 30px;
    }

    .uk-list {
        margin-top: 50px;
    }

    .uk-list li {
        margin-top: 22px !important;
    }

    .sidenav-button {
        padding: 10px 45px 10px 45px !important;

    }

    .column2 {


        margin: none !important;

    }
    #loading{
        background: none;
    }
    .top-nav-home{
            display: block;
        }
        .top-nav-filter{
            display: none;
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
    }
    </style>
</head>

<body>
 

    <div class="columns is-desktop">

    <div class="column is-one-quarter">
    
    <!----->    






            <div class="menu" style="width:70%; margin-left: 20%; text-align: left;    position: sticky !important;
  top: 0px;
    
    z-index:100;">

                <ul class="uk-list">

                    <li>
                        <a class="uk-link-toggle nav_link" href="geo_plugin.php">
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
                        <a class="uk-link-toggle nav_link" href="message.php">
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
    <a class="uk-link-toggle" href="#" uk-toggle="target: #my-id">
        <span class="icon-text">
            <span class="icon">
                <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
  <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
</svg>
                </i>
            </span>
            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Quote</span>
        </span>
    </a>
</li>

<div id="my-id" class="uk-modal-container" uk-modal>

    <div class="uk-modal-dialog uk-modal-body">
        <?php

if(isset($_POST['submit_quote']))
{
  $sql = "INSERT INTO hand (postedid, phone, whatsapp,posted_by, lastname, covidpost, city, country, ac)
  VALUES ($id,'".$_POST["phone"]."' ,'".$_POST["whatsapp"]."','$username','$lname','".$_POST["text"]."', '$city', '$country','$accountype')";

  $result = mysqli_query($conn,$sql);
  if($result){
    
    
      echo "
      <script>
      UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Quote Posted Successfully &#128512;',status:'success'})</script>";
  }else{
      echo "     <script>
      UIkit.notification({message: '<span uk-icon=\'icon: close\'></span> Quote Not Posted, Maybe Server problem &#128533;'})</script>";
 
  }
}

?>

    <form action="" method="post">
        <h2 class="uk-modal-title"></h2>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="columns">
            
  <div class="column is-2"><figure class="image" style="margin-left: 30%;">
  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png" style="width: 70px; height: 70px;">
</figure></div>
  <div class="column"><textarea class="textarea autoExpand" name="text" placeholder="e.g. Hello world" style="  display:block;
  box-sizing: padding-box;
  overflow:hidden;

  padding:10px;
  width:250px;
  font-size:14px;
  min-height: 100px;
  border-radius:8px;
  border:6px solid #556677;"></textarea></div>
  
</div>
<br>
<div class="field" style="width: 70%;margin-left: 15%;">
  <label class="label">Phone Number </label>
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="telephone" name="phone" placeholder="Enter the Number on which a need can contact you/provider">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope" uk-icon="receiver"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field" style="width: 70%;margin-left: 15%;">
  <label class="label">WhatsApp Number </label>
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="tel" name="whatsapp" placeholder="Whatsapp Number Can help to inquire, place the whatsapp number here">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope" uk-icon="whatsapp"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>

<button class="button is-primary is-light" style="width: 50%; margin-left: 25%;" name="submit_quote">Submit</button>

<script>$(document)
    .one('focus.textarea', '.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.textarea', '.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0,
            rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });</script>
        </form>
    </div>
 

</div>




<li>
    <a class="uk-link-toggle" href="#">
        <span class="icon-text">
            <span class="icon">
                <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                </i>
            </span>
            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Write Article</span>
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
                                What is Corona Virus?
                            </a>
                            <a href="https://www.covidanalytics.io/infection_calculator" target="_blank" class="dropdown-item">
                                CovidRisk Calculator
                            </a>
                            <a href="#" class="dropdown-item">
                                Stats of CovidBreak
                            </a>
                            <a href="#" class="dropdown-item">
                                Write Feedback
                            </a>
                           
                        </div>
                    </li>

                </ul>


            </div>
       




    
    
       <!----->    
    </div>





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
                    </li>
       </div>
</div>

<!---->
<div class="filter_data">

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
url:"article.php",
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
        </div>




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


         <div class="article" style="background-color: #fafafa; margin-right: 20px; border-radius: 15px">  
<span style="font-size: 24px; font-weight: 700; text-align: center;margin-left: 2%;margin-top: 15px;">Articles</span><hr style="margin-top: -3px;">
      <div class="columns" style="margin-top: -20px;">
      
      <div class="column is-3

">
      <img src="images/1.png" alt="" style="width: 90%; margin-left: 10%; margin-top: 15%; border-radius: 15px;border: 4px solid white;">
      </div>
      <div class="column" style="font-size: 14px; font-weight: 700">
      <p style="font-weight: 500">monday</p><hr style="margin-top: -17px; font-weight: 500 !important;
       font-size: 12px; margin-right: 60%;">
      <p style="margin-top: -17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Reiciendis Reiciendis ReiciendisReiciendis </p>
      
      </div>

   
      </div>
      <hr style="width:100%; color: black; margin-top: -40px !important;">
   
      <div class="columns" style="margin-top: -20px;">
      
      <div class="column is-3

">
      <img src="images/1.png" alt="" style="width: 90%; margin-left: 10%; margin-top: 15%; border-radius: 15px;border: 4px solid white;">
      </div>
      <div class="column" style="font-size: 14px; font-weight: 700">
      <p style="font-weight: 500">monday</p><hr style="margin-top: -17px; font-weight: 500 !important;
       font-size: 12px; margin-right: 60%;">
      <p style="margin-top: -17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis </p>
      
      </div>

   
      </div>



      <hr style="width:100%; color: black; margin-top: -40px !important;">
   
      <div class="columns" style="margin-top: -20px;">
      
      <div class="column is-3

">
      <img src="images/1.png" alt="" style="width: 90%; margin-left: 10%; margin-top: 15%; border-radius: 15px;border: 4px solid white;">
      </div>
      <div class="column" style="font-size: 14px; font-weight: 700">
      <p style="font-weight: 500">monday</p><hr style="margin-top: -17px; font-weight: 500 !important;
       font-size: 12px; margin-right: 60%;">
      <p style="margin-top: -17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis </p>
      
      </div>

   
      </div>




      <hr style="width:100%; color: black; margin-top: -40px !important;">
   
   <div class="columns" style="margin-top: -20px;">
   
   <div class="column is-3

">
   <img src="images/1.png" alt="" style="width: 90%; margin-left: 10%; margin-top: 15%; border-radius: 15px;border: 4px solid white;">
   </div>
   <div class="column" style="font-size: 14px; font-weight: 700">
   <p style="font-weight: 500">monday</p><hr style="margin-top: -17px; font-weight: 500 !important;
    font-size: 12px; margin-right: 60%;">
   <p style="margin-top: -17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis </p>
   
   </div>


   </div>




   <hr style="width:100%; color: black; margin-top: -40px !important;">
   
   <div class="columns" style="margin-top: -20px;">
   
   <div class="column is-3

">
   <img src="images/1.png" alt="" style="width: 90%; margin-left: 10%; margin-top: 15%; border-radius: 15px;border: 4px solid white;">
   </div>
   <div class="column" style="font-size: 14px; font-weight: 700">
   <p style="font-weight: 500">monday</p><hr style="margin-top: -17px; font-weight: 500 !important;
    font-size: 12px; margin-right: 60%;">
   <p style="margin-top: -17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis </p>
   
   </div>


   </div>
   <hr style="margin-top: -3px;">
   <span style="font-size: 18px; font-weight: 500; text-align: right !important;margin-left: 50%;margin-top: 15px; margin-top: -15px;">Explore more....</span>


</div>    
            </div>
















  



        </div>
    </div>

</body>

</html>


<?php
$query = "
SELECT DISTINCT(city) FROM hand ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>

                       




<?php }?>