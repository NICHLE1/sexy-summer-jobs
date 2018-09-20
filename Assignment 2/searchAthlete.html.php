<!-- 
    This file will set up the form to allow the user to search an athlete. The searchAthleteController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Search Athlete</title>
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
        <h1 class="pageheader">Search Athlete Page</h1>
    </div>

    <div class="formContainer">
            <?php
                // sanitises the URL
                $self = htmlentities($_SERVER['PHP_SELF']);
                echo "<form class='formStyles' action='$self' method='POST'>";
            ?>
                <fieldset>
                    <legend>Search athlete</legend>
                
                    <br>

                    <!-- The following inputs provide text boxes for the user to type in -->
                                
                    <h2>Athlete First Name</h2>
                    <input type="text" name="searchAthleteFirstName" placeholder="Enter athletes first name..."> <br> <br>

                    <h2>Athlete Last Name</h2>
                    <input type="text" name="searchAthleteLastName" placeholder="Enter athletes last name..."> <br> <br>

                    <h2>Athlete Position</h2>

                    <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                    <select name="searchAthletePosition">
                        <option value="" disabled selected>Please select a position</option> <!-- The disabled selected prevents the user from submitting this option -->
                            <?php   
                                // Iterates over each item in the $athletesPositionResult array, inputting data into the dropdown menu
                                foreach($athletesPositionResult as $row) 
                                {
                                    echo "<option value='$row[position]'> $row[position] </option>";
                                } 
                            ?>
                    </select>

                    <br> <br>

                    <h2>Athlete Team Name</h2>

                    <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                    <select name="searchAthleteTeamName">
                        <option value="" disabled selected>Please select a team</option> <!-- The disabled selected prevents the user from submitting this option -->
                            <?php   
                                // Iterates over each item in the $teamNameResult array, inputting data into the dropdown menu
                                foreach($teamNameResult as $row) 
                                {
                                    echo "<option value='$row[teamName]'> $row[teamName] </option>";
                                } 
                            ?>
                    </select>

                    <br> <br>

                    <h2>Athlete Country</h2>

                    <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                    <select name="searchAthleteCountry">
                        <option value="selectCountry" disabled selected>Please select a country</option> <!-- The disabled selected prevents the user from submitting this option -->
                            <?php   
                                // Iterates over each item in the $countriesResult array, inputting data into the dropdown menu
                                foreach($countriesResult as $row) 
                                {
                                    echo "<option value='$row[country]'> $row[country] </option>";
                                } 
                            ?>
                    </select>

                    <br> <br> <br>

                    <!-- Provides a button for users to click on to go to the next page -->
                    <input class="centerButton" type="submit" name="searchAthlete" value="Search athlete">

                </fieldset>
            </form>
    </div>

    <br>
    <br>

</body>
</html>