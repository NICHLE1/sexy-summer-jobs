<?php
    session_start();
    // destroy session variables if uesr clicked logout
    $_SESSION = array();
    session_destroy();
?>

    <!--
    The logged out page for the Staff area.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <title>Staff Area | Logged out</title>
    </head>

    <body>

        <div class="pageheaderbox">
            <h1 class="pageheader">You are now logged out</h1>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="centerParent">
            <a id="goBackToLoginForm" href="staffAreaHome.html.php">Click here to go back to login form</a>
        </div>

    </body>

    </html>