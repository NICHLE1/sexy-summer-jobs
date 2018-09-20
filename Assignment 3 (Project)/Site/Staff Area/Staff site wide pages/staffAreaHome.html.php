<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
    The home page of the website.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Home</title>
    </head>

    <body>

        <!-- navbar -->
        <ul>
            <li><a href="staffAreaHome.html.php">Home</a></li>
            <li><a href="../Show student results/staffAreaShowStudentResultsController.php">Show Student Results</a></li>
            <li><a href="../Scatter graph by lab/staffAreaShowScatterGraphsByLabController.php">Show By Lab Scatter Graph</a></li>
            <li><a href="../Scatter graph individual student/staffAreaShowScatterGraphsByIndividualStudentController.php">Show Individual Student Scatter Graph</a></li>
            <li><a href="../Line graph individual student/staffAreaShowLineGraphsIndividualStudentController.php">Show Individual Student Line Graph</a></li>
            <li><a href="../Class average response all labs/staffAreaClassAverageResponseAllLabsController.php">Show Class Average Response Line Graph</a></li>
            <li><a href="../Add staff member/staffAreaAddStaffMemberController.php">Add Staff Member</a></li>
            <li><a href="../Add new student/staffAreaInsertNewStudentController.php">Add Student</a></li>
            <li><a href="../Delete student/staffAreaDeleteStudentsController.php">Delete Student</a></li>
            <li class="logoutbuttonnavbar"><a href="staffAreaLoggedOut.html.php">Logout</a></li>
        </ul>

        <div class="pageheaderbox">
            <h1 class="pageheader">Welcome to the staff site</h1>
        </div>

        <br>

        <div id="firsthomepagetextbox">
            <p class="homepagetext">This is the area of the site where staff can customise and modify the checkpoint controller. Please use the navigation bar above to navigate the site.</p>
            <p class="homepagetext">If you are a student, you will be wanting to go to the Student Area.</p>
        </div>

    </body>

    </html>