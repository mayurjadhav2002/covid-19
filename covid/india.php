<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("head.php")
    ?>
    <style> 
    #myTable{
padding: 5%;
    }
#myInput {
  background-image: url('https://w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  background-color: ghostwhite;
  width: 40%;
  left: 0;
  margin-left: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-top: 12px;
  border-radius: 15px;
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
        
    </style>
</head>

<body onload="fetch()">
<?php
include("../navbar.php")
?>
    <div class="columns is-desktop">
        <div class="column is-one-quarter

is-primary sticky" style="">
            <div class="menu" style="width:70%; margin-left: 20%; text-align: left;    position: sticky;
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
        </div>

        <div class="column column2">



            <div class="top-heading" style=" border-bottom: 0.5px solid lightgrey; width: 100%;
position: sticky; top:0; background-color: white;
z-index: 100
">
                <span style="font-size: 20px; font-weight: 700; "> Home</span>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


            </div>
            <div style="background-color: lightgrey;">
<?php
include("tablei.php")
?></div>
            <hr>
            <div class="heading title"></div>
        </div>
    </div>
    </div>
    <script>
    function fetch(){
        $.get("https://api.covid19india.org/v4/min/timeseries.min.json"),
        function(data){
           var myTable = document.getElementById("myTable");
           for (var i= 1; i< (data[contries].length); i++  ){
               var x = myTable.insertRow();
               x.insertCall(0);
               myTable.rows[i].cells[0].innerHTML = data['Contries'][i - 1]['country'];
               
               x.insertCall(0);
               myTable.rows[i].cells[0].innerHTML = data['Contries'][i - 1]['TotalConfirmed'];
               





           }
        }
    }
    </script>
</body>

</html>