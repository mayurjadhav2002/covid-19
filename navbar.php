<?php
include("sessions.php");
include("geo_plugin.php");
?>








<style>
.hamburger{
display: none !important;
}
@media only screen and (max-width: 1024px) {
  .hamburger{
display:block !important;
}







}
</style>
<html>

<body>
    <nav class="uk-navbar-container " uk-navbar style="background-color: 
#ffffff	 !important; color: black; border-bottom: 1px solid lightgrey; z-index: 1000; ">
        <div class="uk-navbar-left">
            <button class="uk-button uk-button-text hamburger" type="button" uk-toggle="target: #offcanvas-overlay">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></button>

           
                <div id="offcanvas-overlay" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


     
        <ul class="uk-list">

<li>
    <a class="uk-link-toggle nav_link" href="index.php">
        <span class="icon-text" >
            <span class="icon">
                <i class="icon" uk-icon="icon: home;ratio: 1.5"
                    style="font-size: 20px; font-weight: 600;"> </i>
            </span>
            <span style="font-size: 20px; font-weight: 600; margin-left: 10px;"> Home</span>
        </span>
    </a>
</li>





<li>
    <a class="uk-link-toggle nav_link" href="covid.article.php">
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

 
</li>

</ul>
    </div>
</div>

           <img src="images/mainlogo.png" alt="" style="width: 30%; " required>
        </div>

        
        <div class="uk-navbar-right" style="z-index: d;">
        





            <?php if(isset($_SESSION["login_sess"])){
                echo '



                
                <div class="dropdown is-hoverable is-inverted" style="margin: 6px; color: black;">
                <div class="dropdown-trigger is-inverted">
                  <button class="button is-text" aria-haspopup="true" aria-controls="dropdown-menu4">
                  <img src="images/2.png" width="30" height="30" class="is-rounded">
                  <span class="uk-text-middle" style="color:black; margin-left: 7px;">'.$username. ' <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg></span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                  <div class="dropdown-content">
                    <div class="dropdown-item">
                     
                    <ul>
                    <li> <a href="http://localhost/mape/profile"> Profile</a>
                    </li>
                    <hr>
                    <li> <a href="http://localhost/mape/authuser/logout.php">Logout</a>
                    </li>
                    </ul>

                    </div>
                  </div>
                </div>
              </div>
               
                ';}
        else{
        ?>

<button class="button  is-white is-normal is-transparent" type="button">more</button>
<div class="uk-width-large" uk-dropdown>
    <div class="uk-dropdown-grid uk-child-width-1-2@m" uk-grid>
        <div>
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
        <div>
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
            <div class="buttons web-log-join-buttons">
                <button class="button is-primary is-outlined is-small web-log-join-buttons-1">LogIn</button>
                <button class="button is-success web-log-join-buttons-1">Join Now</button>
                <?php }
?>
            </div>


        </div>
    </nav>

    <script src="node_modules/uikit/dist/bundle.js"></script>
    <script src="node_modules/uikit/js/uikit-icons.min.js"></script>
</body>

</html>