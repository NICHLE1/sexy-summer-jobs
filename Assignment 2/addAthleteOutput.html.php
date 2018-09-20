<!-- 
    This page will display the output based on which athlete the user decided to add on the addAthlete.html.php page. 
    The addAthleteController.php file decides what to select from the database.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Show Added Athlete</title>
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
        <h1 class="pageheader">Add Athlete Page Output</h1>
    </div>

<?php
    // Provdes a message displaying who was added to the database
    echo"<br>";
    echo "<h1 id='deleteAthleteResultMessage'>$addedAthleteResult has been added to the database.</h1>";
?>

<br>
<br>

    <?php
    // sanitises the URL
    $self = htmlentities($_SERVER['PHP_SELF']);
    echo "<form action='$self' method='POST'>";
    ?>

        <!-- Provides a return button to go back to the previous page -->
        <input class="returnbutton" type="submit" name="returnToSearchTeamPage" value="Go back">

    </form>

    <br>

</body>
</html>