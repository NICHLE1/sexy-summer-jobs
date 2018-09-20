<!--
 This file is intended to supplement the deleting of students.
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

    // checks to see whether the user clicked on the Delete Athlete button
    if(isset($_POST['deleteStudents']))
    {
        // grabs the result out of $_POST of the checkboxes delete name
        $selection = $_POST['delete'];

        // the count variable tallys up the number of athletes that were deleted, which will be used to print out on the Output page
        $count = 0;

        // Iterates over each athlete that was deleted
        foreach($selection as $data)
        {
            $count = $count + 1;
            // A SQL statement to provide functionality in order to delete the specified sailors
            $deleteRecord = "DELETE FROM Student WHERE Student.studentID = '$data'";
            $pdo->query($deleteRecord);
            $deleteRecord = "DELETE FROM Completion WHERE Completion.studentID = '$data'";
            $pdo->query($deleteRecord);
            $deleteRecord = "DELETE FROM SubmittedLabs WHERE SubmittedLabs.studentID = '$data'";
            $pdo->query($deleteRecord);
        }

        $selectString = "SELECT Student.studentID, Student.firstName, Student.lastName, Student.displayName FROM Student";
        $deletedStudentsResult = $pdo->query($selectString);

        include 'staffAreaDeleteStudentsOutput.html.php'; 
    }
    else
    {
        // Selects data out of the database to pass over to the first page to fill up the dropdown options

        $selectString = "SELECT Student.studentID, Student.firstName, Student.lastName, Student.displayName FROM Student";
        $potentialStudentsToDeleteResult = $pdo->query($selectString);

        include 'staffAreaDeleteStudentsForm.html.php';
    }

?>