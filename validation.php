<?php function sanitiseString($data){
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
?>
