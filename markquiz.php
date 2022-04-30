<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Quiz Marking</title>
        <meta charset="utf-8">
        <meta name="description" content="Quiz marking PHP">
    </head>
    <body>
        <?php
            function sanitiseString($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function validate_string($string, $min_length, $max_length){
                $id_length = strlen($string);

                if(is_null($string)){
                    return false; 
                }
                else if($id_length < $min_length || $id_length > $max_length){
                    return false; 
                }
                else {
                    return true;
                }
            }

            ///Returns string[] in order (y-m-d).
            function retrive_date($datetime){
                return explode("-", explode("T", $datetime)[0]);
            }

            ///Returns string[] in order (?-?-?)
            function retrive_time($datetime){
                return explode(":", explode("T", $datetime)[1]);
            }

            ///Validate the date exists and is well-formed.
            function validate_date($datetime){
                //Generate current date data. 
                $current_date =  date('Y-m-d H:i');
                $current_date_split = retrive_date($current_date); 

                //Split into date array. 
                $date_values = retrive_date($datetime);
                
                //Reference values. 
                $day = $date_values[2];
                $month = $date_values[1];
                $year = $date_values[0];

                //Check validity
                $validity = checkdate($day, $month, $year);

                //Check for null data && checkdate validity.
                if(is_null($day) || is_null($month) || is_null($year) || !$validity){
                    return false; 
                } 

                //Check limitations. 
                if($day == 0){
                    //The day has not been set. 
                    return false;
                }
                if($year < $current_date_split[0] || $year > $current_date_split[0]){ 
                    // passed year is less or greater than current year. 
                    return false;     
                }

                echo "<p> Current Date Valid: $current_date </p>";

                return true;
            }
        ?>

        <?php
            $firstname_valid = false; 
            $firstname_value = "";
            $lastname_valid = false; 
            $lastname_value = "";
            $studentid_valid = false; 
            $studentid_value = "";
            $datetime_value; 

            //Validate/sanitise student first name. 
            if(isset($_POST["firstname"])){
                $firstname_valid = validate_string($_POST["firstname"], 0, 30);
                if($firstname_valid)
                    $firstname_value = sanitiseString($_POST["firstname"]);
                    echo "<p> Student first name: $firstname_value"; 
            } else {
                echo "<p> Please fill out student first name field.";       
            }

            //Validate/sanitise student last name. 
            if(isset($_POST["lastname"])){
                $lastname_valid = validate_string($_POST["lastname"], 0, 30);
                if($lastname_valid)
                    $lastname_value = sanitiseString($_POST["lastname"]);
                    echo "<p> Student last name: $lastname_value"; 
            } else {
                echo "<p> Please fill out student last name field.";       
            }

            //Validate/sanitise student ID. 
            if(isset($_POST["studentid"])){
                $studentid_valid = validate_string($_POST["studentid"], 0, 30);
                if($studentid_valid)
                    $studentid_value = sanitiseString($_POST["studentid"]);
                    echo "<p> Student ID: $studentid_value"; 
            } else {
                echo "<p> Please fill out student number field.";       
            }

            if(isset($_POST["datetimesubmission"])){
                echo "<p> Date time set </p>";
                $datetime_value = $_POST["datetimesubmission"];
                $valid_date = validate_date($datetime_value);
                $time_values = retrive_time($datetime_value);
                echo "<p> Day: $datetime_value. </p>";

                if($valid_date == true){
                    echo "<p> Day Valid.</p>";
                } else if($valid_date == false){
                    echo "<p> Day Invalid.</p>";
                }

            }
        ?>
    </body>
</html>