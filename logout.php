<?php
session_start();
session_unset();
session_destroy();
header("location: https://mercury.swin.edu.au/cos10026/s103993239/assign3/index.php");
?>
