<?php
session_start();
$_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="List all user data" />
    <?php require('header.inc');?>
  </head>
  <body>
	  <?php 
	  include('menu.inc');
	  require('validation.php');
	  $username = $_POST["username"];
	  $password = $_POST["password"];
	  $username = sanitiseString($username);
	  $password = sanitiseString($password);
	  if ($_SESSION["attempts"] == 3){
		  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage.php?PHPSESSID=".session_id());
		  exit;
	  }
	  if ((validate_string($username)) and (validate_string($password))){
		  if ((isset($_SESSION["username"])) and (isset($_SESSION["password"]))){
			  $_SESSION["username"] = $_POST["username"];
			  $_SESSION["password"] = $_POST["password"];
			  if (check_login($_SESSION["username"], $_SESSION["password"])){
				  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage_queries.php?PHPSESSID=".session_id());
				  $_SESSION["attempts"] = 0;
			  }else{
				  $_SESSION["attempts"] += 1;
				  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage.php?PHPSESSID=".session_id());
			  }
		  }else{
			  $_SESSION["username"] = $username;
			  $_SESSION["password"] = $password;
			  if (check_login($_SESSION["username"], $_SESSION["password"])){
				  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage_queries.php?PHPSESSID=".session_id());
				  $_SESSION["attempts"] = 0;
			  }else{
				  $_SESSION["attempts"] = 1;
				  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage.php?PHPSESSID=".session_id());
			  }
		  }
	  }else{
		  header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/manage.php");
	  }
	  function check_login($username, $password){
		  if (($username == "JsonNotFound") and ($password == "1234")){
			  return true;
		  }else{
			  return false;
		  }
	  }
    ?>
    <p>If you are seeing this page, an error has ocurred, click <a href="manage.php">here</a> to return to the login screen</p>
  </body>
</html>
