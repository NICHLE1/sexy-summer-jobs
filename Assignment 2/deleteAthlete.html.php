<!-- 
    This file will set up the form to allow the user to delete an athlete. The deleteAthleteController.php will use this file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <script type="text/javascript" src="scripts.js"></script>
    <!-- Script source for external Javascript/jquery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <title>Delete Athlete</title>
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
        <h1 class="pageheader">Delete Athlete Page</h1>
    </div>

    <?php
        // sanitises the URL
        $self = htmlentities($_SERVER['PHP_SELF']);
        echo "<form id='deleteAthleteForm' action='$self' method='POST'>";
    ?>

    <br>
        
    <table>
    <tr>
        <!-- Sets up headings for the table -->
        <th class="tableheadercolouring">Delete Person</th><th class="tableheadercolouring">First Name</th><th class="tableheadercolouring">Last Name</th><th class="tableheadercolouring">Gender</th><th class="tableheadercolouring">Image</th><th class="tableheadercolouring">Position</th><th class="tableheadercolouring">Team Name</th><th class="tableheadercolouring">Country</th>
    </tr>
        <?php
        // Below is a foreach loop that will echo out values passed over from the deleteAthleteController.php file
            foreach($potentialSailorsToDeleteResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                // For the <img> tag in the echo statement below, I am obtaining all of the photos out of the /sailorImages folder
                // so I can list that as a source rather than in the Sailors.csv file along with the other information. I could
                // have also put .jpg at the end but was reluctant to do this as if changes are added in the future, such as specifying the file extension as .png for several photos, it would not work.
                // Therefore I would rather manipulate this side of data in the file itself which seems to be a more reliable way. But I know that I would add any future sailor member photos into the folder,
                // so therefore I can specify the src to check the folder.

                // or name='delete'[]
                echo("<tr><td class='lightblue'><input type='checkbox' name='delete[]' value='$row[uniqueID]'></td><td class='lightblue'>$row[firstName]</td><td class='lightblue'>$row[lastName]</td><td class='lightblue'>$row[gender]</td><td class='lightblue'><img class='images' src=sailorImages/$row[image] alt='Sailor member image'></td><td class='lightblue'>$row[position]</td><td class='lightblue'>$row[teamName]</td><td class='lightblue'>$row[country]</td></tr>");
            }
        ?>

</table>

    <br>
    <br>

    <input id="checkSubmit" class="Button" type="submit" name="deleteAthlete" value="Delete athlete(s)"> <!-- is given an id in order to supplement the javascript script just below -->


    <!-- Unfortunately, it seems as though I have to insert this Javascript file locally to this page. I wanted to separate the workings of the files out and 
        put the script inside the scripts.js file, but as this page requires a link to an external Javascript source it seems to not be possible. 
        The scripts intended purpose is to check whether the user has checked any checkboxes, and if so provide a message that they need to do so and prevent them from
        accessing the next page.-->

    <script type="text/javascript">

                       $(document).ready(function () {
                $('#checkSubmit').click(function() {
                    checked = $("input[type=checkbox]:checked").length;
                    if(!checked) 
                    {
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