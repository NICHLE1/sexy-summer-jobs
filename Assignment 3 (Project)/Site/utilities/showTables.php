<!--
    This file is the controller for the showTables.html.php. It's purpose is to contain several select statements and pass these over to the html file for printing out in a table.
-->

<?php
    include 'connect.inc.php';

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

    $selectString = "SELECT * FROM Staff";
    $staffTableResult = $pdo->query($selectString);

    $selectString = "SELECT * FROM Student";
    $studentTableResult = $pdo->query($selectString);

    $selectString = "SELECT * FROM LabDetails";
    $labDetailsTableResult = $pdo->query($selectString);

    $selectString = "SELECT * FROM SubmittedLabs";
    $submittedLabsTableResult = $pdo->query($selectString);

    $selectString = "SELECT * FROM Completion";
    $completionTableResult = $pdo->query($selectString);

    include 'showTables.html.php';
?>