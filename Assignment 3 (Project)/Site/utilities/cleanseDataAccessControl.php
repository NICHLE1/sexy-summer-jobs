<!-- 
    This file is used to clean the input off text inputs to help prevent scripts etc being run inside of them. The function will only be used by the staff access control controller.
    I have it as a separate file as it is is annoying with all the includes of the access control to only have one cleanseData file. 
-->

<?php
    function clean_input_access_control($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }
?>