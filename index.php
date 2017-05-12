<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <title>PAWWN</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript"
  src="js/display.js"></script>

  <!--NAVBAR STARTS HERE-->

  <div class="navbar-fixed">
   <nav class="nav-extended">
     <div class="nav-wrapper">
       <ul id="dropdown1" class="dropdown-content">
        <li><a href="registration.html">CLIENT REGISTRATION</a></li>
        <li><a href="clc_reg.html">CLC REGISTRATION</a></li>
      </ul>            

      <a href="index.php" class="brand-logo center">PAWWN</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">ABOUT</a></li></strong>
        <strong>
          <li><a href="#">FAQs</a></li></strong>
          <strong>
            <li><a href="#">CONTACT</a></li></strong>
            <strong>
              <li><a href = "login.html">
                <?php 
                if(isset($_SESSION['name']))
                { 
                  echo $_SESSION['name'];
                }
                else
                {
                  echo "LOGIN";
                }
                ?> </a></li></strong>
                <strong><li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                REGISTER
                  <i class="material-icons right">arrow_drop_down</i></a></li></strong>

                </ul>
              </div>
            </nav>
          </div>

          <!--    NAVBAR FINISHES HERE-->

          <!--FIRST DIV STARTS HERE-->
          <div id="hello-div">

           <h1 class="header center ">About Us</h1>
           <h4 class ="header col s12 light center">Find the right help, fast and easy.</h4>
           <div class="row">
            <p class="header col s12 light">Schedule an appointment with the right legal centre.</p>
          </div>

          <div class="row"> <p>
            <h4>Are you a client or a CLC?</h4>
            <a class="waves-effect waves-light btn">Client</a>
            <a class="waves-effect waves-light btn">CLC</a>

          </div>



        </div>
        <!--FIRST DIV STARTS HERE-->


        <a href="music.html">
          <div id="music-div">
           <h1 class="header center white-text">How we help our clients</h1>
           <h5 class ="header col s12 white-text light center">Our goal is to simplify the legal system for you, and book an appointment with your closest and most relevant CLC. </h4>
           </div>
         </a>

         <a href="games.html">
          <div id="game-div">
           <h1 class="header center white-text">How we help our legal centres</h1>
           <h3 class ="header col s12 white-text light center">Simplify the interactions between a client and your legal centre</h3>
         </div>
       </a>

   <!--
    FOOTER STARTS HERE
  -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">PAWWN</h5>
          <a class="waves-effect waves-light btn" href="privacy.html">Privacy Policy</a>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Quick Links</h5>
          <ul>
           <li><a class="grey-text text-lighten-3" href="games.html">Games</a></li>
           <li><a class="grey-text text-lighten-3" href="#!">Music</a></li>
           <li><a class="grey-text text-lighten-3" href="#!">Videos</a></li>
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright">
    <div class="container">
      <a style = "color: white;" href = "logout.php">
        <?php
        if(isset($_SESSION['name']))
        {
          echo "    Sign Out";
        }
        ?>
      </a>
      © 2017 Good Vibes All Rights Reserved.
      <a class="grey-text text-lighten-4 right" href="feedback.html"><strong>Give Feedback</strong></a>
    </div>
  </div>

</footer>

<!-- FOOTER ENDS HERE-->
</body>
</html>