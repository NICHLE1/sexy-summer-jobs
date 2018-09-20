<!-- 
    Name: Leighton Nicholls
    Assignment: Assignment 3 (Project)
    Date: started 10th October 2017, finished 15th November 2017

    Credits: 
            
    Comments: This is the file which creates the tables for the database which will be used by many other pages
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

    try
    {
        $dropQuery="DROP TABLE IF EXISTS Staff";
        $pdo->exec($dropQuery);

        // this query attempts to create the Staff table
        $createQuery = "CREATE TABLE Staff
        (
            /* Fields are created in here */
            staffID     INT(10) NOT NULL AUTO_INCREMENT, /* Will auto-increment each time a value is assigned to a record */
            firstName   VARCHAR(100) NOT NULL,
            lastName        VARCHAR(100) NOT NULL,
            username        VARCHAR(100) NOT NULL,
            password        VARCHAR(100) NOT NULL,

            /* This assigns the primary key to be the StaffID integer variable */
            PRIMARY KEY(staffID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the Staff table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }
    

    // This is part of a try/catch statement. Basically the try part will attempt to execute whatever code is inside
    // If that does not work, the code's executer will move onto the catch statement
    try
    {
        $dropQuery="DROP TABLE IF EXISTS Student";
        $pdo->exec($dropQuery);

        // this query attempts to create the Student table
        $createQuery = "CREATE TABLE Student
        (
            /* Fields are created in here */
            studentID           INT(10) NOT NULL, 
            firstName           VARCHAR(100) NOT NULL,
            lastName            VARCHAR(100) NOT NULL,
            displayName         VARCHAR(100) NOT NULL,

            /* This assigns the primary key to be the studentID integer variable */
            PRIMARY KEY(studentID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the Student table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }


    try
    {
        $dropQuery="DROP TABLE IF EXISTS LabDetails";
        $pdo->exec($dropQuery);

        // this query attempts to create the LabDetails table
        $createQuery = "CREATE TABLE LabDetails
        (
            /* Fields are created in here */
            labNumber       INT(10) NOT NULL,
            tutorPassword   VARCHAR(100) NOT NULL,

            /* This assigns the primary key to be the labNumber integer variable */
            PRIMARY KEY(labNumber)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the LabDetails table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }


    try
    {
        $dropQuery="DROP TABLE IF EXISTS SubmittedLabs";
        $pdo->exec($dropQuery);

        // this query attempts to create the SubmittedLabs table
        $createQuery = "CREATE TABLE SubmittedLabs
        (
            /* Fields are created in here */
            studentID       INT(10) NOT NULL,
            labNumber       INT(10) NOT NULL,
            toolID          INT(10) NOT NULL,
            responseTime    TIMESTAMP NOT NULL,
            xValue          INT(10) NOT NULL,
            yValue          INT(10) NOT NULL,

            /* This assigns the primary key to be the several fields */
            PRIMARY KEY(studentID, labNumber, toolID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the SubmittedLabs table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }



    try
    {
        $dropQuery="DROP TABLE IF EXISTS Completion";
        $pdo->exec($dropQuery);

        // this query attempts to create the Completion table
        $createQuery = "CREATE TABLE Completion
        (
            /* Fields are created in here */
            studentID       INT(10) NOT NULL,
            labID           INT(10) NOT NULL,
            responseTime    DATETIME NOT NULL,
          

            /* This assigns the primary key to be the studentID and labID integer variables */
            PRIMARY KEY(studentID, labID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the Completion table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }

?>