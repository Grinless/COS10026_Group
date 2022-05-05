<!DOCTYPE html>
<htmsl lang="en">
<head>
	<meta name="description" content="List all user data" />
	<?php
	require("header.inc")
	?>
</head>
<body class="Management">
	<!--Header start.-->
	<?php
	include("menu.inc")
	?>
	<h1>Admin Login</h1>
	
	<form id="loginform" method="post" action="manage_queries.php">
		

	<fieldset id="LoginID">
		<legend>Login:</legend>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" /><br />
			<label for="password">Password</label>
			<input type="text" name="password" id="password" /><br />
	</fieldset>
	
	<input class="submit" type="submit" value="Login" />
	
	
<?php  // this will only action at the start of the form 
	if username = "JsonNotFound" and password = "1234"
		a = "manage_queries.php"
	else
		echo"<p>Please enter correct username and password</p>"
?>
	</form>
	<footer>
		<?php
		include("footer.inc")
		?>
	</footer>
</body>
</html>
