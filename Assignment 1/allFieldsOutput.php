<!--
    Comments: This file will facilitate the showing of all the fields. It uses the createTeamNZ file to grab information by conducting a SELECT statement.$_COOKIE
    It then includes the allFieldsOutput.html.php file and sends the information over there.
-->

<?php
    include 'createTeamNZ.php';

    // Grabs all the fields and their information out of the Team table and joins them on the Roles table. This will produce seven fields to output
    $selectString = "SELECT * FROM TeamNZ JOIN Roles ON (TeamNZ.positionID = Roles.positionID)";
    $result = $pdo->query($selectString);

    include 'allFieldsOutput.html.php';
?>