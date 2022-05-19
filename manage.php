<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="List all user data" />
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
		echo "<form id=\"loginform\" method=\"post\" action=\"login.php?".session_id(); echo "\">";
	}else{
		echo "<form id=\"loginform\" method=\"post\" action=\"login.php\">";
	}
	?>
	<!--
Above php replaces the following code, HAS NOT BEEN TESTED YET
<form id="loginform" method="post" action="manage_queries.php">
-->
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
