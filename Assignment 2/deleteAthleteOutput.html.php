<!-- 
    This page will display the output based on which people the user selected to delete on the deleteAthlete.html.php page. 
    The deleteAthleteController.php file decides what to select from the database.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <title>Show Deleted Athletes</title>
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

    <!-- Sets up a textbox heading near the top of the page -->

    <div class="pageheaderbox">
        <h1 class="pageheader">Delete Athlete Page Output</h1>
    </div>

<table>
    <tr>
        <!-- Sets up headings for the table -->
        <th class="tableheadercolouring">First Name</th><th class="tableheadercolouring">Last Name</th><th class="tableheadercolouring">Gender</th><th class="tableheadercolouring">Image</th><th class="tableheadercolouring">Position</th><th class="tableheadercolouring">Team</th><th class="tableheadercolouring">Country</th>
    </tr>
        <?php
            // The if statements are simply to check the number of sailors who were deleted in order to decide whether to provide a plural form of the message that will say how many sailors they deleted.
            if($count == 1)
            {
                echo"<br>";
                echo "<h1 id='deleteAthleteResultMessage'>You deleted $count sailor.</h1>";
                echo"<br>";
                echo"<br>";
            }
            else
            {
                echo"<br>";
                echo "<h1 id='deleteAthleteResultMessage'>You deleted $count sailors.</h1>";
                echo"<br>";
                echo"<br>";
            }


        // Below is a foreach loop that will echo out values passed over from the deleteAthleteController.php file
            foreach($deletedAthletesResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                // For the <img> tag in the echo statement below, I am obtaining all of the photos out of the /sailorImages folder
                // so I can list that as a source rather than in the Sailors.csv file along with the other information. I could
                // have also put .jpg at the end but was reluctant to do this as if changes are added in the future, such as specifying the file extension as .png for several photos, it would not work.
                // Therefore I would rather manipulate this side of data in the file itself which seems to be a more reliable way. But I know that I would add any future sailor member photos into the folder,
                // so therefore I can specify the src to check the folder.

                echo("<tr><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[gender]</td><td class='lightblue'><img class='images' src=sailorImages/$row[image] alt='Sailor member image'></td><td class='lightblue'>$row[position]</td><td class='lightblue'>$row[country]</td><td class='lightblue'>$row[teamName]</td></tr>");
            }
        ?>
</table>

    <br>
    <br>

    <?php
    // sanitises the URL
    $self = htmlentities($_SERVER['PHP_SELF']);
    echo "<form action='$self' method='POST'>";
    ?>

        <!-- Provides a button for users to click on to return to the last page -->

        <input class="returnbutton" type="submit" name="returnToSearchTeamPage" value="Go back">

    </form>

    <br>
        <br>

</body>
</html>