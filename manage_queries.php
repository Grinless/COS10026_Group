<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="List all user data" />
	<?php require('header.inc')?>
</head>
<body class="Management">
	<!--Header start.-->
		<!-- Navigation bar and title-->
		<?php include('menu.inc') ?>
	
	<h2> User Quiz Data </h2>
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
