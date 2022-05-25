<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="List all user data" />
	<?php require('header.inc');?>
</head>
<body class="Management">
	<!--Header start.-->
		<!-- Navigation bar and title-->
		<?php include('menu.inc'); ?>
	
	<h2> User Quiz Data Search </h2>
	<br/>

<form id="searchform" method="post" action="manage_display_query.php">
	<label for="datatype">View Scores</label>
	<select name="datatype" id="datatype">
		<option value="">--- Select Data Set ---</option>
		<option value="all">List all attempts</option>
		<option value="specificstudent">List a specific student</option>  <!-- search student id -->
		<option value="fullmarks">List all students who scored 100% on first attempt</option> <!-- id, first, last name-->
		<option value="fail">List all attempts who scored under 50% on second attempt</option>
		<option value="delete">Delete a student's attempts</option>
		<option value="change">Change a student's score</option><!-- given st id and attempt number (so display attempts then select attempt) -->
	</select>

	<p><label for="studentid">Enter Student ID</label>
	   <input type="text" id="studentid" name="studentid" size="5"></p>
	<p><label for="attemptid">Enter Attempt ID</label>	 			
	   <input type="text" id="attemptid" name="attemptid" size="5"></p> 		<!-- needs to be fixed -->
	<p><label for="newscore">Enter New Score</label>
	   <input type="text" id="newscore" name="newscore" size="5"></p>


	<p><input type="submit" value="Search"/></p>
</form>	
</body>
</html>