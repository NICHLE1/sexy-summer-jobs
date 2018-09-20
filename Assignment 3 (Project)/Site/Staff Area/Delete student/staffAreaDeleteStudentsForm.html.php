<?php
    include '../staffAreaAccessControl.php';
?>

<!--
    This file is controlled by the staffAreaDeleteStudentsController.php file. Its purpose is to provide a user interface for the user to select students to delete.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="../../assets/javascript/custom-made/scripts.js"></script>

        <title>Staff Area | Delete Students Form</title>
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
            <h1 class="pageheader">Delete Students</h1>
        </div>
        <br>
        <br>
        <form action='staffAreaDeleteStudentsController.php' method='POST'>

            <table>
                <tr>
                    <!-- Sets up headings for the table -->
                    <th class="tableheadercolouring">Delete Person</th>
                    <th class="tableheadercolouring">First Name</th>
                    <th class="tableheadercolouring">Last Name</th>
                    <th class="tableheadercolouring">Display Name</th>
                </tr>
                <?php
        // Below is a foreach loop that will echo out values passed over from the deleteAthleteController.php file
            foreach($potentialStudentsToDeleteResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                // or name='delete'[]
                echo("<tr><td class='lightblue'><input type='checkbox' name='delete[]' value='$row[studentID]'></td><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[displayName]</td></tr>");
            }
        ?>

            </table>

            <br>
            <br>

            <input id="checkSubmit" class="submitDeletePageButton" type="submit" name="deleteStudents" value="Delete student(s)">
            <!-- is given an id in order to supplement the javascript script just below -->

            <!-- Unfortunately, it seems as though I have to insert this Javascript file locally to this page. I wanted to separate the workings of the files out and 
        put the script inside the scripts.js file, but as this page requires a link to an external Javascript source it seems to not be possible. 
        The scripts intended purpose is to check whether the user has checked any checkboxes, and if so provide a message that they need to do so and prevent them from
        accessing the next page.-->

            <script>
                checkDeleteStudents();
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#checkSubmit').click(function() {
                        checked = $("input[type=checkbox]:checked").length;
                        if (!checked) {
                            alert("You need to check at least one checkbox to continue.");
                            return false;
                        }
                    });
                });
            </script>
        </form>

        <br>
        <br>

    </body>

    </html>