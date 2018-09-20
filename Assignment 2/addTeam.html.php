<!-- 
    This file will set up the form to allow the user to add a team. The addTeamController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Add a team</title>
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
        <h1 class="pageheader">Add Team Page</h1>
    </div>

    <div class="formContainer">
        <?php
            // sanitises the URL
            $self = htmlentities($_SERVER['PHP_SELF']);
            echo "<form class='formStyles' action='$self' method='POST'>";
        ?>
        <fieldset>
            <legend>Add Team</legend>

                <h3 class="underline">Required Fields *</h3>

                <br>

                <!-- Provides text boxes for the user to type in -->

                <h2>Team Name *</h2> <input type="text" name="addTeamName" placeholder="Enter Team name..." required> <br> <br>
                <h2>Team Country *</h2> <input type="text" name="addTeamCountry" placeholder="Enter Team country..." required> <br> <br>
                
                <!-- An upload image tool, which has been modified with CSS -->

                <h2>Team Image</h2> 
                <div class="upload">
                    <input type="file" name="addTeamImage"> <br> <br> <br>
                </div>

                <br>
                <br>

                <!-- Provides a button for users to click on to go to the next page -->

                <input class="centerButton" type="submit" name="addTeam" value="Add team">

        </fieldset>
        </form>
    </div>

</body>
</html>