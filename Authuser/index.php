<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <?php
    include("head.php");
    ?>
    <style>
      .typed-cursor {
        display:none;
}
    body{
 background-color: #fafafa;

    }
    .page{
      position:absolute;
     opacity: 0.2;
width: 100%;
height: 100%;
z-index: -1;
background-size: cover;
    }
 .uk-grid-match{
  box-shadow: 2px 1px 109px 0px rgba(255,255,255,0.75);
-webkit-box-shadow: 2px 1px 109px 0px rgba(255,255,255,0.75);
-moz-box-shadow: 2px 1px 109px 0px rgba(255,255,255,0.75);
 }
 .uk-card-default{
border: 3px solid skyblue;
border-radius: 30px;
 }
 .uk-card-primary{
  border: 3px solid white;
border-radius: 30px;
 }
 .element
 {
font-size: 30px;
font-weight: 500;
margin-left: 20%;

 }
    </style>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>
<body>


<p class="element"></p>
<script>
var typed = new Typed('.element', {
  strings: ["Choose the Account You Would like to Dele", "Choose the Account You Would like to Create!!!"],
  smartBackspace: true, // Default value
  typeSpeed: 50
});
</script>

<div class="uk-child-width-1-2@m uk-grid-match" uk-grid style="margin-left: 10%; margin-right: 10%; margin-bottom: 0; padding-bottom: 10%">
    <div>
    <a href="authnewac.php" class=" uk-card uk-card-body uk-card-hover uk-card-default uk-link-toggle ">
    <h3 class="uk-card-title"><span class="uk-link-heading">User</span></h3>
    <p>Account for those who only want to real articles who are seeking for help in covid pandemic.</p>
</a>
    </div>
    <div>
    <a href="helpaccount.php" class=" uk-card uk-card-body uk-card-hover uk-card-primary uk-link-toggle ">
    <h3 class="uk-card-title is-light"><span class="">Volunteers</span></h3>
    <p>Ideal for those who want to share information, blogs, articles, covid help etc. can join this group. certificates will be distributed only to volunteers.</p>
</a>
    </div>
    
</div>

</div>

</body>
</html>