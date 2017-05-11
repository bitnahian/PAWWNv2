<?php
$db = mysqli_connect("localhost", "root", "", "pawwn"); // Establishing connection with server..

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      //$myusername = mysqli_real_escape_string($db,$_POST['username']);
      //$mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $password= sha1($_POST['password']);
      $email= $_POST['email'];

      //$result = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password = '$password");
      
      //$count = mysqli_num_rows($result);

      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);

      if(!$row = mysqli_fetch_assoc($result))
      {
      	echo "Email or password was incorrect!";

            //header("location: login.html");
      }
      else
      {
      	$error = "";
      	//$_SESSION['id'] = $row['id'];
      	//$_SESSION['name'] = $row['name'];

      	//session_register("email");
         $_SESSION['name'] = $row['name'];
         
         header("location: index.php");
      	//echo "You have successfully logged in!";

      }


      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      //if($count == 1) {
      //   session_register("$email");
      //   $_SESSION['login_user'] = $email;
         
      //   header("location: welcome.php");
      //}else {
      //   $error = "Your Login Name or Password is invalid";
      }
?>