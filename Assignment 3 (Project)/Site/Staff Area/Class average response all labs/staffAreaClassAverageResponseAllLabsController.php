<!--
    This file is passing data over to the staffAreaClassAverageResponseAllLabsOutput.html.php file. Its purpose is to construct select statements for the class average response over all labs.$_COOKIE
    It uses grouping to tie the lab numbers together and create an average of the x/y values by using the AVG function.
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

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.xValue) AS data1 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 1 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool1Result = $pdo->query($selectString);

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.yValue) AS data2 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 2 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool2Result = $pdo->query($selectString);

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.xValue) AS data3 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 3 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool3Result = $pdo->query($selectString);

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.yValue) AS data4 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 1 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool4Result = $pdo->query($selectString);

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.xValue) AS data5 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 2 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool5Result = $pdo->query($selectString);

    $selectString = "SELECT SubmittedLabs.labNumber, AVG(SubmittedLabs.yValue) AS data6 FROM SubmittedLabs WHERE SubmittedLabs.toolID = 3 GROUP BY labNumber";
    $showLineGraphAverageAllLabsTool6Result = $pdo->query($selectString);

    $showLineGraphAverageAllLabsTool1ResultRowCount = $showLineGraphAverageAllLabsTool1Result->rowCount();
    $showLineGraphAverageAllLabsTool2ResultRowCount = $showLineGraphAverageAllLabsTool2Result->rowCount();
    $showLineGraphAverageAllLabsTool3ResultRowCount = $showLineGraphAverageAllLabsTool3Result->rowCount();
    $showLineGraphAverageAllLabsTool4ResultRowCount = $showLineGraphAverageAllLabsTool4Result->rowCount();
    $showLineGraphAverageAllLabsTool5ResultRowCount = $showLineGraphAverageAllLabsTool5Result->rowCount();
    $showLineGraphAverageAllLabsTool6ResultRowCount = $showLineGraphAverageAllLabsTool6Result->rowCount();

    include 'staffAreaClassAverageResponseAllLabsOutput.html.php';
    
?>