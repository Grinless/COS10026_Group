<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="List all user data" />
    <?php require('header.inc');?>
  </head>
  <body>
	<!--Header start.-->
		<!-- Navigation bar and title-->
		<?php include('menu.inc');
    include('validation.php');
    if isset($_POST["username"]) and isset($_POST["password"]){
    if isset($_SESSION["username"]) and isset($_SESSION["password"]){
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];
      if check_login($_SESSION["username"], $_SESSION["password"]){
      
      }
    }else{
      session_start();
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];
      if check_login($_SESSION["username"], $_SESSION["password"]){
    
      }
    }
    }else{
      
    }
    
    function check_login($username, $password){
    if $username == "JsonNotFound" and $password == "1234"{
    return true;
    }else{
    return false;
    }
    }
    
    ?>
    <p>If you are seeing this page, an error has ocurred, click <a href="manage.php">here</a> to return to the login screen</p>
  </body>
</html>
