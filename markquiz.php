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
        ?>

        <?php
            $firstname_valid = false; 
            $firstname_value = "";
            $lastname_valid = false; 
            $lastname_value = "";
            $studentid_valid = false; 
            $studentid_value = "";

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

        ?>
    </body>
</html>