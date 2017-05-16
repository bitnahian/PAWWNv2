<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <title>U-LEGAL</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <link type="text/css" rel="stylesheet" href="css/flowchart.css"  media="screen,projection"/>

        <script type="text/javascript" src="js/flowchart.js"></script>


    </head>

    <body>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script type="text/javascript"
                src="js/display.js"></script>

           <!---SIDENAV STARTS HERE-->   

        <ul id="slide-out" class="side-nav">
            <li><div class="userView">
                <div class="background">
                    <img src="images/about.jpg">
                </div>
                <a href="#!user"><img class="circle" src="images/default-user.png"></a>
                <a href="#!name"><span class="white-text name">
                    <?php 
                    if(isset($_SESSION['name']))
                    { 
                      echo $_SESSION['name'];
                    }
                    else
                    {
                      echo "Register now";
                    }
                    ?>
                </span></a>
                </div></li>

            <li><a href="about.php">About</a></li>
            <li><a href="consult.php">Consult</a></li>
            <li><a href="query.php">Query</a></li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Register<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="registration.html">User</a></li>
                                <li><a href="#!">CLC</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>

        <!---SIDENAV ENDS HERE-->

  <!--NAVBAR STARTS HERE-->

  <div class="navbar-fixed">
   <nav class="nav-extended">
     <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

       <ul id="dropdown1" class="dropdown-content">
        <li><a href="registration.html">CLIENT REGISTRATION</a></li>
        <li><a href="clc_reg.html">CLC REGISTRATION</a></li>
      </ul>            

      <a href="index.php" class="brand-logo center">U-LEGAL</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <strong><li><a href="about.php">ABOUT</a></li></strong>
         <strong>
          <li><a href="query.php">QUERY</a></li></strong>
        <strong>
          <li><a href="consult.php">CONSULT</a></li></strong>
             <strong> <li><a href = "login.html">
                <?php 
                if(isset($_SESSION['name']))
                { 
                  echo strtoupper($_SESSION['name']);
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


        <div class ="container">
            <div class="collection with-header">
                <ul class="collection-header center"><h4 class="light">Find the correct legal advice.</h4></ul>
                <ul class="collection-item center">Choose your situation below to see a flowchart which is relevant to your situation.</ul>
                <a href="fine-flow.html">
                    <ul class="collection-item active">
                        <h6>Penalty Notice</h6>
                    </ul>
                    <ul class="collection-item">
                        <h6>Domestic Violence</h6>
                    </ul>
                    <ul class="collection-item">
                        <h6>Civil Rights</h6>
                    </ul>
                </a>
            </div>
             
             
             <!-- Modal Trigger -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>What to do in the case of a WDO</h4>
      <p>Do the hokie pokie and turn around because that's what it's all about</p>
      <p>Relevant legal centres:</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
           
           
            <div class="row">
                <div class="tree" style="width:2860px">
                    <ul>
                        <li>
                            <a href="#" class="first yellow">Penalty Notice</a>
                
                            <ul class="c1">
                                <li>
                                    <a href="#modal1" class="yellow">WDO</a>
                
                                <li>
                                    <a href="#"  class="yellow">Pay</a>
                
                                </li>
                                <li>
                                    <a href="#"  class="yellow">Court</a>
                
                                    <ul class="c1">
                                        <li>
                                            <a href="#"  class="yellow">Request a CLC</a>
                                        </li>
                                    </ul>
                                </li>
                
                                <li>
                                    <a href="#" class="yellow"> Do nothing/part payment</a>
                                </li>
                                <li>
                                    <a href="#" class="yellow"> Nominate another person</a>
                                </li>
                                <li>
                                    <a href="#" class="yellow">SDR Review</a>
                                    <ul class="c1">
                                        <li>
                                            <a href="#" class="yellow">Common reasons</a>
                                            <ul class="C1">
                                                <li>
                                                    <a href="#" class="yellow">SDR Rejects Review</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="yellow">SDR withdraws (No pay)</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                
                                </li>
                            </ul>
                        </li>
                
                    </ul>
                </div>
            </div>
        </div>


        <!--
FOOTER STARTS HERE
-->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">U-LEGAL</h5>
                        <a class="waves-effect waves-light btn" href="privacy.html">Privacy Policy</a>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Quick Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="games.html">Services</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">CLC Directory</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Our Mission</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 U-LEGAL All Rights Reserved.
                    <a class="grey-text text-lighten-4 right" href="feedback.html"><strong>Give Feedback</strong></a>
                </div>
            </div>
        </footer>

        <!-- FOOTER ENDS HERE-->
    </body>
</html>