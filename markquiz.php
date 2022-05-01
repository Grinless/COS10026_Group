<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Quiz Marking</title>
        <meta charset="utf-8">
        <meta name="description" content="Quiz marking PHP">
    </head>
    <body>
        <?php
            //Object Class responsible for managing form data. 
            class FormData{
                //Data from form. 
                public $firstname;
                public $lastname;
                public $studentid; 
                public $usecase; 
                public $acroselected;
                public $jasoncreator;
                public $jasonOO;
                public $datetime;

                //Validity states for form data input.
                public $firstname_valid = false;
                public $lastname_valid = false;
                public $studentid_valid = false; 
                public $usecase_valid = false; 
                public $acroselected_valid = false;
                public $jasoncreator_valid = false;
                public $jasonOO_valid = false; 
                public $datetime_valid = false; 
                
                //Grade calculations. 
                public $acroselected_grade = 0; 
                public $jasoncreator_grade = 0;
                public $jasonOO_grade = 0;
                public $raw_grade = 0; 
                public $final_grade; 

                //Construct the FormData object. 
                function __construct(){
                    //Validate/sanitise student first name. 
                    if(isset($_POST["firstname"])){
                        $this->firstname = $this->sanitiseString($_POST["firstname"]);
                        $check1 = $this->validate_string_bounded($this->firstname, 0, 30);
                        $check2 = $this->validateAlphaHyphen($this->firstname);
                        if($check1 && $check2){
                            $this->firstname_valid = true;  
                        }
                    }

                    //Validate/sanitise student last name. 
                    if(isset($_POST["lastname"])){
                        $this->lastname = $this->sanitiseString($_POST["lastname"]);
                        $check1 = $this->validate_string_bounded($this->lastname, 0, 30);
                        $check2 = $this->validateAlphaHyphen($this->lastname);
                        if($check1 && $check2){
                            $this->lastname_valid = true;  
                        }
                    } 

                    //Validate/sanitise student ID. 
                    if(isset($_POST["studentid"])){
                        $this->studentid = $this->sanitiseString($_POST["studentid"]);
                        $check1 = $this->validate_string_bounded($this->studentid, 7, 10);
                        $check2 = ctype_digit($this->studentid);
                        if($check1 && $check2){
                            $this->studentid_valid = true;             
                        }
                    } 

                    //Validate/sanitise use case. 
                    if(isset($_POST["jsonusecase"])){
                        $this->usecase = $this->sanitiseString($_POST["jsonusecase"]);
                        $this->usecase_valid = $this->validate_string($this->usecase);
                    } 

                    //Validate/sanitise acroselected.
                    if(isset($_POST["acroselected"])){
                        $this->acroselected = $this->sanitiseString($_POST["acroselected"]);
                        $this->acroselected_valid = $this->validate_string($this->acroselected);
                    } 

                    //Validate/sanitise jsoncreator. UPDATE THIS FURTHER.
                    if(isset($_POST["jsoncreator"])){
                        $this->jasoncreator = $this->sanitiseString($_POST["jsoncreator"]);
                        $this->jasoncreator_valid = $this->validate_string($this->jasoncreator);
                    } 

                    //Validate/sanitise jsonOO.
                    if(isset($_POST["jasonOO"])){
                        $this->jasonOO = $this->sanitiseString($_POST["jasonOO"]);
                        $this->jasonOO_valid = $this->validate_string($this->jasonOO);
                    }

                    //Validate/sanitise selected date. 
                    if(isset($_POST["datetimesubmission"])){
                        $this->datetime = $this->sanitiseString($_POST["datetimesubmission"]);
                        $this->datetime_valid = $this->validate_date($this->datetime);
                    } 
                }

                //Sanitise a string. 
                function sanitiseString($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                //Validate a string. 
                function validate_string($string){
                    if(is_null($string)){
                        return false; 
                    }
                    else {
                        return true;
                    }
                }

                //Validate a string with a min max length string. 
                function validate_string_bounded($string, $min_length, $max_length){
                    if(strlen($string) < $min_length){
                        echo "<p> Returned false: string less than min bounds. </p>";
                    }
                    else if(strlen($string) > $max_length){
                        echo "<p> Returned false: string greater than max bounds. </p>";
                    }
                    else if(is_null($string)){
                        echo "<p> Returned false: was null. </p>";
                    }
                    else {
                        return true;
                    }
                }

                function validateAlphaHyphen($data){
                    if(preg_match('^[a-zA-Z -]^', $data)){
                        return true; 
                    }
                    return false; 
                }

                ///Returns string[] in order (y-m-d).
                function retrive_date($datetime){
                    return explode("-", explode("T", $datetime)[0]);
                }
            
                ///Validate the date exists and is well-formed.
                function validate_date($datetime){
                    //Generate current date data. 
                    $current_date =  date('Y-m-d H:i');
                    $current_date_split = $this->retrive_date($current_date); 
                
                    //Split into date array. 
                    $date_values = $this->retrive_date($datetime);
                    
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

                //Get the form datas validity. 
                function check_form_validity(){
                    if($this->firstname_valid == false){
                        echo "<p> Please fill out student first name field.";  
                        return false;
                    }
                    else if($this->lastname_valid == false){
                        echo "<p> Please fill out student last name field.";
                        return false;
                    }
                    else if($this->studentid_valid == false){
                        echo "<p>Entered student number: $this->studentid</p>";
                        echo "<p> Please fill out student number field.";  
                        return false; 
                    }
                    else if($this->usecase_valid == false){
                        echo "<p> Please enter usecase string."; 
                        return false; 
                    }
                    else if($this->acroselected_valid == false){
                        echo "<p> Please enter acronymn selection."; 
                        return false; 
                    }
                    else if($this->jasoncreator_valid == false){
                        return false; 
                    }
                    else if($this->jasonOO_valid == false){
                        return false; 
                    }
                    else if($this->datetime_valid == false){
                        echo "<p> Day Invalid.</p>";
                        return false;
                    } else{
                        return true; 
                    }
                }

                //Calculate the raw grade. 
                function GetRawGrade(){
                    if($this->acroselected == "3"){
                        $this->acroselected_grade = 1; 
                    }

                    if($this->jasoncreator == "Chip Morningstar" 
                        || $this->jasoncreator == "Douglas Crockford"){
                            $this->jasoncreator_grade = 1; 
                    }    
    
                    if($this->jasonOO == "jasonOO1"){
                        $this->jasonOO_grade = 1; 
                    } 

                    $this->raw_grade = $this->acroselected_grade + $this->jasoncreator_grade + $this->jasonOO_grade;
                    return $this->raw_grade; 
                }

                //Calculate the final grade. 
                function GetFinalGrade(){
                    if($this->raw_grade == 1)
                        $this->final_grade = "33%";
                    else if($this->raw_grade == 2)
                        $this->final_grade = "66%";
                    else if($this->raw_grade == 3)
                        $this->final_grade = "100%";
                    else 
                        $this->final_grade = "0%";
                    return $this->final_grade; 
                }
            }
        ?>

        <?php
            $formdata = new FormData();
            $raw_grade;
            $final_grade;

            //If form is valid. 
            if($formdata->check_form_validity()){
                $raw_grade = $formdata->GetRawGrade();
                $final_grade = $formdata->GetFinalGrade();
                echo "<p> User Raw Grade: $raw_grade </p>";
                echo "<p> User Final Grade: $final_grade </p>"; 
            } else{
                echo "<p> Form data invalid. </p>";
            }
        ?>
    </body>
</html>