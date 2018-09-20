<!-- 
        This file will control the addAthlete.html.php and addAthleteOutput.html.php files
        It will use a range of statements to determine what to deliver on each page
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

        // checks to see whether the user clicked on the Add Athlete button
        if(isset($_POST['addAthlete']))
        {
                include 'cleanseData.php';

                // Assigns variables to contain what is in their associated $_POST results
                // cleans the input to prevent script attacks and so forth by calling a function from the cleanseData.php file
                $athleteFirstNameSelection = clean_input($_POST['addAthleteFirstName']);
                $athleteLastNameSelection = clean_input($_POST['addAthleteLastName']);
                $athletePositionSelection = $_POST['addAthletePosition'];
                $athleteTeamNameSelection = $_POST['addAthleteTeamName'];
                $athleteImageSelection = $_POST['addAthletePhoto'];
                $athleteGenderSelection = $_POST['gender'];

                // starts the statement to insert the new data into the Database
                $insertQuery ="INSERT into Sailors(firstName, lastName, gender, position, teamID, countryID, image) VALUES(:firstName, :lastName, :gender, :position, :teamID, :countryID, :image)";
                // uses prepare statements to help prevent SQL injections
                $stmt =$pdo->prepare($insertQuery);
                $stmt->bindParam(':firstName',$firstName);
                $stmt->bindParam(':lastName',$lastName);
                $stmt->bindParam(':gender',$gender);
                $stmt->bindParam(':position',$position);
                $stmt->bindParam(':teamID',$teamID);
                $stmt->bindParam(':countryID',$countryID);
                $stmt->bindParam(':image',$image);

                // assigns the database fields to contain what is in their associated variable names
                $firstName=$athleteFirstNameSelection;
                $lastName=$athleteLastNameSelection;
                $gender=$athleteGenderSelection;
                $position=$athletePositionSelection;
                $teamID=$athleteTeamNameSelection;
                $countryID=$athleteTeamNameSelection;
                $image="defaultperson.jpg";

                $stmt->execute();

                $addedAthleteResult = $athleteFirstNameSelection . " " . $athleteLastNameSelection;

                include 'addAthleteOutput.html.php';
        }
        else
        {
                // Selects data out of the database to pass over to the first page to fill up the dropdown options
                
                $selectString = "SELECT DISTINCT position from Sailors";
                $athletesPositionResult = $pdo->query($selectString);

                $selectString = "SELECT DISTINCT teamName from Team";
                $teamNameResult = $pdo->query($selectString);

                $selectString = "SELECT DISTINCT country from Team";
                $countriesResult = $pdo->query($selectString);
        
                include 'addAthlete.html.php';
        }

?>