<!-- 
    Name: Leighton Nicholls
    Lab: Assignment 2 (Louis Vuitton Cup)
    Date: started 4th September 2017, finished 23rd September 2017

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

    // This is part of a try/catch statement. Basically the try part will attempt to execute whatever code is inside
    // If that does not work, the code's executer will move onto the catch statement
    try
    {
        $dropQuery="DROP TABLE IF EXISTS Sailors";
        $pdo->exec($dropQuery);

        // this query attempts to create the Sailors table
        $createQuery = "CREATE TABLE Sailors
        (
            /* Fields are created in here */
            uniqueID        INT(10) NOT NULL AUTO_INCREMENT, /* Will auto-increment each time a value is assigned to a record */
            firstName       VARCHAR(100) NOT NULL,
            lastName        VARCHAR(100) NOT NULL,
            gender          VARCHAR(100) NOT NULL,
            image           VARCHAR(100) NOT NULL,
            position        VARCHAR(100) NOT NULL,
            teamID          INT(10) NOT NULL,
            countryID       INT(10) NOT NULL,


            /* This assigns the primary key to be the uniqueID integer variable */
            PRIMARY KEY(uniqueID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the Sailors table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }

    try
    {
        // inserts data using prepared statements. This helps prevent SQL injection attacks on the database
        $insertQuery ="INSERT into Sailors(firstName, lastName, gender, position, image, countryID, teamID) VALUES(:firstName, :lastName, :gender, :position, :image, :countryID, :teamID)";
        $stmt =$pdo->prepare($insertQuery);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':position',$position);
        $stmt->bindParam(':image',$image);
        $stmt->bindParam(':countryID',$countryID);
        $stmt->bindParam(':teamID',$teamID);

        // Creates a new variable and assigns it to open up the Sailors.csv file. This will be used to read in data from the file
        $sailorsFile = fopen("data/sailors.csv", "r");

        // This while loop is intended to run until it can find no more data in the Sailors.csv file. Another way to check that there is no more data  
        // would be to use the feof function but it does not appear to be necessary
        while(($sailorsData = fgetcsv($sailorsFile)) !== FALSE)
        {
            // assigns variables from the Sailors table fields to contain whatever is in the $sailorsData variable. 
            // The square brackets are used to identify which column to take the data from in the file
            $firstName=$sailorsData[0];
            $lastName=$sailorsData[1];
            $position=$sailorsData[2];
            $gender=$sailorsData[3];
            $image=$sailorsData[4];
            $teamID=$sailorsData[5];
            $countryID=$sailorsData[6];

            $stmt->execute();

            // The code below can be useful for helping find out where something has gone wrong when reading the file, so I have left it here commented out
            //print_r($data);
            //echo $data[0];
        }

        // This closes down the file and lets the code know that we don't need to use it for now anymore. This helps save memory space
        fclose($sailorsFile);
    }

    catch (PDOException $e)
    {
        $error = 'Inserting data failed for the Sailors table';
        include 'error.html.php';
        exit();
    }

    try
    {
        $dropQuery="DROP TABLE IF EXISTS Team";
        $pdo->exec($dropQuery);

        // create team table
        $createQuery = "CREATE TABLE Team
        (         
            teamID          INT(10) NOT NULL AUTO_INCREMENT, 
            teamName        VARCHAR(100) NOT NULL,
            country         VARCHAR(100) NOT NULL,
            flagImage       VARCHAR(100) NOT NULL,

            PRIMARY KEY(teamID)
        )";
        $pdo->exec($createQuery);
    }
    catch (PDOException $e)
    {
        $error = 'Creating the Team table failed';
        include 'error.html.php';
        exit();
    }

    // input values into position table
    try
    {
        $insertQuery ="INSERT into Team(teamName, country, flagImage) VALUES(:teamName, :country, :flagImage)";
        //$insertQuery ="INSERT into Team(positionID, position) VALUES(1, ':position')"; // another possible way of writing the statement
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':teamName',$teamName);
        $stmt->bindParam(':country',$country);
        $stmt->bindParam(':flagImage',$flagImage);

        $teamFile = fopen("data/team.csv", "r");

        while(($teamData = fgetcsv($teamFile)) !== FALSE)
        {
            $teamName=$teamData[1];
            $country=$teamData[2];
            $flagImage=$teamData[3];
            $stmt->execute();

            //print_r($teamData);
            //echo $teamData[0];
        }

        fclose($teamFile);
    }
    catch (PDOException $e)
    {
        $error = 'Inserting data failed for the Team table';
        include 'error.html.php';
        exit();
    }

?>