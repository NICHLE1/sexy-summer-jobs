<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
    The file is intended to show all the students and their lab results. Its controller is staffAreaShowStudentResultsController.php
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Show All Student Results</title>
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
            <h1 class="pageheader">All Student Results Output</h1>
        </div>

        <table>
            <tr>
                <!-- Sets up headings for the table -->
                <th class="tableheadercolouring">Student ID</th>
                <th class="tableheadercolouring">First Name</th>
                <th class="tableheadercolouring">Last Name</th>
                <?php

        // prints out the headings of all the lab numbers from 1-26
          for($i = 1; $i < 27; $i++)
            {
                echo "<th>$i</th>";
            }

            echo "</tr>";

            foreach($studentsResult as $row2)
            {
                echo "<tr>";
                echo "<td>$row2[studentID]</td>";
                echo "<td>$row2[firstName]</td>";
                echo "<td>$row2[lastName]</td>";

                for($i = 1; $i < 27; $i++)
                {
                    $done = false;
                    // constanly selecting in the for loop in order to do a check below every time
                    $selectString = "SELECT * FROM Completion";
                    $completionResult = $pdo->query($selectString);

                    foreach($completionResult as $row3)
                    {
                        // compares to see if the student ID's from both select queries are the same
                        if($row2['studentID'] == $row3['studentID'])
                        {
                            // if the current position of $i is true and it equals the labID, then the if statement is considered true
                            if($i == $row3['labID'])
                            {
                                $done = true;
                            }
                        }

                    }
                    if($done == true)
                    {
                        echo "<td>&#10004;</td>"; // stands for check mark
                    }
                    else
                    {
                        echo "<td></td>";
                    }
                }

                 echo "</tr>";
            }
    ?>

        </table>

    </body>

    </html>