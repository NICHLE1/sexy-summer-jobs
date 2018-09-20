<!--
    This file acts as a controller for the staffAreaShowStudentResultsOutput.html.php file.
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

    $selectString = "SELECT LabDetails.labNumber FROM LabDetails";
    $labNumbersResult = $pdo->query($selectString);

    $selectString = "SELECT * FROM Student";
    $studentsResult = $pdo->query($selectString);


    include 'staffAreaShowStudentResultsOutput.html.php';
?>