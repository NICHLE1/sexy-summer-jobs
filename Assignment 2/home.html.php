<!--
    A basic page just to give an introduction to the Louis Vuitton Cup with details. Provides a navigation bar to move to the other pages. This page is not used by other page controllers.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Home</title>
</head>
<body>

    <!-- navbar -->
    <ul>
    <li><a href="home.html.php">Home</a></li>
    <li><a href="searchAthleteController.php">Search Athlete</a></li>
    <li><a href="searchTeamController.php">Search Team</a></li>
    <li><a href="addAthleteController.php">Add Athlete </a></li>
    <li><a href="addTeamController.php">Add Team </a></li>
    <li><a href="modifyAthleteController.php">Modify Athlete </a></li>
    <li><a href="deleteAthleteController.php">Delete Athlete </a></li>
    <li class="resetbuttonnavbar"><a href="" onclick="confirmDatabaseReset()">Reset</a></li> <!-- The empty href attribute is simply to enable the ability to click on the navigation item. -->
    </ul>

    <!-- Sets up a textbox heading near the top of the page -->
    
    <div class="pageheaderbox">
        <h1 class="pageheader">Home Page</h1>
    </div>

    <div id="firsthomepagetextbox">
        <p class="homepagetext">The Louis Vuitton Cup is a yachting competition connected with the America's Cup. Since 1983, the Louis Vuitton Cup is used as the selection series in any year where multiple yachting syndicates are vying for the right to become the challenger for the America's Cup. Starting in 2017, a new Louis Vuitton Challenger’s Trophy was created—it was presented, for the first time, to the winner of the 2017 Louis Vuitton America’s Cup Challenger Playoffs, the competition held to determine the challenger in that year's America's Cup.</p>
    </div>

    <div id="secondhomepagetextbox">
        <p class="homepagetext">This website contains interesting features that you can use to explore the Louis Vuitton Cup, such as its players and teams. You can add your own teams and athletes, modify existing athletes, or even delete athletes that you have a particular disliking for. Please use the headings above to navigate around these different features throughout the website.</p>
    </div>
    
</body>
</html>