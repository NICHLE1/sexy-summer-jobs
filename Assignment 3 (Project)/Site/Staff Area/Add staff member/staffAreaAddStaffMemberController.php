<!--
    This controllers purpose is to make the add staff member form and output files work together. It takes in a variety of input from the form and then goes to the output file to 
    say how many staff members were added.
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

    if(isset($_POST['createNewStaffMember']))
    {
        include '../../utilities/cleanseData.php';

        $staffFirstNameSelection = clean_input($_POST['newStaffMemberFirstName']);
        $staffLastNameSelection = clean_input($_POST['newStaffMemberLastName']);
        $staffUsernameSelection = clean_input($_POST['newStaffMemberUsername']);
        $staffPasswordSelection = clean_input($_POST['newStaffMemberPassword']);
        $securityCodeSelection = clean_input($_POST['newStaffMemberSecurityCode']);

        //for each variable write a regular expression check eg:
		$staffFirstNameMatch = "(^[A-Z][a-zA-Z]{1,}$)";
		$staffLastNameMatch = "(^[A-Z][a-zA-Z]{1,}$)";
		$staffPasswordMatch = "(^(?=.*\d)(?=.{8,})(?=.*([^\w])).+$)"; // https://stackoverflow.com/questions/9587907/how-to-check-if-string-has-at-least-one-letter-number-and-special-character-in

		$success = true;
		$error = "";

		if(!preg_match($staffFirstNameMatch, $staffFirstNameSelection))
		{
			//make an error variable to be echoed in an error page
			$error .= "The first name needs to be atleast one character. <br>";
			$success = false;
		}

        if(!preg_match($staffLastNameMatch, $staffLastNameSelection))
		{
			//make an error variable to be echoed in an error page
			$error .= "The last name needs to be atleast one character. <br>";
			$success = false;
		}

        if(!preg_match($staffPasswordMatch, $staffPasswordSelection))
		{
			//make an error variable to be echoed in an error page
			$error .= "The password needs to be atleast eight characters, with atleast one number and one character. <br>";
			$success = false;
		}

        if($securityCodeSelection != 72133)
        {
            $error .= "The security code does not match. <br>";
			$success = false;
        }

        //only if success is false show all the errors
		if($success == false)
		{
            include 'staffAreaAddStaffMemberForm.html.php';
			//include 'addStaffMemberError.html.php';
		}
		else
		{
            include '../../utilities/createPasswords.php';

            insertStaffUsernamePassword("$staffFirstNameSelection", "$staffLastNameSelection", "$staffUsernameSelection", "$staffPasswordSelection", $pdo);

/*             $insertQuery ="INSERT INTO Staff(firstName, lastName, username, password) VALUES(:firstName, :lastName, :username, :password)";
            
            // Does a prepare statement
            $stmt = $pdo->prepare($insertQuery);
            $stmt->bindParam(':firstName',$firstName);
            $stmt->bindParam(':lastName',$lastName);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':password',$password);
    
            $firstName=$staffFirstNameSelection;
            $lastName=$staffLastNameSelection;
            $username=$staffUsernameSelection;
            $password=$staffPasswordSelection;
    
            $stmt->execute(); */
    
            include 'staffAreaAddStaffMemberOutput.html.php';
		}


    }
    else
    {
        include 'staffAreaAddStaffMemberForm.html.php';
    }
?>