<!-- 
    This file will set up the form to allow the user to select a team to search. The searchTeamController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Search Team</title>
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
        <h1 class="pageheader">Search Team Page</h1>
    </div>

        <div class="formContainer">
        <?php
            // sanitises the URL
            $self = htmlentities($_SERVER['PHP_SELF']);
            echo "<form class='formStyles' action='$self' method='POST'>";
        ?>
        <fieldset>
            <legend>Search Team</legend>
        
            <br>

            <h2>Search Team</h2>

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="searchTeams" required>
                <option value="" disabled selected>Please select a team</option> <!-- The disabled selected prevents the user from submitting this option -->
                <option value="showAllTeams">Show all teams</option> 
                    <?php    
                        // Iterates over each item in the $teamNamesResult array, inputting data into the dropdown menu
                        foreach($teamNamesResult as $row)
                        {
                            echo "<option value='$row[teamName]'> $row[teamName] </option>";
                        }
                    ?>
            </select>

            <br>
            <br>
            <br>

            <!-- Provides a button for users to click on to go to the next page, while echoing out the option the user picked from the dropdown menu -->

            <input class="centerButton" type="submit" name="<?php echo $_POST['searchTeams']?>" value="Search team">

        </fieldset>
    </form>
    </div>

</body>
</html>