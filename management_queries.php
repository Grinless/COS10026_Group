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
	
	<h1> User Quiz Data </h1>
	
	<input type="submit" value="List all attempts" />
	<input type="submit" value="List specific student attemps" /> <!-- -->
	<input type="submit" value="List all students who scored 100% on first attempt" /> <!-- id, first, last name-->
	<input type="submit" value="List all attempts who scored <50% on second attempt" />
	<input type="submit" value="Delete a student's attemps" />	
	<input type="submit" value="Change a student's score" /> <!-- given st id and attempt number (so display attempts then select attempt) -->
	List all attempts.  
	List all attempts for a particular student (given a student id OR name). 
	List all students (id, first and last name) who got 100% on their first attempt. 
	List all students (id, first and last name) got less than 50% on their second attempt. 
	Delete all attempts for a particular student (given a student id). 
	Change the score for a quiz attempt (given a student id and attempt number). 
	
</body>
</html>