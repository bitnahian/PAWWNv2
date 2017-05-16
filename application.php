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


  <script type="text/javascript" src="registration.js"></script>



</head>

<body>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

 

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

 <script type="text/javascript"
  src="js/display.js"></script>
          <div class="container">
            <div class="row">
             <form class="col s12" method="post" action="apply.php" enctype="multipart/form-data" >
              <?php 
              if(!isset($_SESSION['name']))
              { 
                header("Location: login.html");
              }
              ?>
              <h3 class="center">Apply to a CLC quickly! </h2>
                <div class="input-field col s12">
                 <div class="input-field col s12">
                  <br>
                  <input placeholder="Name" id="name" type="text" class="name" name="dname">
                </div>
                <div class="input-field col s12">
                  <input placeholder="Email" id="email" type="text" class="email" name="demail">
                </div>
                <p> Which issues are you dealing with? Check all that apply. Learn more about common law issues <a href = "#" > here </a> </p>
                <p>
                 <input type="checkbox" id = "aboriginal" name="specialization" value="aboriginal torres strait islander" />  
                 <label for="aboriginal">Aboriginal and Torres Strait Islander</label>
               </p>
               <p>
                 <input type="checkbox" id = "business" name="specialization" value="business">  
                 <label for="business">Business</label>
               </p>

               <p>
                <input type="checkbox" id = "children" name="specialization" value="children young people"  >
                <label for="children"> Children and Young People</label>
              </p>

              <p>

                <input type="checkbox" id = "consumers" name="specialization" value="consumers"  >
                <label for="consumers"> Consumers</label>
              </p>


              <p>
                <input type="checkbox" id = "courts" name="specialization" value="courts tribunals"  >
                <label for = "courts"> Courts and Tribunals</label>
              </p>

              <p>   <input type="checkbox" name="specialization" id="crime" value="crime offence">
                <label for = "crime"> Crime and Offence</label>
              </p>

              <p>
                <input type="checkbox" name="specialization" id="debt" value="debt credit"  > 
                <label for ="debt">Debt and Credit</label>
              </p>

              <p>    
                <input type="checkbox" name="specialization" id="employment" value="employment"  >
                <label for="employment">Employment</label>
              </p>

              <p>
               <input type="checkbox" name="specialization" id="environment" value="environment"  >
               <label for="environment">Environment</label>
             </p>


             <p>
              <input type="checkbox" name="specialization" id="family" value="family law relationships"  > 
              <label for="family">Family Law and Relationships</label>
            </p>


            <p>
             <input type="checkbox" name="specialization" id ="government" value="government"  >
             <label for="government"> Government</label>
           </p>


           <p>
            <input type="checkbox" name="specialization" id="health" value="health"  > 
            <label for="health">Health</label>
          </p>


          <p>
            <input type="checkbox" name="specialization" id="housing" value="housing land"  > 
            <label for="housing">Housing and Land</label>
          </p>


          <p><input type="checkbox" name="specialization" id="humanrights" value="humanrights"  > 
            <label for="humanrights">Human Rights</label>
          </p>
          <p>
           <input type="checkbox" name="specialization" id="immi" value="immigration citizenship"  >
           <label for="immi">Immigration and Citizenship</label>
         </p>


         <p>
           <input type="checkbox" name="specialization" id="intellectual" value="intellectual property"  > 
           <label for="intellectual">Intellectual Property</label>
         </p>
       </div>
       <div class="input-field col s12">

         <p>
           <input type="checkbox" name="specialization" id="legal" value="legal system"  >
           <label for="legal"> Legal System</label>
         </p>


         <p>
           <input type="checkbox" name="specialization" id="media" value="media communications"  >
           <label for="media"> Media and Communications</label>
         </p>


         <p>
           <input type="checkbox" name="specialization" id="motor" value="motor vehicles traffic"  > 
           <label for="motor">Motor Vehicles and Traffic Offences</label>
         </p>

         <p>
           <input type="checkbox" name="specialization" id="neighbour" value="neighbour"  >
           <label for="neighbour"> Neighbours</label>
         </p>

         <p>
          <input type="checkbox" name="specialization" id="older" value="older"  > 
          <label for="older">Older Persons Law</label>
        </p>

        <p>
         <input type="checkbox" name="specialization" id="pension" value="pension allowances family assistance"  >
         <label for="pension">Pensions, Allowances and Family Assitance </label>
       </p>

       <p>
         <input type="checkbox" name="specialization" id="rural" value="rural law"  > 
         <label for="rural">Rural Law</label>
       </p>

       <p>  <input type="checkbox" name="specialization" id="wills" value="wills estates"  > 
        <label for="wills">Wills and Estates</label> </p>

        <br>
      </div>
      <div class="input-field col s6">
       <select class="browser-default" name ="clc" id = "clc">
         <option value="Redfern Legal Centre">Redfern Legal Centre</option>
         <option value="Women's Rights Centre">Women's Rights Centre</option>
         <option value="Immigration Centre">Immigration Centre</option>
         <option value="Refugee Rights Centre">Refugee Rights Centre</option>

       </select>
       <br> <br>
       Select file to upload:
       <input type="file" name="fileToUpload" id="fileToUpload">
       <br> <br>
       <input type="submit" value="Upload Image" name="submit">
     </div>   


   </div>



 </form>
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
      © 2017 Good Vibes All Rights Reserved.
      <a class="grey-text text-lighten-4 right" href="feedback.html"><strong>Give Feedback</strong></a>
    </div>
  </div>
</footer>

<!-- FOOTER ENDS HERE-->
</body>
</html>