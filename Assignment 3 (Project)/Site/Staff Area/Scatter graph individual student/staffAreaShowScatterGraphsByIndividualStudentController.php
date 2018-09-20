<!--
    This controller is intended to show scatter graphs by individual student, using form input to tie the student ID selection into the database. 
    Its base files are staffAreaShowScatterGraphsByIndividualStudentForm.html.php and staffAreaShowScatterGraphsByIndividualStudentOutput.html.php
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

    if(isset($_POST['showScatterGraphConfirmation']))
    {
        $showScatterGraphsByStudentSelection = $_POST['showScatterGraphsByStudent'];
        
        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 1";
        $showScatterGraphByIndividualStudentTool1Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 2";
        $showScatterGraphByIndividualStudentTool2Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$showScatterGraphsByStudentSelection' AND SubmittedLabs.toolID = 3";
        $showScatterGraphByIndividualStudentTool3Result = $pdo->query($selectString);

        $showScatterGraphByIndividualStudentTool1ResultRowCount = $showScatterGraphByIndividualStudentTool1Result->rowCount();
        $showScatterGraphByIndividualStudentTool2ResultRowCount = $showScatterGraphByIndividualStudentTool2Result->rowCount();
        $showScatterGraphByIndividualStudentTool3ResultRowCount = $showScatterGraphByIndividualStudentTool3Result->rowCount();

        include 'staffAreaShowScatterGraphsByIndividualStudentOutput.html.php';
    }
    else
    {
        $selectString = "SELECT DISTINCT Student.studentID, Student.firstName, Student.lastName, SubmittedLabs.studentID FROM Student, SubmittedLabs WHERE SubmittedLabs.studentID = Student.studentID";
        $studentsResult = $pdo->query($selectString);

        include 'staffAreaShowScatterGraphsByIndividualStudentForm.html.php';
    }
?>