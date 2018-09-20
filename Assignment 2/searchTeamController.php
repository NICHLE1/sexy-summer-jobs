<!-- 
        This file will control the searchTeam.html.php and searchTeamOutput.html.php files
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
    
        // checks to see whether the user has clicked the search team button 
        if(isset($_POST['searchTeams']))
        {       
                // grabs the result of what the user selected from the dropdown menu
                $selection = $_POST['searchTeams'];

                // checks to see whether the user selected the Show All Teams option 
                if($selection == 'showAllTeams')
                {
                        // If above if statement true, the page will display all the teams listed in the Team table
                        $selectString = "SELECT Team.teamName, Team.country, Team.flagImage FROM Team";
                        $searchTeamsResult = $pdo->query($selectString);
                }
                else
                {
                        // displays only the details about a specific team the user selected, such as 'Land Rover Bar'
                        $selectString = "SELECT Team.teamName, Team.country, Team.flagImage FROM Team WHERE Team.teamName LIKE '$selection'";
                        $searchTeamsResult = $pdo->query($selectString);
                }
                
                include 'searchTeamOutput.html.php';
        }
        else
        {
                // Provides the searchTeam.html.php page data to fill up the dropdown menu
                $selectString = "SELECT DISTINCT teamName FROM Team";
                $teamNamesResult = $pdo->query($selectString);

                include 'searchTeam.html.php';
        }

?>