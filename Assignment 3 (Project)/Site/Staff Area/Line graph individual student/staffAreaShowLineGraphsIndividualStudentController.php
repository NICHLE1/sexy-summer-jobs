<!--
    This controller is intended to show scatter graphs by individual student, using form input to tie the lab number selection into the database. 
    Its base files are staffAreaShowSLineGraphsIndividualStudentsLabForm.html.php and staffAreaShowLineGraphsIndividualStudentOutput.html.php
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

    if(isset($_POST['showLineGraphConfirmation']))
    {
        $showScatterGraphsByStudentSelection = $_POST['showLineGraphsByStudent'];
        
        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.xValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 1";
        $showLineGraphByIndividualStudentTool1Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 2";
        $showLineGraphByIndividualStudentTool2Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.xValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 3";
        $showLineGraphByIndividualStudentTool3Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 1";
        $showLineGraphByIndividualStudentTool4Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.xValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 2";
        $showLineGraphByIndividualStudentTool5Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.labNumber, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 3";
        $showLineGraphByIndividualStudentTool6Result = $pdo->query($selectString);

        $showLineGraphByIndividualStudentTool1ResultRowCount = $showLineGraphByIndividualStudentTool1Result->rowCount();
        $showLineGraphByIndividualStudentTool2ResultRowCount = $showLineGraphByIndividualStudentTool2Result->rowCount();
        $showLineGraphByIndividualStudentTool3ResultRowCount = $showLineGraphByIndividualStudentTool3Result->rowCount();
        $showLineGraphByIndividualStudentTool4ResultRowCount = $showLineGraphByIndividualStudentTool4Result->rowCount();
        $showLineGraphByIndividualStudentTool5ResultRowCount = $showLineGraphByIndividualStudentTool5Result->rowCount();
        $showLineGraphByIndividualStudentTool6ResultRowCount = $showLineGraphByIndividualStudentTool6Result->rowCount();

        include 'staffAreaShowLineGraphsIndividualStudentOutput.html.php';
    }
    else
    {
        $selectString = "SELECT DISTINCT Student.studentID, Student.firstName, Student.lastName, SubmittedLabs.studentID FROM Student, SubmittedLabs WHERE SubmittedLabs.studentID = Student.studentID";
        $studentsResult = $pdo->query($selectString);

        include 'staffAreaShowLineGraphsIndividualStudentForm.html.php';
    }
?>