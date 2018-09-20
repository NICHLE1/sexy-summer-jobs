<!--
    Comments: This page is the controller for the two following files (in order of execution): createSearch.html.php, searchResult.html.php
-->

<?php
    include 'createTeamNZ.php';

    // checks to see whether the user clicked on any of the options on the createSearch.html.php page, using the unique identifier 
    if (isset($_POST['positions']))
    {
        $selection = $_POST['positions'];

        // part of a nested if statement, to represent three different possibilities the user can input
        if($_POST['positions'] != 'showSailors' && $_POST['positions'] != 'showAll' && $_POST['positions'] != 'selectPosition') // This will show
        {
            //$selectString = "SELECT first, last, gender, image, position FROM Team JOIN Roles ON (Team.TeamID = Roles.positionID) WHERE position LIKE '$selection'";
            $selectString = "SELECT first, last, gender, image, position FROM TeamNZ JOIN Roles ON TeamNZ.positionID = Roles.positionID WHERE position LIKE '$selection'";
            $result = $pdo->query($selectString);
        }
        else
        {
            if($_POST['positions'] == 'showSailors') // This will show all the sailors
            {
                //$selectString = "SELECT * FROM Team JOIN Roles ON (Team.TeamID = Roles.positionID) ORDER BY Team.positionID LIMIT 10"; // this is an alternative way of doing it
                $selectString = "SELECT TeamNZ.first, TeamNZ.last, TeamNZ.gender, TeamNZ.image, position FROM TeamNZ JOIN Roles ON TeamNZ.positionID = Roles.positionID WHERE Roles.position LIKE 'Cyclist%' OR Roles.position LIKE 'Helmsman' OR Roles.position LIKE 'SKIPPER%'";
                $result = $pdo->query($selectString);
            }
            else // this is the Show All part
            {
                //$selectString = "SELECT Team.first, Team.last, Team.gender, Team.image, position  FROM Team JOIN Roles ON Team.teamID = Roles.positionID"; // left this here for future reference
                $selectString = "SELECT first, last, gender, image, position FROM TeamNZ JOIN Roles ON TeamNZ.positionID = Roles.positionID";
                $result = $pdo->query($selectString);
            }


        }

        // pass selection variable to searchresult file

        include 'searchResult.html.php';
    }
    else
    { 
        include 'createSearch.html.php'; // This will allow the page to stay on the createSearch.html.php page. This is also in place for the "Return to search page" button on the searchResult.html.php page
    }
?>