<?php require('includes/config.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @media only screen and (max-width: 1024px){
        article{
            width: 90% !important;
            margin-left: 5%;
        }
    }
      article{
        font-size: 13px;
       padding: 20px;
        width: 100%;
        border: 0.1px solid lightgray;
        border-radius: 15px;
        box-shadow:0.25px 0.25px 0.5px grey, 0 0 6.25px lightgrey, 0 0 1.25px lightgray;
        margin-top: 15px;
      }
    .ul-list {
        text-align: center !important;
        width: 90%;
        margin-top: -15px;
        margin-left: 10%;
    }

    .ul-list li {
        width: 30%;
        padding: 5px;
    }

    .ul-list li:hover {
        background-color: #fafafa;
        border-radius: 15px;
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
</head>

<div style="display:none;"> 
<?php
require("geo_plugin.php");

?>
</div>
<?php 

//database_connection.php
$connect = new PDO("mysql:host=localhost;dbname=mape", "root", "");

?><?php

//fetch_data.php


if(isset($_POST["action"]))
{
 $query = "SELECT * FROM hand where country='$country' ORDER BY id DESC

 ";

 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= " and city IN('".$brand_filter."')
  ";
 }
 if(isset($_POST["ram"]))
 {
  $ram_filter = implode("','", $_POST["ram"]);
  $query .= "and ac IN ('".$ram_filter."')
  ";
 }
 if(isset($_POST["storage"]))
 {
  $storage_filter = implode("','", $_POST["storage"]);
  $query .= "and state IN ('".$storage_filter."')
  ";
 }
 

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {

  
echo '<a class="uk-link-reset" href="user.php">';
echo '<article class="uk-comment uk-article">

<header class="uk-comment-header">
    <div class="uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto image">
        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png" style="width: 40px; height: 40px;">
        </div>';

      echo'<div class="uk-width-expand">';
    
      echo'   <h7 class="uk-comment-title uk-margin-remove" style="font-style: uppercase; font-size: 14px; font-weight: 700; margin-left: -18px !important;">
'.$row['posted_by'].' '.$row['lastname'].'
      </h7>';
       echo '<ul class="uk-comment-meta uk-subnav uk-link-reset  uk-margin-remove-top">

       <li>
       <a style="font-size: 11px; font-weight: 400; margin-left: -38px !important; margin-top: -5px !important"; 
       color:black !important;
       >
       '.date('jS M', strtotime($row['postdate'])).' ago</a></li>

       <li style="border-left: 0.5px solid gray; border: 1px solid transparent;"> 
       <a href="#" style="font-size: 10px; font-weight: 400; margin-left: -15px !important; margin-top: 2px !important"; >
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>  
       '.$row['city'].', '.$row['country'].'</a></li>
   </ul>';
        echo '</div>';
        echo '  <div class="uk-menu">
        <a class="" uk-icon="icon: more" style="font-size: 30px;"></a>
<div uk-dropdown="animation: uk-animation-slide-top-small; duration: 100">
<ul class="uk-nav uk-dropdown-nav">
    <li><a id="'.$row['id'].'" href="bookmark.php?id='.$row['id'].'" value="'.$row['id'].'"> Bookmark</a></li>
    <li><a id="'.$row['id'].'" href="report.php?id='.$row['id'].'" value="'.$row['id'].'">Report Post</a></li>
    
    <li><a id="'.$row['id'].'" href="bookmark.php?id='.$row['id'].'" value="'.$row['id'].'">Report User</a></li>
   
</ul>
</div>
        </div>';
         echo '   </div>';
         echo ' </header>';
         echo '
         <div class="uk-comment-body">
     
     
     
       
           <p>
           <a href="" class="uk-link-reset">
'.$row['covidpost'].'</a>            
            </p>
     
     
      
    <hr>
     ';            
         echo ' <ul class="uk-iconnav ul-list" style="text-align: center; ">
     
       
         <li>
     <a href="" class="uk-margin-small-right">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
       <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
     </svg>
     
     </a> <div uk-drop="pos: top-center">
     <div class="uk-card uk-card-body uk-card-default" style="text-align: center !important;">
     <span>Share to Spread more</span><br>
     <a target="blank" href="https://twitter.com/share?hashtags=covid19,covidhelp,IndiaFightsCorona,Unite2FightCorona,Covishield,covidbreak.org&text=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A'.$row['covidpost'].'%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK) %2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button uk-margin-small-right twitter" uk-icon="twitter"></a>
<a target="blank" class="facebook_share" href="http://www.facebook.com/sharer.php?u=https://www.themedaid.in/id?='.$row['id'].'&quote=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A'.$row['covidpost'].'%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK)  %0D%0A%0D%0A%0D%0AFind%20Help%20or%20Help%20others%20during%20Covid%2C%20share%20the%20information%2C%20blogs%2C%20help%20you%20can%20...%20visit%20https%3A%2F%2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button  uk-margin-small-right facebook" uk-icon="facebook"></a>
<a target="blank" href="https://wa.me/?text=Hey%20there%2C%20I%20would%20like%20to%20share%20with%20you...%0D%0A'.$row['covidpost'].'%0D%0A%20Available%20in%20'.$row['city'].'%0D%0A%20Posted%20by%20'.$row['posted_by'].'%20('.$row['ac'].' at COVIDBREAK)  %0D%0A%0D%0A%0D%0AFind%20Help%20or%20Help%20others%20during%20Covid%2C%20share%20the%20information%2C%20blogs%2C%20help%20you%20can%20...%20visit%20https%3A%2F%2Fwww.covidbreak.org%2F%0D%0A%0D%0ACOVIDBREAK%0D%0A%0D%0A" class="uk-icon-button  uk-margin-small-right whatsapp" uk-icon="whatsapp"></a>
<a href="" class="uk-icon-button uk-margin-small-right linkedin" uk-icon="linkedin"></a>

     </div>
 </div>
     
         </li>
         <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
       <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
     </svg></a>
     
<div uk-dropdown="mode: click">
<span style="font-weight: 500;">
'.$row['whatsapp'].'</span>
</div>
     </li>
         <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
       <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
     </svg>
     </a>
     
<div uk-dropdown="mode: click">
<span style="font-weight: 500;">
'.$row['phone'].'</span>
</div>
     </li>
     

     </ul>';
         echo ' </div>';
        
         echo '</article>';
         echo ' </a>';
         
      
  }
 }
 else
 {
 echo '<h3>No Data Found</h3>';
 }

}

?>
<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "column.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "blue" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});

</script>

