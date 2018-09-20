<!-- 
    This controller's purpose is to provide a select statement based on the input of the student ID and produce a table containing the labs they have completed.
    studentAreaProgressReportForm.html.php and studentAreaProgressReportOutput.html.php both use this controller.
-->

<?php
    include '../../utilities/connect.inc.php';

    // Establish connection to the database
    try
    {
        $pdo = new PDO("mysql:host=$host;dbname=$database", $userMS, $passwordMS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Connection to database failed';
        include 'error.html.php';
        exit();
    }

    include '../../utilities/cleanseData.php';

    if(isset($_POST['confirmShowLabProgress']))
    {
        $showLabProgressSelection = clean_input($_POST['showLabProgress']);
        
        $selectString = "SELECT Completion.studentID, Completion.labID FROM Completion WHERE Completion.studentID = '$showLabProgressSelection'";
        //$selectString = "SELECT LabDetails.labNumber FROM LabDetails JOIN Completion ON Completion.labID = LabDetails.labNumber WHERE Completion.studentID = '$showLabProgressSelection'";
        //$selectString = "SELECT DISTINCT LabDetails.labNumber, Completion.studentID, LabDetails.description FROM LabDetails,Completion WHERE Completion.studentID = '$showLabProgressSelection'";

        $studentProgressResult = $pdo->query($selectString);
        $rowCountResult = $studentProgressResult->rowCount();

        include 'studentAreaProgressReportOutput.html.php';
    }
    else
    {
        include 'studentAreaProgressReportForm.html.php';
    }

?>
