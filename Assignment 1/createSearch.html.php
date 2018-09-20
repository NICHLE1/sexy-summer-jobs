<!--
    Comments: This is the page which is the first page the user visits when they click on the searchController.php file. 
    It is intended to provide a starting point for the user to select an entry from the drop-down list. 
    The searchController.php will then make it move onto the searhResult.html.php page
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <title>Search Positions</title>
</head>
<body>
    <!-- These are the two images at the top of the page -->
    <img id="nzflagimage" src="otherImages/newzealandflag.png" alt="NZ Flag">
    <img id="boatsimage" src="otherImages/americascupboats.jpg" alt="America's cup boats">

    <div id="searchform">
        <?php
            // sanitises the URL
            $self = htmlentities($_SERVER['PHP_SELF']);
            echo "<form action='$self' method='POST'>";
        ?>
        <div class="dropdown">
            <br> <!-- inserts a line break in the page -->

            <!-- Starts the drop-down list -->
            <select name="positions">
                <!-- first three options are hardcoded in -->
                <option value="selectPosition" disabled selected>Please select a position</option> <!-- The disabled selected prevents the user from submitting this option -->
                <option value="showSailors">Show sailor team</option>
                <option value="showAll">Show all</option>
                <!-- Rest of options are linked in from the $result arrays data -->
                <?php   
                    // Iterates over each item in the $result array
                    foreach($result as $row) { ?>
                        <option value="<?php echo $row['position'] ?>"><?php echo $row['position'] ?></option>
                    <?php
                    } ?>

                    <?php
                    // could do below and then echo $selectionOption in the button event below but this way seemed to give me validation errors
                    //$selectOption = $_POST['positions']; // assigns what is in the positions variable to be that of $selectOption
                    ?>
            </select>

            <br>
            <br>

            <!-- echos that of what the $selectOption variable contains. This variable will be used over in the searchController.php file -->
            <input class="button" type="submit" name="<?php echo $_POST['positions']?>" value="Submit"> 

            <br>
        </div>
        </form>
    </div>
</body>
</html>