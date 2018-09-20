<!-- 
        This file will control the deleteAthlete.html.php and deleteAthleteOutput.html.php files
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

    // checks to see whether the user clicked on the Delete Athlete button
    if(isset($_POST['deleteAthlete']))
    {
        // grabs the result out of $_POST of the checkboxes delete name
        $selection = $_POST['delete'];

        // the count variable tallys up the number of athletes that were deleted, which will be used to print out on the Output page
        $count = 0;

        // Iterates over each athlete that was deleted
        foreach($selection as $data)
        {
            $count = $count + 1;
            // A SQL statement to provide functionality in order to delete the specified sailors
            $deleteRecord = "DELETE FROM Sailors WHERE Sailors.uniqueID = '$data'";
            $pdo->query($deleteRecord);
        }

        $selectString = "SELECT Sailors.firstName, Sailors.lastName, Sailors.gender, Sailors.image, Sailors.position, Team.country, Team.teamName FROM Sailors JOIN Team ON Sailors.teamID = Team.teamID";
        $deletedAthletesResult = $pdo->query($selectString);

        include 'deleteAthleteOutput.html.php'; 
    }
    else
    {
        // Selects data out of the database to pass over to the first page to fill up the dropdown options

        $selectString = "SELECT Sailors.uniqueID, Sailors.firstName, Sailors.lastName, Sailors.gender, Sailors.image, Sailors.position, Team.teamName, Team.country from Sailors JOIN Team ON Sailors.teamID = Team.teamID";
        $potentialSailorsToDeleteResult = $pdo->query($selectString);

        include 'deleteAthlete.html.php';
    }

?>