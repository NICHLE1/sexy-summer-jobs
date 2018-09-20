<!-- 
    Comments: This file is intended to show all the fields that have been created in the Sailors and Team tables over in the createTables.php file. The showTables.php is controlling this file
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Show All Fields</title>
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

    <div class="pageheaderbox">
        <h1 class="pageheader">Show All Tables Page</h1>
    </div>

    <br>
    <br>

<table>
    <tr>
        <!-- Sets up headings for the table -->
        <th class="tableheadercolouring">uniqueID</th><th class="tableheadercolouring">First Name</th><th class="tableheadercolouring">Last Name</th><th class="tableheadercolouring">Gender</th><th class="tableheadercolouring">Image</th><th class="tableheadercolouring">Position</th><th class="tableheadercolouring">teamID</th><th class="tableheadercolouring">countryID</th><th class="tableheadercolouring">Team Name</th><th class="tableheadercolouring">Country</th><th class="tableheadercolouring">Team image</th>
    </tr>
        <?php
        // Below is a foreach loop that will echo out values passed over from the showTables.php
            foreach($allTablesResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                // For the <img> tag in the echo statement below, I am obtaining all of the photos out of the /sailorImages or /teamImages folders 
                // so I can list that as a source rather than in the Sailors.csv file along with the other information. I could
                // have also put .jpg at the end but was reluctant to do this as if changes are added in the future, such as specifying the file extension as .png for several photos, it would not work.
                // Therefore I would rather manipulate this side of data in the file itself which seems to be a more reliable way. But I know that I would add any future sailor member photos into the folders,
                // so therefore I can specify the src to check the folders.

                // Echos out values associated with the $row array. I've omitted printing the teamID twice, as there is one of each in the Sailors and the Team table which are the same
                echo("<tr><td class='lightblue'>$row[uniqueID]</td><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[gender]</td><td class='lightblue'><img class='images' src=sailorImages/$row[image] alt='Sailor member image'></td><td class='lightblue'>$row[position]</td><td class='lightblue'>$row[teamID]</td><td class='lightblue'>$row[countryID]</td><td class='lightblue'>$row[teamName]</td><td class='lightblue'>$row[country]</td><td class='lightblue'><img class='images' src=teamImages/$row[flagImage] alt='Team image'></td></tr>");
            }
        ?>
</table>

<br>

</body>
</html>