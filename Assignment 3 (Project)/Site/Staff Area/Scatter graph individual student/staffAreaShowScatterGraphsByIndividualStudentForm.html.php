<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
    This file is controlled by the staffAreaShowScatterGraphsByIndividualStudentForm.html.php file. It is intended to provide a user interface to submit the student name.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Show Individual Student Scatter Graphs</title>
    </head>

    <body>

        <!-- navbar -->
        <ul>
            <li><a href="../Staff site wide pages/staffAreaHome.html.php">Home</a></li>
            <li><a href="../Show student results/staffAreaShowStudentResultsController.php">Show Student Results</a></li>
            <li><a href="../Scatter graph by lab/staffAreaShowScatterGraphsByLabController.php">Show By Lab Scatter Graph</a></li>
            <li><a href="../Scatter graph individual student/staffAreaShowScatterGraphsByIndividualStudentController.php">Show Individual Student Scatter Graph</a></li>
            <li><a href="../Line graph individual student/staffAreaShowLineGraphsIndividualStudentController.php">Show Individual Student Line Graph</a></li>
            <li><a href="../Class average response all labs/staffAreaClassAverageResponseAllLabsController.php">Show Class Average Response Line Graph</a></li>
            <li><a href="../Add staff member/staffAreaAddStaffMemberController.php">Add Staff Member</a></li>
            <li><a href="../Add new student/staffAreaInsertNewStudentController.php">Add Student</a></li>
            <li><a href="../Delete student/staffAreaDeleteStudentsController.php">Delete Student</a></li>
            <li class="logoutbuttonnavbar"><a href="../Staff site wide pages/staffAreaLoggedOut.html.php">Logout</a></li>
        </ul>

        <div class="pageheaderbox">
            <h1 class="pageheader">Show scatter graphs by student</h1>
        </div>

        <br>
        <br>

        <div class="formContainer">
            <form class='formStyles' action='staffAreaShowScatterGraphsByIndividualStudentController.php' method='POST'>
                <fieldset>
                    <legend>Show Scatter Graphs</legend>

                    <i>Only students with actual results are displayed in the dropdown</i>

                    <!-- The select tag, which starts up the ability to select an option from a dropdown menu-->
                    <select name="showScatterGraphsByStudent" required>
                        <option value="" disabled selected>Please select a student</option>
                        <!-- The disabled selected prevents the user from submitting this option -->
                        <?php   
                // Iterates over each item in the $athletesPositionResult array, inputting data into the dropdown menu
                foreach($studentsResult as $row) 
                {
                    echo "<option value='$row[studentID]'>$row[firstName] $row[lastName] </option>";
                } 
            ?>
                    </select>

                    <br>
                    <br>

                    <input class="submitButton" type="submit" name="showScatterGraphConfirmation" value="Show scatter graph">
                </fieldset>
            </form>
        </div>
    </body>

    </html>