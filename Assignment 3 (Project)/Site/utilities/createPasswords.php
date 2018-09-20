<!--
    Passwords: This file is used for creating passwords for both the Staff and LabDetails tables. 
    Functions are called, inserting parameter variables into them and the functions insert the data themselves.

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
  
    function insertTutorPassword($labNumberInput, $tutorPasswordInput, $pdo)
    {
        // salt

        // A higher "cost" is more secure but consumes more processing power
        $cost = 10;

        // Create a random salt
        //$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        $salt = strtr(base64_encode(random_bytes(16)), '+', '.');

        // Prefix information about the hash so PHP knows how to verify it later.
        // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
        $salt = sprintf("$2a$%02d$", $cost) . $salt;
        //echo ("$salt <br>");

        // crypt

        // Hash the password with the salt

        $hash = crypt($tutorPasswordInput, $salt);
        //echo ("$hash <br>");

        // insert

        //return $hash;

        $insertQuery = "INSERT INTO LabDetails (labNumber, tutorPassword) VALUES (:labNumber, :tutorPassword)";
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':labNumber',$labNumber);
        $stmt->bindParam(':tutorPassword',$tutorPassword);

        $labNumber=$labNumberInput;
        $tutorPassword=$hash;

        $stmt->execute();
    }

    
    function insertStaffUsernamePassword($firstNameInput, $lastNameInput, $usernameInput, $passwordInput, $pdo)
    {
        // salt

        // A higher "cost" is more secure but consumes more processing power
        $cost = 10;

        // Create a random salt
        //$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        $salt = strtr(base64_encode(random_bytes(16)), '+', '.');

        // Prefix information about the hash so PHP knows how to verify it later.
        // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
        $salt = sprintf("$2a$%02d$", $cost) . $salt;
        //echo ("$salt <br>");

        // crypt

        // Hash the password with the salt

        $hash = crypt($passwordInput, $salt);
        //echo ("$hash <br>");

        // insert

        $insertQuery = "INSERT INTO Staff (firstName, lastName, username, password) VALUES (:firstName, :lastName, :username, :password)";
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);

        $firstName=$firstNameInput;
        $lastName=$lastNameInput;
        $username=$usernameInput;
        $password=$hash;

        $stmt->execute();
    }
?>