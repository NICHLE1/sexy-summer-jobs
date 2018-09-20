<!--
    Comments: This file will facilitate the showing of all the fields. It uses the createTables.php file to grab information by conducting a SELECT statement.
    It then includes the showTablesOutput.html.php file and sends the information over there.
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

    // Grabs all the fields and their information out of the Sailors table and joins them on the Team table. This will produce twelve fields to output,
    // although I did omit printing out the teamID over in the output file, as the teamID from the Sailors table is the same
    $selectString = "SELECT * FROM Sailors JOIN Team ON Sailors.teamID = Team.teamID ORDER BY uniqueID";   
    $allTablesResult = $pdo->query($selectString);

    include 'showTablesOutput.html.php';
?>