<!-- 
        This file will control the addTeam.html.php and addTeamOutput.html.php files
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

    // checks to see whether the user clicked the add team button
    if(isset($_POST['addTeam']))
    {  
        include 'cleanseData.php';

        // cleans the $_POST coming in by calling the clean_input function from the cleanseData.php file
        $addTeamNameSelection = clean_input($_POST['addTeamName']);
        $addTeamCountrySelection = clean_input($_POST['addTeamCountry']);
        $addTeamImageSelection = $_POST['addTeamImage'];

        $insertQuery ="INSERT into Team(teamName, country, flagImage) VALUES(:teamName, :country, :flagImage)";

        // Does a prepare statement
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':teamName',$teamName);
        $stmt->bindParam(':country',$country);
        $stmt->bindParam(':flagImage',$flagImage);

        $teamName=$addTeamNameSelection;
        $country=$addTeamCountrySelection;
        $flagImage="defaultflag.jpg";

        $stmt->execute();

        $addedTeamResult = "The team " . $addTeamNameSelection;

        include 'addTeamOutput.html.php';
    }
    else 
    {
        include 'addTeam.html.php';
    }
?>