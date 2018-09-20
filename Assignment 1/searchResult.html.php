<!--
    Comments: This is the page where the output will be displayed based on what the user inputted in the createSearch.html.php page
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css" media="screen">
    <title>Search Results</title>
</head>
<body>

<div class="returnToSearchForm">
    <?php
    // sanitises the URL
    $self = htmlentities($_SERVER['PHP_SELF']);
    echo "<form action='$self' method='POST'>";
    ?>
        <div class="returnToSearchDropDown">
            
            <!-- Provides a button to return back to the createSearch.html.php file, to allow the user to search again. -->
            <input class="returnToSearchFormButton" type="submit" name="goBack" value="Return to search page">

            <br>

        </div>
        </form>
    </div>

    <br>
    <br>

    <table>
        <tr>
            <!-- produces table headers -->
            <th class="tableheadercolouring">First Name</th><th class="tableheadercolouring">Last Name</th><th class="tableheadercolouring">Gender</th><th class="tableheadercolouring">Image</th><th class="tableheadercolouring">Position</th>
        </tr>

    <?php
        // Foreach will iterate over each item in the $result array
        foreach($result as $row)
        {
            //print_r($row);
            //echo"<br>";
            // Echos out values associated with the $row array
            echo("<tr><td class='lightblue'>$row[first]</td><td class='lightblue'>$row[last]</td><td class='lightblue'>$row[gender]</td><td class='lightblue'><img class='images' src=photos/$row[image] alt='Team NZ member'></td><td class='lightblue'>$row[position]</td></tr>");
        }
    ?>
    </table>

     <div class="returnToSearchForm">
        <?php
        // sanitises the URL
        $self = htmlentities($_SERVER['PHP_SELF']);
        echo "<form action='$self' method='POST'>";
        ?>
        <div class="returnToSearchDropDown">
            <!-- Provides a button to return back to the createSearch.html.php file, to allow the user to search again. -->
            <input class="returnToSearchFormButton" type="submit" name="goBack" value="Return to search page">

            <br>
        </div>
        </form>
    </div>

</body>
</html>