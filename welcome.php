<?php
	
	session_start();
?> 

<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>