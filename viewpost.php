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
  <title>Document</title>
  <script type="text/javascript" src="/hashover/comments.php"></script>
  <link rel="stylesheet" type="text/css" href="/hashover/themes/default/comments.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <style>
	 
      article{
        font-size: 15px;
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
        <div class="column is-one-quarter

is-primary sticky">
            <div class="menu" style="width:70%; margin-left: 20%; text-align: left;    position: sticky;
  top: 0px;
    
    z-index:100;">

            <ul class="uk-list">
 
            <li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon" uk-icon="icon: home;ratio: 1.5" style="font-size: 20px; font-weight: 600;">   </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   Home</span>
                </span>
                </a>
</li>





                <li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon"  style="font-size: 20px; font-weight: 600;">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
  <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>
                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   Articles</span>
                </span>
                </a>
</li>



<li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon" uk-icon="icon: bell;ratio: 1.5" >
                        <svg xmlns="http://www.w3.org/2000/svg"
                        style="position: absolute;
                        color: navyblue;
                        margin-left: 5px;
                        margin-top: -10px;
                        "
                         width="30" height="30" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
</svg>
                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   Notifications</span>
                </span>
                </a>
</li>



<li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon" uk-icon="icon: bookmark;ratio: 1.5" >
                       
                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   BookMarks</span>
                </span>
                </a>
</li>



<li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon"  >
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
  <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
</svg>
                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   Messages</span>
                </span>
                </a>
</li>







<li>
                <a class="uk-link-toggle" href="#"> 
                 <span class="icon-text">
                    <span class="icon">
                        <i class="icon" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
  <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
</svg>

                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   Stats</span>
                </span>
                </a>
</li>



<li>

<a href="" class="uk-link-toggle">
     <span class="icon-text">
                    <span class="icon">
                        <i class="icon" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg>

                    </i>
                    </span>
                    <span style="font-size: 20px; font-weight: 600; margin-left: 10px;">   More</span>
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
        </div>
        
        <div class="column column2">




        <article class="uk-comment">
    <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto image">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png" style="width: 40px; height: 40px;">
            </div>
            <div class="uk-width-expand">
                <h7 class="uk-comment-title uk-margin-remove" style="font-size: 14px; font-weight: 700; margin-left: -18px !important;">
              <?php
			  $setid =$row['userId'];
			  $stmt2 = $db->prepare("SELECT *FROM member WHERE Id ='$setid' ");
			  $stmt2->execute(array(':Id' => $row['id']));
		  
			  $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
		  
			  $links = array();
			  foreach ($catRow as $cat)
			  {
				  $links[] = "<a class='uk-link-reset' href='#'>
				$cat[username]    $cat[lastname]
				  </a>";
			  }
			  echo implode(", ", $links);
				   
			   
			  ?>
				
			
                </h7>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><a href="#" style="font-size: 10px; font-weight: 400; margin-left: -18px !important; margin-top: -5px !important">12 days ago</a></li>
                    <li><a href="#" style="font-size: 10px; font-weight: 400; margin-left: -18px !important; margin-top: -5px !important">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>  
<?php
echo $row['city'] ;
?>   ,              
<?php
echo $row['country'];
?>   
</a></li>
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
        <p>
			<?php
echo $row['postCont'];
?>   
</p>
<br>
<div class="count">
<a href=""><span> <?php
echo $row['comments'];
?>   </span> comments</a> |
<a href=""><span>16k </span> Shares</a>
</div>
<hr>


        <ul class="uk-iconnav ul-list" style="text-align: center; ">
        <li>
      <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
</svg>
<span><?php
echo $row['comments'];
?>   </span>
</a>
    </li>
  
    <li>
<a href="" class="uk-margin-small-right">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
</svg>

</a>
<div uk-drop="pos: top-center">
     <div class="uk-card uk-card-body uk-card-default" style="text-align: center !important;">
     <span>Share to Spread more</span><br>
     <a href="" class="uk-icon-button uk-margin-small-right twitter" uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right facebook" uk-icon="facebook"></a>
<a href="" class="uk-icon-button  uk-margin-small-right whatsapp" uk-icon="whatsapp"></a>
<a href="" class="uk-icon-button uk-margin-small-right linkedin" uk-icon="linkedin"></a>

     </div>
</div>

    </li>
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a></li>
    <li>
    <a href="#" >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
</svg>
</a>

<div uk-dropdown="mode: click">
<span style="font-weight: 500;">
+91 3745859545</span>
</div>
</li>

<li>
<a href="">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>
</a>
</li>

</ul>
    </div>
  
  
</article>

<hr>

<!--comment-->
<button class="uk-button uk-button-default comment-button uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Open</button>


<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title" id="headline"></h2>
		<form method="POST" id="comment_form">


    <script>function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}</script>

<div class="columns" style="margin-top: 5px;">

  <div class="column is-1 image ">



  <img src="images/backgroundwithcolor.png" class="is-rounded" alt="" 
  style="width: 40px; height: 40px; position: relative;
  border: 1px solid lighgrey;
  border-radius: 50%;
 
  ">
</div>
<div class="column">
<textarea name="comment_content" id="comment_content" class="form-control textarea" oninput="auto_grow(this)" placeholder="Would you like to help, Write here..." style="
    resize: none;
    overflow: hidden;
    min-height: 50px;
    width: 100% !important;
    max-height: 200px;
    border: 1px solid transparent;
    cursor: red;
    font-size: 18px;
    font-color: grey;
    font-family: sans;
    
    
"></textarea>

</div>
<input type="hidden" name="comment_on" value="<?php echo $row['id']?>">
     <input type="hidden" name="comment_id" class="input" id="comment_id" value="0" />
     <input type="hidden" name="comment_name" class="input" id="comment_name" value="mj" />
  
 
 
   <span id="comment_message"></span>
  



    <div class="form-group">









 

		<p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button name="submit" type="submit" value="Submit" class="btn btn-info button" value="Submit" class="uk-button uk-button-primary" type="button">Save</button>
        </p>
		</div>
   </form>
   </div>
    </div>
    </div>
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