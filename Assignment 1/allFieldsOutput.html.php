<!-- 
    Comments: This file is intended to show all the fields that have been created in the Team and Roles tables over in the createTeamNZ.php. The allFieldsOutput.php file will call this file
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <title>Show All Fields</title>
</head>
<body>

<table>
    <tr>
        <!-- Sets up headings for the table -->
        <th class="tableheadercolouring">teamID</th><th class="tableheadercolouring">First Name</th><th class="tableheadercolouring">Last Name</th><th class="tableheadercolouring">Gender</th><th class="tableheadercolouring">Image</th><th class="tableheadercolouring">PositionID</th><th class="tableheadercolouring">Position</th>
    </tr>
        <?php
        // Below is a foreach loop that will echo out values passed over from the allFieldsOutput.php file
            foreach($result as $row)
            {
                //print_r($row);
                //echo"<br>";

                // For the <img> tag, I am obtaining all of the photos out of the /photos folder so I can list that as a source rather than in the Positions.csv file along with the other information. I could
                // have also put .jpg at the end but was reluctant to do this as if changes are added in the future, such as specifying the file extension as .png for several photos, it would not work.
                // Therefore I would rather manipulate this side of data in the file itself which seems to be a more reliable way. But I know that I would add any future team member photos into the photos folder,
                // so therefore I can specify the src to check the photos folder.
                // Echos out values associated with the $row array
                echo("<tr><td class='lightblue'>$row[teamID]</td><td class='lightblue'>$row[first]</td><td class='lightblue'>$row[last]</td><td class='lightblue'>$row[gender]</td><td class='lightblue'><img class='images' src=photos/$row[image] alt='Team NZ member'></td><td class='lightblue'>$row[positionID]</td><td class='lightblue'>$row[position]</td></tr>");
            }
        ?>
</table>

    <br>
    <br>

  <table>
        <tr>
            <th class="tableheadercolouring">Position</th>
        </tr>

    <?php
        foreach($positionResult as $row)
        {
            //print_r($row);
            //echo"<br>";
            echo("<tr><td class='lightblue'>$row[position]</td></tr>"); // echos out all the positions
        }
    ?>
    </table>

</body>
</html>