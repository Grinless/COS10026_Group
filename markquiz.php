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

            function validate_string($string){
                $id_length = strlen($string);

                if(is_null($string)){
                    return false; 
                }
                else {
                    return true;
                }
            }

            function validate_string_bounded($string, $min_length, $max_length){
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

                return true;
            }

            function form_validation(){
                $firstname_value;
                $lastname_value;
                $studentid_value;
                $usecase_value; 
                $acroselected_value; 
                $datetime_value;
                $jasonCreator_value;
                $firstname_valid = false; 
                $lastname_valid = false; 
                $studentid_valid = false;
                $usecase_valid = false;
                $acroselected_valid = false;  
                $datetime_valid = false; 
                $jasonCreator_valid = false; 

                //Validate/sanitise student first name. 
                if(isset($_POST["firstname"])){
                    $firstname_valid = validate_string_bounded($_POST["firstname"], 0, 30);
                    if($firstname_valid)
                        $firstname_value = sanitiseString($_POST["firstname"]); 
                } else {
                    echo "<p> Please fill out student first name field.";    
                    return false;    
                }

                //Validate/sanitise student last name. 
                if(isset($_POST["lastname"])){
                    $lastname_valid = validate_string_bounded($_POST["lastname"], 0, 30);
                    if($lastname_valid)
                        $lastname_value = sanitiseString($_POST["lastname"]);
                } else {
                    echo "<p> Please fill out student last name field.";
                    return false;        
                }

                //Validate/sanitise student ID. 
                if(isset($_POST["studentid"])){
                    $studentid_valid = validate_string_bounded($_POST["studentid"], 0, 30);
                    if($studentid_valid){
                        $studentid_value = sanitiseString($_POST["studentid"]);
                    } else{
                        echo "<p> Please enter valid string.</p>";    
                    }
                
                } else {
                    echo "<p> Please fill out student number field.";  
                    return false;      
                }

                //Validate/sanitise use case. 
                if(isset($_POST["jsonusecase"])){
                    $usecase_valid = validate_string($_POST["jsonusecase"]);
                    if($usecase_valid){
                        $usecase_value = sanitiseString($_POST["jsonusecase"]);
                    } else{
                        echo "<p> Please enter valid usecase string.</p>"; 
                    }
                } else{
                    echo "<p> Please enter usecase string."; 
                    return false;
                }

                //Validate/sanitise acroselected.
                if(isset($_POST["acroselected"])){
                    $acroselected_value = $_POST["acroselected"];
                } else{
                    echo "<p> Please enter acronymn selection."; 
                    return false; 
                }

                //Validate/sanitise jsoncreator. UPDATE THIS FURTHER.
                if(isset($_POST["jsoncreator"])){
                    $jasonCreator_value = sanitiseString($_POST["jsoncreator"]);
                } else{ 
                    return false; 
                }

                //Validate/sanitise jsonOO.
                //Validate/sanitise selected date. 
                if(isset($_POST["datetimesubmission"])){
                    $datetime_value = $_POST["datetimesubmission"];
                    $datetime_valid = validate_date($datetime_value);

                    if(!$datetime_valid){
                        echo "<p> Day Invalid.</p>";
                        return false;
                    } 
                } else{
                    return false; 
                }

                return true;
            }
        ?>

        <?php
            $form_valid = form_validation();

            if($form_valid){
                echo "<p> Form data valid. </p>";
            } else{
                echo "<p> Form data invalid. </p>";
            }
        ?>
    </body>
</html>