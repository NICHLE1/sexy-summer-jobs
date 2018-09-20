<!-- 
    Name: Leighton Nicholls
    Lab: Assignment 1 (America's Cup Team New Zealand)
    Date: started 23rd August 2017, finished 3rd September 2017

    Credits:
            Water: https://pixabay.com/p-1018808/?no_redirect
            NZ flag: https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/1280px-Flag_of_New_Zealand.svg.png (found on createSearch.html.php page)
            Boats in form: https://upload.wikimedia.org/wikipedia/commons/4/4b/America%27s_Cup_World_Series_San_Francisco.jpg (found on createSearch.html.php and searchResult.html.php pages)
            Boats: https://pixabay.com/p-1047430/?no_redirect (found on createSearch.html.php page)

    Comments: This is the file which creates the tables for the database which will be used by other pages, such as the searchController.php file
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
        $dropQuery="DROP TABLE IF EXISTS TeamNZ";
        $pdo->exec($dropQuery);

        // this query attempts to create the team table
        $createQuery = "CREATE TABLE TeamNZ
        (
            /* Fields are created in here */
            teamID          INT(10) NOT NULL AUTO_INCREMENT, /* Will auto-increment each time a value is assigned to the field */
            first           VARCHAR(100) NOT NULL,
            last            VARCHAR(100) NOT NULL,
            gender          VARCHAR(100) NOT NULL,
            image           VARCHAR(100) NOT NULL,
            positionID      INT(100) NOT NULL,

            /* This assigns the primary key to be the teamID integer variable*/
            PRIMARY KEY(teamID)      

        )";
        
        // This executes what the $createQuery contains into the $pdo variale
        $pdo->exec($createQuery);
    }

    // This catches any errors that result from the above try statement with the PDOException class
    catch (PDOException $e)
    {
        // creates a variable and assigns it with text. This has an important purpose which is explained in the error.html.php file
        $error = 'Creating the table failed';
        include 'error.html.php'; // includes the error.html.php, which shows up if the catch statement is true
        exit();
    }

    try
    {
        // insert data using prepared statements. This helps prevent SQL injection attacks on the database
        $insertQuery ="INSERT into TeamNZ(first, last, gender, image, positionID) VALUES(:first, :last, :gender, :image, :positionID)";
        $stmt =$pdo->prepare($insertQuery);
        $stmt->bindParam(':first',$first);
        $stmt->bindParam(':last',$last);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':image',$image);
        $stmt->bindParam(':positionID',$positionID);

        // Creates a new variable and assigns it to open up the People.csv file. This will be used to read in data from the file
        $file = fopen("People.csv", "r");

        // This while loop is intended to run until it can find no more data in the People.csv file. Another way to check that there is no more data  
        // would be to use the feof function but it does not appear to be necessary
        while(($data = fgetcsv($file)) !== FALSE)
        {
            // assigns variables from the Team table fields to contain whatever is in the $data variable. 
            // The square brackets are used to identify which column to take the data from in the file
            $first=$data[0];
            $last=$data[1];
            $gender=$data[2];
            $image=$data[3];
            $positionID=$data[4];
            $stmt->execute();

            // The code below can be useful for helping find out where something has gone wrong when reading the file, so I have left it here commented out
            //print_r($data);
            //echo $data[0];
        }

        // This closes down the file and lets the code know that we don't need to use it for now anymore. This helps save memory space
        fclose($file);
    }
    catch (PDOException $e)
    {
        $error = 'Inserting data failed for TeamNZ table';
        include 'error.html.php';
        exit();
    }

    try
    {
        $dropQuery="DROP TABLE IF EXISTS Roles";
        $pdo->exec($dropQuery);

        // had a lot of problems with creating a table called "Position". It kept giving unknown syntax errors which I was unable to fix.
        // Supposedly the name must have special meaning in the mysql language, so I changed it to another relevant name
        // UPDATE: I found out that 'Position' is a reserved word in the SQL language

        // create roles table
        $createQuery = "CREATE TABLE Roles
        (
            positionID      INT(10) NOT NULL AUTO_INCREMENT, 
            position        VARCHAR(100) NOT NULL,

            PRIMARY KEY(positionID)
        )";
        $pdo->exec($createQuery);
    }
    catch (PDOException $e)
    {
        $error = 'Creating the table failed';
        include 'error.html.php';
        exit();
    }

    // input values into position table
    try
    {
        $insertQuery ="INSERT into Roles(position) VALUES(:position)";
        //$insertQuery ="INSERT into Position(positionID, position) VALUES(1, ':position')"; // another possible way of writing the statement
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':position',$position);

        $file = fopen("Positions.csv", "r");

        while(($data = fgetcsv($file)) !== FALSE)
        {
            $position=$data[0];
            $stmt->execute();

            //print_r($data);
            //echo $data[0];
    
        }

        fclose($file);
    }
    catch (PDOException $e)
    {
        $error = 'Inserting data failed for Roles table';
        include 'error.html.php';
        exit();
    }

    try
    {
        // conjoins tables to pass over to the showTables.html.php file in order to echo them out
        $selectString = "SELECT TeamNZ.first, TeamNZ.last, TeamNZ.gender, TeamNZ.image, position FROM TeamNZ JOIN Roles ON TeamNZ.positionID = Roles.positionID";
        $peopleResult = $pdo->query($selectString);
        $selectString = "SELECT Roles.position FROM Roles JOIN TeamNZ ON Roles.positionID = TeamNZ.teamID"; // Selects just the position field from the Roles table to output
        $positionResult = $pdo->query($selectString);
    }

    catch(PDOException $e)
    {
        $error = 'Select statement error';
        include 'error.html.php';
        exit();
    }
    
    try
    {
        // This will be used to only select unique values from the position field in the Roles table. It will then order them into ascending order
        $selectString = "SELECT DISTINCT position from Roles ORDER BY position ASC";
        $result = $pdo->query($selectString);
    }

    catch(PDOException $e)
    {
        $error = 'Select statement error';
        include 'error.html.php';
        exit();
    }

?>