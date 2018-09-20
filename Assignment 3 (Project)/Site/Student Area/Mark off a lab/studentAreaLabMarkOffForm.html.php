<!--
    The purpose of this file is to act as an interface for the studentAreaLabQuestionsController.php file
    The tutor passwords can be easily changed over in the utilities folder, with the file name 'insertPasswords.php'. 
    Inside the file is contained with instructions on how to change the formula and any lab numbers of the LabDetails table.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Student Area | Get a lab marked off</title>
</head>

<body>

    <!-- navbar -->
    <ul>
        <li><a href="studentAreaLabQuestionsController.php">Mark off a lab</a></li>
        <li><a href="../Show individual lab results/studentAreaProgressReportController.php">Show your completed labs</a></li>
    </ul>

    <div class="pageheaderbox">
        <h1 class="pageheader">Get a lab marked off</h1>
    </div>

    <br>

    <div class="formContainer">
        <form class='formStyles' action='studentAreaLabQuestionsController.php' method='POST'>
            <fieldset>
                <legend>Checkpoint mark off</legend>

                <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                <select name="studentToMarkOff" required>
                    <option value="" disabled selected>Please select your name</option>
                    <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                        // Iterates over each item in the $sailorNamesResult array, inputting data into the dropdown menu
                        // I echo out the uniqueID for its value, this will be used to decide what sailor to edit in the controller
                        foreach($studentNamesResult as $row) 
                        {
                            echo "<option value='$row[studentID]'>$row[firstName] $row[lastName]</option>";
                        } 
                    ?>
                </select>

                <br>
                <br>

                <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                <select name="labNumberToMarkOff" required>
                    <option value="" disabled selected>Please select a lab</option>
                    <!-- The disabled selected prevents the user from submitting this option -->
                    <?php   
                        // Iterates over each item in the $sailorNamesResult array, inputting data into the dropdown menu
                        // I echo out the uniqueID for its value, this will be used to decide what sailor to edit in the controller
                        foreach($labNumbersResult as $row) 
                        {
                        echo "<option value='$row[labNumber]'>$row[labNumber] </option>";
                        } 
                    ?>
                </select>

                <br>
                <br>

                <input type="password" name="tutorPassword" value="" placeholder="Enter tutor password..." required>

                    <br>
                    <br>
                    <br>

                    <input class="submitButton" type="submit" name="checkpointComplete" value="Submit checkpoint">
            </fieldset>
        </form>
    </div>
</body>

</html>