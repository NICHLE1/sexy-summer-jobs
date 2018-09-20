<!-- 
    This file is used to clean the input off text inputs to help prevent scripts etc being run inside of them. 
    The function will be used by different controllers, apart from the staff access control controller
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