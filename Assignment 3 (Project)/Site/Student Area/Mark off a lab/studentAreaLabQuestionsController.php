<!--
    This files purpose is to act as a controller for the following files: studentAreaLabMarkOffForm.html.php, studentAreaLabQuestion1.html.php, studentAreaLabQuestion2.html.php,
    studentAreaLabQuestion3.html.php and studentAreaLabQuestionsFinish.html.php. It uses a switch statement with multiple case statements to achieve this. It is controlling the questions,
    inputting data into the Completion and SubmittedLabs tables.
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

    //$checkTimeOfDayForLabSubmissions = new DateTime();
    //$startTimeOfDayForLabSubmissions = new DateTime('0000-00-00 07-30-00');
    //echo $startTimeOfDayForLabSubmissions->format('H:i');

    //echo $checkTimeOfDayForLabSubmissions->format('H:i');



    //if($checkTimeOfDayForLabSubmissions->format('H:i'))
    //{
      //  echo("<h1>Sorry, the submission of labs is only open between the classroom hours of 7:30 am and 5:30 pm.</h1>");
    //}
    //else
    //{

    include '../../utilities/cleanseData.php';

    if(isset($_POST['checkpointComplete']))
    {
        switch($_POST['checkpointComplete'])
        {
            case 'Submit checkpoint':

                $studentToMarkOffSelection = $_POST['studentToMarkOff'];
                $labNumberToMarkOffSelection = $_POST['labNumberToMarkOff'];
                $tutorPasswordSelection = clean_input($_POST['tutorPassword']);

                $selectString = "SELECT Completion.studentID, Completion.labID FROM Completion WHERE Completion.studentID = '$studentToMarkOffSelection' AND Completion.labID = '$labNumberToMarkOffSelection'";
                $labRecordInTableResult = $pdo->query($selectString);
                $checkLabRecordInTable = $labRecordInTableResult->rowCount();

                if($checkLabRecordInTable > 0)
                {
                    echo("<h1>Sorry, the lab you have selected for this particular student has already been completed!</h1><br>");
                }
                else
                {

                    $selectQuery = "SELECT * FROM LabDetails WHERE (labNumber = :labNumber)";
                    $stmt = $pdo->prepare($selectQuery);
                    $stmt->bindParam(':labNumber',$labNumberToMarkOffSelection);
                    $stmt->execute();
                    $row = $stmt->fetch();
                    $countLabNumber = $stmt->rowCount();

                    //echo $timeStamp->format('d-m-Y H:i:s');

                    // retrieve the number of rows that will be returned

                    if($countLabNumber > 0)
                    {
                        // Hashing the password with its hash as the salt returns the same hash
                        if(crypt($tutorPasswordSelection, $row['tutorPassword']) === $row['tutorPassword'])
                        {
                            $timeStamp = new DateTime();
                            // insert into attendance table here, with timestamp etc

                            //echo $timeStamp->format('d-m-Y H:i:s');

                            $insertQuery ="INSERT INTO Completion(studentID, labID, responseTime) VALUES(:studentID, :labID, :responseTime)";

                            // Does a prepare statement
                            $stmt = $pdo->prepare($insertQuery);
                            $stmt->bindParam(':studentID',$studentID);
                            $stmt->bindParam(':labID',$labID);
                            $stmt->bindParam(':responseTime',$responseTime);

                            $studentID=$studentToMarkOffSelection;
                            $labID=$labNumberToMarkOffSelection;
                            $responseTime=$timeStamp->format('Y-m-d H:i:s');

                            $stmt->execute();


                            include 'studentAreaLabQuestion1.html.php';
                    }
                    else
                    {
                        $selectString = "SELECT Student.studentID, Student.firstName, Student.lastName FROM Student";
                        $studentNamesResult = $pdo->query($selectString);

                        $selectString = "SELECT LabDetails.labNumber FROM LabDetails";
                        $labNumbersResult = $pdo->query($selectString);

                        echo("<h1>Tutor password is wrong</h1><br>");
                        include 'studentAreaLabMarkOffForm.html.php';
                        exit;
                    }
                }
                    else
                    {
                        echo ("<h1>Illegal tutor password given</h1><br><br>");
                        exit;
                    }
                }

            break;

            case 'Skip question one':

                include 'studentAreaLabQuestion2.html.php';

            break;



            case 'Submit question one':

                $timeStamp = new DateTime();

                $xValueSelection = clean_input($_POST['xValue']);
                $yValueSelection = clean_input($_POST['yValue']);

                $insertQuery ="INSERT INTO SubmittedLabs(studentID, labNumber, toolID, responseTime, xValue, yValue) VALUES(:studentID, :labNumber, :toolID, :responseTime, :xValue, :yValue)";

                // Does a prepare statement
                $stmt = $pdo->prepare($insertQuery);
                $stmt->bindParam(':studentID',$studentID);
                $stmt->bindParam(':labNumber',$labNumber);
                $stmt->bindParam(':toolID',$toolID);
                $stmt->bindParam(':responseTime',$responseTime);
                $stmt->bindParam(':xValue',$xValue);
                $stmt->bindParam(':yValue',$yValue);

                $studentID=$_POST['tool1Student'];
                $labNumber=$_POST['tool1Lab'];
                $toolID = 1;
                $responseTime=$timeStamp->format('Y-m-d H:i:s');
                $xValue = $xValueSelection;
                $yValue = $yValueSelection;

                $stmt->execute();

                include 'studentAreaLabQuestion2.html.php';
                            
            break;

            case 'Skip question two':

                include 'studentAreaLabQuestion3.html.php';

            break;

            case 'Submit question two':

                $timeStamp = new DateTime();
                //$studentToMarkOffSelection = $_POST['studentToMarkOff'];
                //$labNumberToMarkOffSelection = $_POST['labNumberToMarkOff'];
            
                $xValueSelection = clean_input($_POST['xValue']);
                $yValueSelection = clean_input($_POST['yValue']);

                $insertQuery ="INSERT INTO SubmittedLabs(studentID, labNumber, toolID, responseTime, xValue, yValue) VALUES(:studentID, :labNumber, :toolID, :responseTime, :xValue, :yValue)";

                // Does a prepare statement
                $stmt = $pdo->prepare($insertQuery);
                $stmt->bindParam(':studentID',$studentID);
                $stmt->bindParam(':labNumber',$labNumber);
                $stmt->bindParam(':toolID',$toolID);
                $stmt->bindParam(':responseTime',$responseTime);
                $stmt->bindParam(':xValue',$xValue);
                $stmt->bindParam(':yValue',$yValue);

                $studentID=$_POST['tool2Student'];
                $labNumber=$_POST['tool2Lab'];
                $toolID = 2;
                $responseTime=$timeStamp->format('Y-m-d H:i:s');
                $xValue = $xValueSelection;
                $yValue = $yValueSelection;

                $stmt->execute();

                include 'studentAreaLabQuestion3.html.php';

            break;

            case 'Skip question three':

              include 'studentAreaLabQuestionsFinish.html.php';

            break;

            case 'Submit question three':

                $timeStamp = new DateTime();
            
                $xValueSelection = clean_input($_POST['xValue']);
                $yValueSelection = clean_input($_POST['yValue']);

                $insertQuery ="INSERT INTO SubmittedLabs(studentID, labNumber, toolID, responseTime, xValue, yValue) VALUES(:studentID, :labNumber, :toolID, :responseTime, :xValue, :yValue)";

                // Does a prepare statement
                $stmt = $pdo->prepare($insertQuery);
                $stmt->bindParam(':studentID',$studentID);
                $stmt->bindParam(':labNumber',$labNumber);
                $stmt->bindParam(':toolID',$toolID);
                $stmt->bindParam(':responseTime',$responseTime);
                $stmt->bindParam(':xValue',$xValue);
                $stmt->bindParam(':yValue',$yValue);

                $studentID=$_POST['tool3Student'];
                $labNumber=$_POST['tool3Lab'];
                $toolID = 3;
                $responseTime=$timeStamp->format('Y-m-d H:i:s');
                $xValue = $xValueSelection;
                $yValue = $yValueSelection;

                $stmt->execute();

             include 'studentAreaLabQuestionsFinish.html.php';

            break;

        }
    }
    else
    {
        $selectString = "SELECT Student.studentID, Student.firstName, Student.lastName FROM Student";
        $studentNamesResult = $pdo->query($selectString);

        $selectString = "SELECT LabDetails.labNumber FROM LabDetails";
        $labNumbersResult = $pdo->query($selectString);

        include 'studentAreaLabMarkOffForm.html.php';
    }
?>