<?php
session_start();
?>
<?php 
date_default_timezone_set('Australia/Melbourne'); 
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "<p class='align-center'>Your last visit was - $visit </p>";
}
else
echo "You've got some stale cookies!"; 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Login page for manager functions"/>
	<?php
	require("header.inc");
	?>
</head>
<body class="Management">
	<!--Header start.-->
	<?php
	include("menu.inc");
	?>
	<h1>Admin Login</h1>
	<?php
	if (isset($_SESSION["attempts"])){
		echo "<p class=\"warning\"> Warning: login attempt failed, ".(3 - $_SESSION["$attempts"])." left</p>";
		echo "<form id=\"loginform\" method=\"post\" action=\"login.php?PHPSESSID=".session_id(); echo "\">";
	}else{
		echo "<form id=\"loginform\" method=\"post\" action=\"login.php\">";
	}
	?>
	<fieldset id="LoginID">
		<legend>Login:</legend>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" required="required"/><br>
			<label for="password">Password</label>
			<input type="text" name="password" id="password" required="required"/><br>
	</fieldset>
	
	<input class="submit" type="submit" value="Login" />
	
	</form>
	<footer>
		<?php
		include("footer.inc");
		?>
	</footer>
</body>
</html>
