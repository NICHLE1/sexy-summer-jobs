<!-- 
        This file will control the modifyAthlete.html.php and modifyAthleteOutput.html.php files
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

    // checks to see whether the user clicked on the Modify athlete button
    if(isset($_POST['modifyAthlete']))
    {
        include 'cleanseData.php';

        // The following code grabs the results of what is contained in the $_POST variables and stores them in variables
        $AthleteUniqueIDSelection = $_POST['modifyAthleteName'];
        $modifyAthleteFirstNameSelection = $_POST['modifyAthleteFirstName'];
        $modifyAthleteLastNameSelection = $_POST['modifyAthleteLastName'];
        $modifyAthletePositionSelection = $_POST['modifyAthletePosition'];
        $modifyAthleteTeamSelection = $_POST['modifyAthleteTeamName'];

        // A statement that updates the Sailors table columns that are relative based on where the uniqueID is in the table
        $updateAthleteRecord = "UPDATE Sailors SET Sailors.firstName = '$modifyAthleteFirstNameSelection', Sailors.lastName = '$modifyAthleteLastNameSelection', Sailors.position = '$modifyAthletePositionSelection', Sailors.teamID = '$modifyAthleteTeamSelection', Sailors.countryID = '$modifyAthleteTeamSelection' WHERE Sailors.uniqueID = '$AthleteUniqueIDSelection'";
        $pdo->query($updateAthleteRecord);

        // Select statement along with a WHERE clause to only print out the details of the athlete that was modified
        $selectString = "SELECT Sailors.firstName, Sailors.lastName, Sailors.gender, Sailors.image, Sailors.position, Team.teamName, Team.country FROM Sailors JOIN Team ON (Sailors.teamID = Team.teamID) WHERE Sailors.uniqueID = '$AthleteUniqueIDSelection'";
        $modifiedAthleteResult = $pdo->query($selectString);

        include 'modifyAthleteOutput.html.php';
    }
    else
    {
        // Selects data out of the database to pass over to the first page to fill up the dropdown options

        $selectString = "SELECT Sailors.firstName, Sailors.lastName, Sailors.uniqueID FROM Sailors";
        $sailorNamesResult = $pdo->query($selectString);

        $selectString = "SELECT DISTINCT position FROM Sailors";
        $athletesPositionResult = $pdo->query($selectString);

        $selectString = "SELECT DISTINCT teamName FROM Team";
        $teamNameResult = $pdo->query($selectString);

        include 'modifyAthlete.html.php';
    }

?>