<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
    This file is controlled by the staffAreaAddStaffMemberController.php file. Its purpose is to provide a user interface for the user to add staff member details in.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Add Staff Member</title>
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
            <h1 class="pageheader">Make a new staff member</h1>
        </div>

        <br>

        <?php
        if(isset($_POST['createNewStaffMember']))
        {
            echo "<h3> $error </h3><br/>";
        }
    ?>

            <div class="formContainer">
                <form class='formStyles' action='staffAreaAddStaffMemberController.php' method='POST'>
                    <fieldset>
                        <legend>Add Staff Member</legend>

                        <h3 class="underline">Required Fields *</h3>

                        <br> First Name *
                        <input type="text" name="newStaffMemberFirstName" required>
                        <br>
                        <br> Last Name *
                        <input type="text" name="newStaffMemberLastName" required>
                        <br>
                        <br> Username *
                        <input type="text" name="newStaffMemberUsername" required>
                        <br>
                        <br> Password *
                        <input type="password" name="newStaffMemberPassword" required>
                        <br>
                        <br> Security code *
                        <input type="password" name="newStaffMemberSecurityCode" required>
                        <br>
                        <br>

                        <br>
                        <br>

                        <input class="submitButton" type="submit" name="createNewStaffMember" value="Add new staff member">

                    </fieldset>
                </form>
            </div>

    </body>

    </html>