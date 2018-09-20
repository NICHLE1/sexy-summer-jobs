<!-- 
        This file will control the searchAthlete.html.php and searchAthleteOutput.html.php files
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

    // checks to see whether the user clicked the search athlete button
    if(isset($_POST['searchAthlete']))
    {
        // provides the cleanseData file into this controller so I can use its function
        include 'cleanseData.php';
        
        // cleans the $_POST results using the clean_input function from the cleanseData.php file
        $searchAthleteFirstNameSelection =  clean_input($_POST['searchAthleteFirstName']); 
        $searchAthleteLastNameSelection =  clean_input($_POST['searchAthleteLastName']);
        $searchAthletePositionSelection = "";
        $searchAthleteTeamNameSelection = "";
        $searchAthleteCountrySelection = "";

        // checks to see whether the user entered any of these fields with the isset operator
        if(isset($_POST['searchAthletePosition']))
        {
            $searchAthletePositionSelection =  $_POST['searchAthletePosition'];
        }
        if(isset($_POST['searchAthleteTeamName']))
        {
            $searchAthleteTeamNameSelection =  $_POST['searchAthleteTeamName'];
        }
        if(isset($_POST['searchAthleteCountry']))
        {
            $searchAthleteCountrySelection =  $_POST['searchAthleteCountry'];
        }

          // other way to have a check on whether to select all if the user does not enter any parameters in
/*        if(!isset($_POST['searchAthleteFirstName']) && !isset($_POST['searchAthleteLastName']) && !isset($_POST['searchAthletePosition']) && !isset($_POST['searchAthleteTeamSelection']) && !isset($_POST['searchAthleteCountry']))
          if($_POST['searchAthleteFirstName'] == null && $_POST['searchAthleteLastName'] == null && $_POST['searchAthletePosition'] == null && $_POST['searchAthleteTeamName'] == null && $_POST['searchAthleteCountry'] == null)*/

        $selectString = "SELECT Sailors.firstName, Sailors.lastName, Sailors.gender, Sailors.image, Sailors.position, Team.teamName, Team.country FROM Sailors JOIN Team ON Sailors.teamID = Team.teamID";
      
        // Whole of search below:
        // the .= operator appends onto the $selectString variable
        // Search uses wildcard operator, along with the AND operator, to determine whether the user inputs are correct or not

        if(sizeof($_POST) > 1)
        {
            $selectString .= " WHERE Sailors.uniqueID >= '0' ";

            if(!empty($_POST['searchAthleteFirstName']))
            {
                $selectString .= "AND Sailors.firstName LIKE '$searchAthleteFirstNameSelection%' ";
            }
            if(!empty($_POST['searchAthleteLastName']))
            {
                $selectString .= "AND Sailors.lastName LIKE '$searchAthleteLastNameSelection%' ";
            }

            if(!empty($_POST['searchAthletePosition']))
            {
                $selectString .= "AND Sailors.position LIKE '$searchAthletePositionSelection%' ";
            }

            if(!empty($_POST['searchAthleteTeamName']))
            {
                $selectString .= "AND Team.teamName LIKE '$searchAthleteTeamNameSelection%' ";
            }

            if(!empty($_POST['searchAthleteCountry']))
            {
                $selectString .= "AND Team.country LIKE '$searchAthleteCountrySelection%' ";
            }
        }

        $searchAthleteResult = $pdo->query($selectString);

        // creates a new variable to grab the number of rows from the $searchAthleteResult select result 
        // its purpose is to determine whether to print out table headings over on the output page
        $check = $searchAthleteResult->rowCount();
        $searchAthleteCheck = false;

        // does this if there is no rows to print, otherwise printing out the table headings and the search result is fine
        if($check == 0)
        {
            $searchAthleteCheck = true;
        }

        include 'searchAthleteOutput.html.php';    
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

        include 'searchAthlete.html.php';
    }
?>