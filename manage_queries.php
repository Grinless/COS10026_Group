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
	//connect to the dataabse
	$host = "feenix-mariadb.swin.edu.au";
	$user = "s103951761";
	$pwd = "ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo"
	$sql_db = "s103951761_db";
	
	require_once ("settings.php"); 	//connection info

	$conn = @mysqli_connect($host,
			$user,
			$pwd,
			$db
		);
	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {
		// upon successful completion
		$sql_table = "Attempts";
		
		print_$datatype 
		
		}
			
		mysqli_close($conn);
	}
		
	
	if (isset($_POST['datatype'])) {
		print_data($_POST['datatype']);
	}

	function print_data($datatype) {
		if $datatype == "all"
			//echo "<p>$datatype</p>";
			
		if $datatype == "specificstudent"
		if $datatype == "fullmarks"
		if $datatype == "fail"
		if $datatype == "delete"
		if $datatype == "change"
	}
	
	
	function print_all {
		
		//set up the SQL command to query or add data into the table
		$query = "select Firstname, Lastname, StudentID, Date, Score, AttemptID FROM Attempts ORDER BY AttemptID";
		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
				."<th scope=\"col\">Make</th>\n "
				."<th scope=\"col\">Model</th>\n "
				."<th scope=\"col\">Price</th>\n "
				."</th>\n ";
				
				
			While ($row = mysqli_fetch_assoc($results)) {
				echo "<tr>\n ";
				echo "<td>",$row["make"],"</td>\n ";
				echo "<td>",$row["model"],"</td>\n ";
				echo "<td>",$row["price"],"</td>\n ";
				echo "</tr>\n ";
			}
			echo "</table>\n ";
			
			mysqli_free_result($results);
	}
?>
	

	
</body>
</html>
