<?php
   $db = mysqli_connect("localhost", "root", "", "pawwn");
   session_start();
   
   $user_check = $_SESSION['name'];
   
   $ses_sql = mysqli_query($db,"select email from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   
   if(!isset($_SESSION['login_user'])){
      //header("location:login.php");
   }
?>