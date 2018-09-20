<!--
    This controllers purpose is to make the insert student form and output files work together. It takes in a variety of input from the form and then goes to the output file to 
    say the student who was added.
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

    // checks to see whether the user clicked the add team button
    if(isset($_POST['addStudentConfirmation']))
    {  
        include '../../utilities/cleanseData.php';

        // cleans the $_POST coming in by calling the clean_input function from the cleanseData.php file
        $addStudentIDSelection = clean_input($_POST['addStudentID']);
        $addStudentFirstNameSelection = clean_input($_POST['addStudentFirstName']);
        $addStudentLastNameSelection = clean_input($_POST['addStudentLastName']);
        $addStudentDisplayNameSelection = clean_input($_POST['addStudentDisplayName']);
        
        $insertQuery ="INSERT INTO Student(studentID, firstName, lastName, displayName) VALUES(:studentID, :firstName, :lastName, :displayName)";

        // Does a prepare statement
        $stmt = $pdo->prepare($insertQuery);
        $stmt->bindParam(':studentID',$studentID);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':displayName',$displayName);

        $studentID=$addStudentIDSelection;
        $firstName=$addStudentFirstNameSelection;
        $lastName=$addStudentLastNameSelection;
        $displayName=$addStudentDisplayNameSelection;

        $stmt->execute();

        $addedStudentResult = "The student " . $addStudentFirstNameSelection . " " . $addStudentLastNameSelection;

        include 'staffAreaInsertNewStudentOutput.html.php';
    }
    else 
    {
        include 'staffAreaInsertNewStudentForm.html.php';
    }
?>