<!DOCTYPE html>
<htmsl lang="en">
<head>
	<meta name="description" content="List all user data" />
	<?php require('header.inc')?>
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
	<br/>

<form id="regform" method="post" onsubmit="return function Display(datatype)">
	<label for="datatype">View Scores</label>
	<select name="datatype" id="datatype">
		<option value="">--- Select Data Set ---</option>
		<option value="all">List all attempts</option>
		<option value="specificstudent">List a specific student</option>  <!-- search student id -->
		<option value="fullmarks">List all students who scored 100% on first attempt</option> <!-- id, first, last name-->
		<option value="fail">List all attempts who scored under 50% on second attempt</option>
		<option value="delete">Delete a student's attemps</option>
		<option value="change">Change a student's score</option><!-- given st id and attempt number (so display attempts then select attempt) -->
	</select>

	<p><input type="submit" value="Search"/></p>
</form>

<?php
	if (isset($_POST['datatype'])) {
		print_data($_POST['datatype']);
	}

	function print_data($datatype) {
		echo "<p>$datatype</p>";
	}
?>
	

	
</body>
</html>
