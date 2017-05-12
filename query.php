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
      	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	
      	
      	<script type="text/javascript" src="query.js"></script>
      	
      

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
 
<div class="container">
		<div class="row">
			<form class="col s12" method="post" action="#">
				<h3 class="center">Search for a CLC</h2>
				<div class="input-field col s12">
                  <input placeholder="Search" id="query" type="text" class="validate" name="dname">
                  </div>
                  
                   <div class="input-field col s12">  
                <input type="button" name="search" id="search" value="Search">
                  </div>
                  
			</form>

      <div id="txtHint"><b> <br> <br> </b></div>
		</div>
      </div>
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