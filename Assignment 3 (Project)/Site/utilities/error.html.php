<!--
    Comments:    This file has a limited but important purpose. It is intended to appear if an error was found in the createTables.php file
                    for example, if the codes executor had a problem with creating a table, it would send the message to this file and display
                    which part of the code produced the error. This is a helpful way to find out where the error lies within the code
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error page</title>
</head>
<body>

<!--This page only activates if an error is found, and it will display a relevant message according to the source of the problem.-->
    <p>
        <?php echo $error . "<br/>" . $e->getMessage(); ?>
    </p>
</body>
</html>