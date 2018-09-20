<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
    This file is controlled by the staffAreaInsertNewStudentController.php file. Its purpose is to provide a user interface for the user to input information about a student to submit.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Add a student</title>
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

        <div class="formContainer">
            <form class='formStyles' action='staffAreaInsertNewStudentController.php' method='POST'>
                <fieldset>
                    <legend>Add Staff Member</legend>

                    <h3 class="underline">Required Fields *</h3>

                    <br>

                    <!-- Provides text boxes for the user to type in -->

                    <h2>Student ID *</h2>
                    <input type="text" name="addStudentID" placeholder="Enter student ID..." required>
                    <br>
                    <br>
                    <h2>First Name *</h2>
                    <input type="text" name="addStudentFirstName" placeholder="Enter student first name..." required>
                    <br>
                    <br>
                    <h2>Last Name *</h2>
                    <input type="text" name="addStudentLastName" placeholder="Enter student last name..." required>
                    <br>
                    <br>
                    <h2>Display Name </h2>
                    <input type="text" name="addStudentDisplayName" placeholder="Enter student display name...">
                    <br>
                    <br>

                    <br>
                    <br>

                    <!-- Provides a button for users to click on to go to the next page -->

                    <input class="submitButton" type="submit" name="addStudentConfirmation" value="Add student">

                </fieldset>
            </form>
        </div>

    </body>

    </html>