<!--
    The login form page for the Staff area.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Staff Area | Login Form</title>
</head>

<body>

    <div class="pageheaderbox">
        <h1 class="pageheader">Log in to staff website</h1>
    </div>

    <div class="formContainer">
        <?php
        // sanitises the URL
        $self = htmlentities($_SERVER['PHP_SELF']);
        echo "<form class='formStyles' action='$self' method='POST'>";
    ?>
            <fieldset>
                <legend>Staff log in</legend>

                <h3 class="underline">Required Fields *</h3>

                <br>
                <br> Username *
                <input type="text" name="staffUsername" placeholder="Enter staff username..." required>
                <br>
                <br> Password *
                <input type="password" name="staffPassword" placeholder="Enter staff password..." required>
                <br>
                <br>

                <br>

                <input class="submitButton" type="submit" name="confirmStaffLogin" value="Log in">

            </fieldset>
            </form>
    </div>

</body>

</html>