<!-- 
    This file will set up the form to allow the user to modify an athlete. The modifyAthleteController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Modify Athlete</title>
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
        <h1 class="pageheader">Modify Athlete Page</h1>
    </div>

    <div class="formContainer">
        <?php
            // sanitises the URL
            $self = htmlentities($_SERVER['PHP_SELF']);
            echo "<form class='formStyles' action='$self' method='POST'>";
        ?>
        <fieldset>
            <legend>Modify Athlete</legend>

            <br>

            <h2 class="underline">Select a player to modify</h2>

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="modifyAthleteName" required>
                <option value="" disabled selected>Please select a name</option> <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                        // Iterates over each item in the $sailorNamesResult array, inputting data into the dropdown menu
                        // I echo out the uniqueID for its value, this will be used to decide what sailor to edit in the controller
                        foreach($sailorNamesResult as $row) 
                        {
                        echo "<option value='$row[uniqueID]'>$row[firstName] $row[lastName] </option>";
                        } 
                    ?>
            </select>

            <br>
            <br>

            <h2 class="underline">Select the following fields to update the athlete</h2>

            <br>

            <h2>New Athlete First Name</h2>
            <input type="text" name="modifyAthleteFirstName" required placeholder="Enter new athlete first name..."> <br> <br>

            <h2>New Athlete Last Name</h2>
            <input type="text" name="modifyAthleteLastName" required placeholder="Enter new athlete last name..."> <br> <br>

            <h2>New Athlete Position</h2>

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="modifyAthletePosition" required>
                <option value="" disabled selected>Please select a position</option> <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                        // Iterates over each item in the $athletesPositionResult array, inputting data into the dropdown menu
                        foreach($athletesPositionResult as $row) 
                        {
                        echo "<option value='$row[position] '>$row[position] </option>";
                        } 
                     ?>
            </select>

            <br> 
            <br>

            <h2>New Athlete Team</h2>

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="modifyAthleteTeamName" required>
                <option value="" disabled selected>Please select a team</option> <!-- The disabled selected prevents the user from submitting this option -->
                    <?php  
                        // Iterates over each item in the $teamNameResult array, inputting data into the dropdown menu 
                        // There is also a $num variable. As teamID in the Sailors table is an integer, I cannot set teamID to be a literal string ove in the modifyAthleteController.php file
                        // therefore this is a way of obtaining the proper result. $num gets incremented every time to match what teamID relates to in the Team table
                        // For example, if the user selects Artemis Racing, this team has a teamID of 3 in the Team table. $num will then be incremented to equal 3 so it knows its team 
                        foreach($teamNameResult as $num=>$row) 
                        {
                            $num = $num + 1;
                            echo "<option value=$num>$row[teamName]</option>";
                        } 
                     ?>
            </select>

            <br>
            <br>
            <br>

            <!-- Provides a button for users to click on to go to the next page -->
            <input class="centerButton" type="submit" name="modifyAthlete" value="Modify athlete">

        </fieldset>
    </form>
    </div>

    <br>
    <br>

</body>
</html>