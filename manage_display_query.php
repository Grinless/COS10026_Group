<?php
	if (isset($_POST['datatype'])) {
		$datatype = ($_POST['datatype']);
	}
	if (isset($_POST['data'])) {
		$_DATA = ($_POST['studentid']);
	}
	if (isset($_POST['data'])) {
		$_ATTEMPT = ($_POST['attemptid']);
	}
	if (isset($_POST['data'])) {
		$_NEWSCORE = ($_POST['newscore']);
	}


echo "<p>$_DATA</p>";

		
	if ($datatype == "all") {
		print_all();
	}
	if ($datatype == "specificstudent") { 
		print_specificstudent($_DATA);
	} 
	if ($datatype == "fullmarks") { 
		print_fullmarks();
	} 
	if ($datatype == "fail") { 
		print_fail();
	} 
	if ($datatype == "delete") { 
		print_delete($_ATTEMPT);
	} 
	if ($datatype == "change") { 
		print_change($_ATTEMPT, $_NEWSCORE);
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
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
				."<th scope=\"col\">attempt_id</th>\n "
				."<th scope=\"col\">attempt_number</th>\n "
				."<th scope=\"col\">first_name</th>\n "
				."<th scope=\"col\">last_Name</th>\n "
				."<th scope=\"col\">student_id</th>\n "
				."<th scope=\"col\">score</th>\n "
				."<th scope=\"col\">date_time</th>\n "

				."</th>\n ";
				
				
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
	}
	
}

Function print_specificstudent($_DATA) {
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
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE student_id like '$_DATA%'";

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table border=\"1\">\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n "

					."</th>\n ";
				
				
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
			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table border=\"1\">\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n "

					."</th>\n ";
				
				
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


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE Attempt_id = 2 and score <= 50";

		
		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			//if (mysqli_fetch_assoc($results)["attempt_id"] == "") {
			//	echo "<p class=\"blank\">There are no results</p>";     			////Need to fix db no result
			//} else {

				echo "<table border=\"1\">\n";
					echo "<tr>\n "
					."<th scope=\"col\">attempt_id</th>\n "
					."<th scope=\"col\">attempt_number</th>\n "
					."<th scope=\"col\">first_name</th>\n "
					."<th scope=\"col\">last_Name</th>\n "
					."<th scope=\"col\">student_id</th>\n "
					."<th scope=\"col\">score</th>\n "
					."<th scope=\"col\">date_time</th>\n "

					."</th>\n ";
				
				
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


		// upon successful completion
		$sql_table = "attempts";
		
		//set up the SQL command to query or add data into the table
		$query = "DELETE FROM attempts WHERE attempt_id = $_ATTEMPT";

													///Add a attempt deleted msg	
	}
	mysqli_close($conn);
}



function print_change($_ATTEMPT, $_NEWSCORE) {
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
		

		//fetch table data
		$query = "SELECT attempt_id, attempt_number, first_name, last_Name, student_id, score, date_time FROM attempts WHERE Attempt_id = $_ATTEMPT";

		$results = mysqli_query($conn, $query);
		
		if(!$results) {
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			//update score
			UPDATE $sql_table 
			SET score = $_NEWSCORE 
			WHERE attempt_id = $_ATTEMPT;
		}
													///Add a attempt updated msg	
	}
	mysqli_close($conn);

}


?>