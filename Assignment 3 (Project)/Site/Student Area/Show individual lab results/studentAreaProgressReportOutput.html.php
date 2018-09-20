<!--
    This files purpose is to show the result of the select statement from its controller studentAreaProgressReportController.html.php, which will show the labs the student has completed.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Student Area | Labs Report Progress</title>
</head>

<body>

    <!-- navbar -->
    <ul>
        <li><a href="../Mark off a lab/studentAreaLabQuestionsController.php">Mark off a lab</a></li>
        <li><a href="../Show individual lab results/studentAreaProgressReportController.php">Show your completed labs</a></li>
    </ul>

    <br>
    <br>

    <?php

if($rowCountResult > 0)
{
    switch($rowCountResult)
    {     
       case 1:
            echo "<h2 class='centerheading'>You have completed " . $rowCountResult . " lab out of 11.</h2>";
       break;

       default:
            echo "<h2 class='centerheading'>You have completed " . $rowCountResult . " labs out of 11.</h2>";
       break; 
    }

    echo "<br>";
    echo "<br>";

echo "
    <table>
    <tr>
        <!-- Sets up headings for the table -->
        <th class='tableheadercolouring'>Lab Number</th><th class='tableheadercolouring'>Completed</th>
    </tr>";
        // Below is a foreach loop that will echo out values passed over from the allFieldsOutput.php file
            foreach($studentProgressResult as $row)
            {
                //print_r($row);
                //echo"<br>";

                echo("<tr><td class='lightblue'>$row[labID]</td><td class='lightblue'>&#10004;</td></tr>");
            }
echo "</table>";

}
else
{
    echo"<br>";
    echo"<br>";
    echo "<h1 class='centerheading'>No result found.</h1>";
}

?>

</body>

</html>