<!DOCTYPE html>
<htmsl lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="List all user data" />
	<meta name="keyword" content="HTML, CSS, JavaScrippt" />
	<meta name="author" content="Error 404 JSON not found" />
	<title> Management </title>
	<link rel="stylesheet" href="2.css"/>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body class="Management">
	<!--Header start.-->
	<header>
		<!-- Navigation bar and title-->
		<h1> {JSON} </h1>
		<figure>
			<a href="https://json.org"> <img class="logo" src="images/JSON_logo.png" alt="JSON logo"> </a>
			<figcaption class="logo">Click to go to json.org</figcaption>
		</figure>
		<nav>
			<a href="index.html">Home</a>|
			<a href="topic.html">More info</a>|
			<a href="quiz.html">Quiz</a>|
			<a href="enhancements.html">Enhancements</a>|
			<a href="Management.php">Management Login</a>
		</nav>
	</header>
	
	<h1>Admin Login</h1>
	
	<form id="loginform" method="post" action={
		
	}
	
	>
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
</body>
</html>