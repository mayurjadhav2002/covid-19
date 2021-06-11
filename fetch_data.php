



























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
        width: 100%;
        margin-top: -15px;
    }

    .ul-list li {
        width: 20%;
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
 $query = "SELECT * FROM blog_posts_seo where country='$country' ORDER BY postID DESC

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
  $query .= "and bio IN ('".$ram_filter."')
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
    $newDate = date("d-m-Y", strtotime($row['postDate']));
    


echo '<div class="columns article-column" style="border: 4px solid lightgray !important; margin-top: 15px; border-radius: 10px;">

<div class="column is-one-third">
<a class="uk-link-muted" href="a-o.php?id='.$row['postID'].'"> 
<img src="images/background (2).png" alt="" style="width:100%; height: 100%; border-radius: 10px; border: 10px solid ghostwhite;">
</a>
</div>

<div class="column">
<h4 style="font-size: 18px; font-weight: 600;"><a class="uk-link-muted" href="a-o.php?id='.$row['postID'].'">
'.$row['postTitle'].'   </h4></a>

<span style="font-size: 14px; font-weight: 500; ">By   
<a class="uk-link-muted" href="profile/user.php?id='.$row['userId'].'"> 
<img src="images/3.png" alt="" style="width: 30px; border-radius: 30px;"> '.$row['userId'].' </span></a>
<br>
<span  style="font-size: 12px; font-weight: 400;"> '.$newDate.'   |  '.$row['country'].'</span>
<span style="right: 0 !important;">
<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
<a href="" class="uk-icon-button" uk-icon="youtube"></a>
</span>
</div>
</div>

<hr style="width: 80%; margin-left: 10%; margin-top: -10px">
<hr style="width:70%; margin-left: 15%; margin-top: -18px">

';
      
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