<!-- 
    This file is used to clean the input off text inputs to help prevent scripts etc being run inside of them. The function will be used by different controllers
    including searchAthleteController.php, addTeamController.php and addAthleteController.php
-->

<?php
    function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }
?>