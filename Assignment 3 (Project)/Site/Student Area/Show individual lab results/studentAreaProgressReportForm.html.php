<!--
    This files purpose is to provide an interface for the user to put in their student ID number and have its controller studentAreaProgressReportController.html.php use the input.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Student Area | Progress Report</title>
</head>

<body>

    <!-- navbar -->
    <ul>
        <li><a href="../Mark off a lab/studentAreaLabQuestionsController.php">Mark off a lab</a></li>
        <li><a href="../Show individual lab results/studentAreaProgressReportController.php">Show your completed labs</a></li>
    </ul>

    <div class="pageheaderbox">
        <h1 class="pageheader">Show your completed labs</h1>
    </div>

    <br>

    <div class="formContainer">
        <form class='formStyles' action='studentAreaProgressReportController.php' method='POST'>
            <fieldset>
                <legend>Show completed labs</legend>

                <h3 class="underline">Required Fields *</h3>
                <br>
                <h2>Student ID *</h2>
                <input type="text" name="showLabProgress" placeholder="Enter student ID..." required>
                <br>
                <br>
                <input class="submitButton" type="submit" name="confirmShowLabProgress" value="Show lab progress">
            </fieldset>
        </form>
    </div>

</body>

</html>