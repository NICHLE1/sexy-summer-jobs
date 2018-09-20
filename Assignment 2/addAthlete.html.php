<!-- 
    This file will set up the form to allow the user to add an athlete. The addAthleteController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Add Athlete</title>
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
        <h1 class="pageheader">Add Athlete Page</h1>
    </div>

    <div class="formContainer">
        <?php
            // sanitises the URL
            $self = htmlentities($_SERVER['PHP_SELF']);
            echo "<form class='formStyles' action='$self' method='POST'>";
        ?>
        <fieldset>
            <legend>Add Athlete</legend>

            <h3 class="underline">Required Fields *</h3>

            <br>

            <!-- Provides textboxes for user input -->

            <h2>Athlete First Name *</h2>
            <input type="text" name="addAthleteFirstName" placeholder="Enter athletes first name..." required> <br> <br>

            <h2>Athlete Last Name *</h2> 
            <input type="text" name="addAthleteLastName" placeholder="Enter athletes last name..." required> <br> <br>

            <h2>Athlete Position *</h2>

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="addAthletePosition" required>
                <option value="" disabled selected>Please select a position</option> <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                        // Iterates over each item in the $athletesPositionResult array
                        foreach($athletesPositionResult as $row) 
                        {
                            echo "<option value='$row[position]'> $row[position] </option>";
                        } 
                    ?>
            </select>

            <br>
            <br>

            <h2>Athlete Team *</h2>             

            <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
            <select name="addAthleteTeamName" required>
                <option value="" disabled selected>Please select a team</option> <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                    
                        // Iterates over each item in the $teamNameResult array
                         // There is also a $num variable. As teamID in the Sailors table is an integer, I cannot set teamID to be a literal string ove in the modifyAthleteController.php file
                        // therefore this is a way of obtaining the proper result. $num gets incremented every time to match what teamID relates to in the Team table
                        // For example, if the user selects Artemis Racing, this team has a teamID of 3 in the Team table. $num will then be incremented to equal 3 so it knows its team 
                        foreach($teamNameResult as $num=>$row) 
                        {
                            $num = $num + 1;
                            echo "<option value=$num>$row[teamName] </option>";
                        } 
                    ?>
            </select>

            <br>
            <br>

            <!-- An image input if the user wants to upload an image. Personalised with external CSS by containing it within a div box -->

            <h2>Athlete Image</h2>
            <div class="upload">
                 <input type="file" name="addAthletePhoto"> <br> <br>
            </div>

            <h2>Athlete Gender *</h2> <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female <br> <br>

            <br>
            <br>

            <!-- Provides a submit button -->

            <input class="centerButton" type="submit" name="addAthlete" value="Add athlete">

        </fieldset>
    </form>
    </div>

    <br>
    <br>

</body>
</html>