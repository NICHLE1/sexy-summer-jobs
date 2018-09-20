<!--
    This files purpose is to insert data into various tables of the database. It currently inserts data only into the Student table. Several other try/catches have been commented out for future use.
    It has no controller associated with it.
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
        include '../Other/error.html.php';
        exit();
    }

    //include 'createPasswords.php';
    
/*    try
    {
        // inserts data using prepared statements. This helps prevent SQL injection attacks on the database
        $insertQuery ="INSERT into Staff(firstName, lastName, userName) VALUES(:firstName, :lastName, :username)";
        $stmt =$pdo->prepare($insertQuery);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':username',$username);
        //$stmt->bindParam(':password',$password);
    }

    catch (PDOException $e)
    {
        $error = 'Inserting data failed for the Staff table';
        include 'error.html.php';
        exit();
    }
    // Creates a new variable and assigns it to open up the Sailors.csv file. This will be used to read in data from the file
    $staffFile = fopen("data/staff.csv", "r");

    // This while loop is intended to run until it can find no more data in the Sailors.csv file. Another way to check that there is no more data  
    // would be to use the feof function but it does not appear to be necessary
    while(($staffData = fgetcsv($staffFile)) !== FALSE)
    {
        // assigns variables from the Sailors table fields to contain whatever is in the $sailorsData variable. 
        // The square brackets are used to identify which column to take the data from in the file
        $firstName=$staffData[0];
        $lastName=$staffData[1];
        $username=$staffData[2];
        //$password=$staffData[3];

        $stmt->execute();

        // The code below can be useful for helping find out where something has gone wrong when reading the file, so I have left it here commented out
        //print_r($data);
        //echo $data[0];
    }

    // This closes down the file and lets the code know that we don't need to use it for now anymore. This helps save memory space
    fclose($staffFile);*/

    try
    {
        // inserts data using prepared statements. This helps prevent SQL injection attacks on the database
        $insertQuery ="INSERT INTO Student(studentID, firstName, lastName, displayName) VALUES(:studentID, :firstName, :lastName, :displayName)";
        $stmt =$pdo->prepare($insertQuery);
        $stmt->bindParam(':studentID',$studentID);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':displayName',$displayName);
    }

    catch (PDOException $e)
    {
        $error = 'Inserting data failed for the Student table';
        include 'error.html.php';
        exit();
    }
    // Creates a new variable and assigns it to open up the Sailors.csv file. This will be used to read in data from the file
    $studentFile = fopen("../assets/data/students.csv", "r");

    // This while loop is intended to run until it can find no more data in the Sailors.csv file. Another way to check that there is no more data  
    // would be to use the feof function but it does not appear to be necessary
    while(($studentData = fgetcsv($studentFile)) !== FALSE)
    {
        // assigns variables from the Sailors table fields to contain whatever is in the $sailorsData variable. 
        // The square brackets are used to identify which column to take the data from in the file
        //$studentID=$studentData[0];
        //$insertStudentIDOutput = insertStudentID(1111, $pdo);
        //$hashedStudentID = insertStudentID($studentData[0], $pdo);
        //echo $hashedStudentID
        $studentID=$studentData[0];
        //$studentID=$studentData[0];
        //$studentID=$insertStudentIDOutput;
        $lastName=$studentData[1];
        $firstName=$studentData[2];
        $displayName=$studentData[3];

        $stmt->execute();

        // The code below can be useful for helping find out where something has gone wrong when reading the file, so I have left it here commented out
        //print_r($data);
        //echo $data[0];
    }

    // This closes down the file and lets the code know that we don't need to use it for now anymore. This helps save memory space
    fclose($studentFile);



   /* try
    {
        // inserts data using prepared statements. This helps prevent SQL injection attacks on the database
        $insertQuery ="INSERT into LabDetails(labNumber, tutorPassword, handedOutDate, dueDate, description) VALUES(:labNumber, :tutorPassword, :handedOutDate, :dueDate, :description)";
        $stmt =$pdo->prepare($insertQuery);
        $stmt->bindParam(':labNumber',$labNumber);
        $stmt->bindParam(':tutorPassword',$tutorPassword);
        $stmt->bindParam(':handedOutDate',$handedOutDate);
        $stmt->bindParam(':dueDate',$dueDate);
        $stmt->bindParam(':description',$description);
    }

    catch (PDOException $e)
    {
        $error = 'Inserting data failed for the LabDetails table';
        include 'error.html.php';
        exit();
    }
    // Creates a new variable and assigns it to open up the Sailors.csv file. This will be used to read in data from the file
    $labFile = fopen("data/labs.csv", "r");

    // This while loop is intended to run until it can find no more data in the Sailors.csv file. Another way to check that there is no more data  
    // would be to use the feof function but it does not appear to be necessary
    while(($labData = fgetcsv($labFile)) !== FALSE)
    {
        // assigns variables from the Sailors table fields to contain whatever is in the $sailorsData variable. 
        // The square brackets are used to identify which column to take the data from in the file
        $labNumber=$labData[0];
        $tutorPassword=$labData[1];
        $handedOutDate=$labData[2];
        $dueDate=$labData[3];
        $description=$labData[4];

        $stmt->execute();

        // The code below can be useful for helping find out where something has gone wrong when reading the file, so I have left it here commented out
        //print_r($data);
        //echo $data[0];
    }

    // This closes down the file and lets the code know that we don't need to use it for now anymore. This helps save memory space
    fclose($labFile);*/
?>