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
	
	<h2> User Quiz Data Results </h2>


<?php
	if (isset($_POST['datatype'])) {
		$datatype = ($_POST['datatype']);
	}
	if (isset($_POST['studentid'])) {
		$_STUDENTID = ($_POST['studentid']);
	}
	if (isset($_POST['attemptid'])) {
		$_ATTEMPT = ($_POST['attemptid']);
	}
	if (isset($_POST['newscore'])) {
		$_NEWSCORE = ($_POST['newscore']);
	}
	if (isset($_POST['studentname'])) {
		$_STUDENTNAME = ($_POST['studentname']);
	}
		

	if ($datatype == "blank") {
		echo "<p>Error: Please select a field in the <a href=\"manage_form.php\">form</a></p>";
	}

	if ($datatype == "all") {
		print_all();
	}
	if ($datatype == "specificstudent") { 
		if ($_STUDENTNAME != "" and $_STUDENTNAME != "") {
			echo "<p>Error: Please fill in student name or id information into the <a href=\"manage_form.php\">form</a></p>";
		} else {
			if ($_STUDENTID == "") {
				if ($_STUDENTNAME == "") {
					echo "<p>Error: Please fill in student name or id information into the <a href=\"manage_form.php\">form</a></p>";
				} else {
					print_specificstudentname($_STUDENTNAME);
				}	
			} else {
				print_specificstudentid($_STUDENTID);
			}
		}
	} 
	if ($datatype == "fullmarks") { 
		print_fullmarks();
	} 
	if ($datatype == "fail") { 
		print_fail();
	} 
	if ($datatype == "delete") { 
		if ($_ATTEMPT != "") {
			print_delete($_ATTEMPT);
		} else {
			echo "<p>Error: Please fill in attempt id information into the <a href=\"manage_form.php\">form</a></p>";
		}

		
	} 
	if ($datatype == "change") { 
		if ($_ATTEMPT != "" and $_NEWSCORE != "") {
			print_change($_ATTEMPT, $_NEWSCORE);
		} else {
			echo "<p>Error: Please fill in attempt id and new score information into the <a href=\"manage_form.php\">form</a></p>";
		}
	} 

	
	




function print_all() {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info

	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts ORDER BY attempt_id";
		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<p>All student scores</p>";

			echo "<table>\n";
			echo "<tr>\n "
				."<th scope=\"col\">attempt_id</th>\n "
				."<th scope=\"col\">attempt_number</th>\n "
				."<th scope=\"col\">first_name</th>\n "
				."<th scope=\"col\">last_Name</th>\n "
				."<th scope=\"col\">student_id</th>\n "
				."<th scope=\"col\">score</th>\n "
				."<th scope=\"col\">date_time</th>\n ";
				
				
			While ($row = mysqli_fetch_assoc($results)) {
				echo "<tr>\n ";
				echo "<td>",$row["attempt_id"],"</td>\n ";
				echo "<td>",$row["attempt_number"],"</td>\n ";
				echo "<td>",$row["first_name"],"</td>\n ";
				echo "<td>",$row["last_Name"],"</td>\n ";
				echo "<td>",$row["student_id"],"</td>\n ";
				echo "<td>",$row["score"],"</td>\n ";
				echo "<td>",$row["date_time"],"</td>\n ";
				echo "</tr>\n ";
			}
			echo "</table>\n ";
			mysqli_free_result($results);
		}
		mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php
	}
	
}


Function print_specificstudentname($_STUDENTNAME) {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE first_name like '$_STUDENTNAME%'";

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<p>Specific student scores</p>";

			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table>\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n ";
				
				
				While ($row = mysqli_fetch_assoc($results)) {
					echo "<tr>\n ";
					echo "<td>",$row["attempt_id"],"</td>\n ";
					echo "<td>",$row["attempt_number"],"</td>\n ";
					echo "<td>",$row["first_name"],"</td>\n ";
					echo "<td>",$row["last_Name"],"</td>\n ";
					echo "<td>",$row["student_id"],"</td>\n ";
					echo "<td>",$row["score"],"</td>\n ";
					echo "<td>",$row["date_time"],"</td>\n ";
					echo "</tr>\n ";
				}
				echo "</table>\n ";
				
				mysqli_free_result($results);
			//}
		}	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php


}


Function print_specificstudentid($_STUDENTID) {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE student_id like '$_STUDENTID%'";

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<p>Specific student scores</p>";

			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table>\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n ";
				
				
				While ($row = mysqli_fetch_assoc($results)) {
					echo "<tr>\n ";
					echo "<td>",$row["attempt_id"],"</td>\n ";
					echo "<td>",$row["attempt_number"],"</td>\n ";
					echo "<td>",$row["first_name"],"</td>\n ";
					echo "<td>",$row["last_Name"],"</td>\n ";
					echo "<td>",$row["student_id"],"</td>\n ";
					echo "<td>",$row["score"],"</td>\n ";
					echo "<td>",$row["date_time"],"</td>\n ";
					echo "</tr>\n ";
				}
				echo "</table>\n ";
				
				mysqli_free_result($results);
			//}
		}	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php


}

Function print_fullmarks() {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE Attempt_id = 1 and score = 100";			

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<p>All students who scored 100% on their first attempt</p>";

			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table>\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n ";
				
				
				While ($row = mysqli_fetch_assoc($results)) {
					echo "<tr>\n ";
					echo "<td>",$row["attempt_id"],"</td>\n ";
					echo "<td>",$row["attempt_number"],"</td>\n ";
					echo "<td>",$row["first_name"],"</td>\n ";
					echo "<td>",$row["last_Name"],"</td>\n ";
					echo "<td>",$row["student_id"],"</td>\n ";
					echo "<td>",$row["score"],"</td>\n ";
					echo "<td>",$row["date_time"],"</td>\n ";
					echo "</tr>\n ";
				}
				echo "</table>\n ";
				
				mysqli_free_result($results);
			//}
		}	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php


}

Function print_fail() {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {
		echo "<p>All students who scored under 50% on their second attempt</p>";

		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE attempt_number = 2 and score <= 50";

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table>\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n ";
				
				
				While ($row = mysqli_fetch_assoc($results)) {
					echo "<tr>\n ";
					echo "<td>",$row["attempt_id"],"</td>\n ";
					echo "<td>",$row["attempt_number"],"</td>\n ";
					echo "<td>",$row["first_name"],"</td>\n ";
					echo "<td>",$row["last_Name"],"</td>\n ";
					echo "<td>",$row["student_id"],"</td>\n ";
					echo "<td>",$row["score"],"</td>\n ";
					echo "<td>",$row["date_time"],"</td>\n ";
					echo "</tr>\n ";
				}
				echo "</table>\n ";
				
				mysqli_free_result($results);
			//}
		}	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php
}


function print_delete($_ATTEMPT) {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {
		//set up the SQL command to query or add data into the table
		$query = "DELETE FROM attempts WHERE attempt_id = $_ATTEMPT";


		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Error updating record</p>";
		} else {			
			echo "<p>Record updated successfully</p>";

		}
													///Add a attempt deleted msg	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php
}



function print_change($_ATTEMPT, $_NEWSCORE) {
	//connect to the dataabse	
	require ("settings.php"); 	//connection info
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);


	//checks of connection is successful
	// Check connection
	if (!$conn) {
		//displays an error message
		echo "<p>Database connection failure</p>";
	} else {

		$query = "UPDATE attempts SET score=$_NEWSCORE WHERE attempt_id=$_ATTEMPT";
	
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Error updating record</p>";
		} else {			
			echo "<p>Record updated successfully</p>";

		}	
	}
	mysqli_close($conn);
	?>
		<a href="manage_form.php">
   		  Return
   		</a>
	<?php
}
?>
</body>
</html>
