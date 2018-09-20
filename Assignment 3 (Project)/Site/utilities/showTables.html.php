<!-- 
    This file is printing out all the tables in the database for the Web project and their associated fields too. It is controlled by the showTables.php file.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Show All Tables</title>
</head>

<body>

    <h1 class="centerheading">Student Table</h1>

    <table>
        <tr>
            <!-- Sets up headings for the table -->
            <th class="tableheadercolouring">studentID</th>
            <th class="tableheadercolouring">First Name</th>
            <th class="tableheadercolouring">Last Name</th>
            <th class="tableheadercolouring">Display Name</th>
        </tr>
        <?php
            foreach($studentTableResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[studentID]</td><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[displayName]</td></tr>");
            }
        ?>
    </table>

    <br>
    <br>

    <h1 class="centerheading">Staff Table</h1>

    <table>
        <tr>
            <!-- Sets up headings for the table -->
            <th class="tableheadercolouring">staffID</th>
            <th class="tableheadercolouring">First Name</th>
            <th class="tableheadercolouring">Last Name</th>
            <th class="tableheadercolouring">Username</th>
            <th class="tableheadercolouring">Password</th>
        </tr>
        <?php
            foreach($staffTableResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[staffID]</td><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[username]</td><td class='lightblue'>$row[password]</td></tr>");
            }
        ?>
    </table>

    <br>
    <br>

    <h1 class="centerheading">LabDetails Table</h1>

    <table>
        <tr>
            <!-- Sets up headings for the table -->
            <th class="tableheadercolouring">Lab Number</th>
            <th class="tableheadercolouring">Tutor Password</th>
        </tr>
        <?php
            foreach($labDetailsTableResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[labNumber]</td><td class='lightblue'>$row[tutorPassword]</td></tr>");
            }
        ?>
    </table>

    <br>
    <br>

    <h1 class="centerheading">Completion Table</h1>

    <table>
        <tr>
            <!-- Sets up headings for the table -->
            <th class="tableheadercolouring">Student ID</th>
            <th class="tableheadercolouring">Lab ID</th>
            <th class="tableheadercolouring">Response Time</th>
        </tr>
        <?php
            foreach($completionTableResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[studentID]</td><td class='lightblue'>$row[labID]</td><td class='lightblue'>$row[responseTime]</td></tr>");
            }
        ?>
    </table>

    <br>
    <br>

    <h1 class="centerheading">SubmittedLabs Table</h1>

    <table>
        <tr>
            <!-- Sets up headings for the table -->
            <th class="tableheadercolouring">Student ID</th>
            <th class="tableheadercolouring">Lab Number</th>
            <th class="tableheadercolouring">Tool ID</th>
            <th class="tableheadercolouring">Response Time</th>
            <th class="tableheadercolouring">X value</th>
            <th class="tableheadercolouring">Y value</th>
        </tr>
        <?php
            foreach($submittedLabsTableResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[studentID]</td><td class='lightblue'>$row[labNumber]</td><td class='lightblue'>$row[toolID]</td><td class='lightblue'>$row[responseTime]</td><td class='lightblue'>$row[xValue]</td><td class='lightblue'>$row[yValue]</td></tr>");
            }
        ?>
    </table>

</body>

</html>