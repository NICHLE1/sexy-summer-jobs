<!--
    This controller is intended to show scatter graphs by individual student, using form input to tie the lab number selection into the database. 
    Its base files are staffAreaShowScatterGraphsByLabForm.html.php and staffAreaShowScatterGraphsByLabOutput.html.php
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
        $showScatterGraphByLabsSelection = $_POST['showScatterGraphsByLab'];
        
        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.labNumber = '$showScatterGraphByLabsSelection' AND SubmittedLabs.toolID = 1";
        $showScatterGraphByLabsTool1Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.labNumber = '$showScatterGraphByLabsSelection' AND SubmittedLabs.toolID = 2";
        $showScatterGraphByLabsTool2Result = $pdo->query($selectString);

        $selectString = "SELECT SubmittedLabs.xValue, SubmittedLabs.yValue FROM SubmittedLabs WHERE SubmittedLabs.labNumber = '$showScatterGraphByLabsSelection' AND SubmittedLabs.toolID = 3";
        $showScatterGraphByLabsTool3Result = $pdo->query($selectString);

        $showScatterGraphByLabsTool1ResultRowCount = $showScatterGraphByLabsTool1Result->rowCount();
        $showScatterGraphByLabsTool2ResultRowCount = $showScatterGraphByLabsTool2Result->rowCount();
        $showScatterGraphByLabsTool3ResultRowCount = $showScatterGraphByLabsTool3Result->rowCount();

        include 'staffAreaShowScatterGraphsByLabOutput.html.php';
    }
    else
    {
        $selectString = "SELECT DISTINCT SubmittedLabs.labNumber FROM SubmittedLabs ORDER BY SubmittedLabs.labNumber";
        $labsResult = $pdo->query($selectString);

        include 'staffAreaShowScatterGraphsByLabForm.html.php';
    }
?>