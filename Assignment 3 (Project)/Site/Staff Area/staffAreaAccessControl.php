<!--
    This file is intended to provide access control for the Staff area of the site. It stores the username and password in $_SESSION which is active when you are visiting parts of the site.
-->

<?php
    session_start();

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
        include '../utilities/error.html.php';
        exit();
    }

    include '../../utilities/cleanseDataAccessControl.php';

    if(isset($_POST['staffUsername']))
    {
        $staffUsernameSelection = clean_input_access_control($_POST['staffUsername']);
    }
    else if(isset($_SESSION['staffUsername']))
    {
        $staffUsernameSelection = $_SESSION['staffUsername'];
    }
    if(isset($_POST['staffPassword']))
    {
        $staffPasswordSelection = clean_input_access_control($_POST['staffPassword']);
    }
    else if(isset($_SESSION['staffPassword']))
    {
        $staffPasswordSelection = $_SESSION['staffPassword'];
    }

    if(!isset($staffUsernameSelection))
    {
        include '../Staff site wide pages/staffAreaLoginForm.html.php';
        exit;
    }
    else
    {
        // work out if the user name is in the table
        $selectQuery = "SELECT * FROM Staff WHERE (username = :username)";
        $stmt = $pdo->prepare($selectQuery);
        $stmt->bindParam(':username',$staffUsernameSelection);
        $stmt->execute();
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        // retrieve the number of rows that will be returned

        if($count > 0)
        {
            // Hashing the password with its hash as the salt returns the same hash
            if(crypt($staffPasswordSelection, $row['password']) === $row['password'])
            {
                $_SESSION['staffUsername'] = $staffUsernameSelection;
                $_SESSION['staffPassword'] = $staffPasswordSelection;

                //$message = "Sucessful login"; 
            }
            else
            {
                //$message = "Password wrong";
                echo("<h1>Password wrong</h1><br>");
                //echo("<a href='secretPage.html.php'>Click here to go back to form</a>");
                exit;
            }
        }
        else
        {
            //echo("username is $userNameSelection and password is $userPasswordSelection<br>");
            echo ("<h1>Illegal username and password given</h1><br><br>");
            //echo("<a href='secretPage.html.php'>Click here to go back to form</a>");
            //$message = "Username and password are wrong";
            exit;
        }
    }

?>