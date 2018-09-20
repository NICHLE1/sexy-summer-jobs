<!-- 
    This page will display the output based on which team the user decided to add on the addTeam.html.php page. 
    The addTeamController.php file decides what to select from the database.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Add Team Output</title>
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
        <h1 class="pageheader">Add Team Page Output</h1>
    </div>

        <?php
            // provides a message displaying the team name of the team that was added to the database
            echo"<br>";
            echo "<h1 id='deleteAthleteResultMessage'>$addedTeamResult has been added to the database.</h1>";
        ?>

    <br>
    <br>

    <?php
    // sanitises the URL
    $self = htmlentities($_SERVER['PHP_SELF']);
    echo "<form action='$self' method='POST'>";
    ?>

        <!-- Provides a button for users to click on to return to the last page -->

        <input class="returnbutton" type="submit" name="returnToSearchTeamPage" value="Go back">

    </form>

    <br>
    
</body>
</html>