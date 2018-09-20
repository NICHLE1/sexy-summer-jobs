<!--
    This file is used to insert data which contains passwords into the database by calling functions from the createPasswords.php file.
     Changing the tutor password: There is a function contained in this document which supplements the salting and encrypting of tutor passwords, where variables are passed in. 
                                  In the insertPasswords.php file it is passing in the parameters required. The code is explained within
                                  the block of code itself, but there is a certain algorithm to it which can be changed easily to another format.
-->

<?php
    include 'connect.inc.php';

    // Establish connection to the database
    try
    {
        $pdo = new PDO("mysql:host=$host;dbname=$database", $userMS, $passwordMS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Connection to database failed';
        include 'error.html.php';
        exit();
    }

    include 'createPasswords.php';

    $labNumbers = array(1,2,4,6,8,10,11,17,19,20,23);     // declares an array of all the lab numbers, can be easily changed by manipulating the values
    $labNumbersArrayLength = count($labNumbers); 

    for($i = 0; $i < $labNumbersArrayLength; $i++)
    {
        $tutorPassword = ($labNumbers[$i] + 3) * 2; // assigns a new variable named tutorPassword a lab number and the formula
        insertTutorPassword($labNumbers[$i], $tutorPassword, $pdo); // calls the function and passes the information in
    }

    insertStaffUsernamePassword("Dale", "Parsons", "dale", "minttimtams", $pdo);

?>