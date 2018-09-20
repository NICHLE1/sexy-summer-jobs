<?php
    include '../staffAreaAccessControl.php';
?>

    <!-- 
    This page will display the output based on which athlete the user decided to add on the addAthlete.html.php page. 
    The addAthleteController.php file decides what to select from the database.
-->
    <!--
    This file is controlled by the staffAreaInsertNewStudentController.php file. Its purpose is to echo out the student that was added.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheet.css" media="screen">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <script type="text/javascript" src="scripts.js"></script>
        <title>Staff Area | Show added student</title>
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

        <br>
        <br>
        <br>
        <br>

        <?php
    // Provdes a message displaying who was added to the database
    echo"<br>";
    echo "<h1 class='centerheading'>$addedStudentResult has been added to the database.</h1>";
?>

    </body>

    </html>