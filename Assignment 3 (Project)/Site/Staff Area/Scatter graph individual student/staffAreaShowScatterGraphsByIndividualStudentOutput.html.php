<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
  This file is controlled by the staffAreaShowScatterGraphsByIndividualStudentController.php file. It is intended to output the results from the select statements.
-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart2);

            function drawChart2() {
                var data1 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showScatterGraphByIndividualStudentTool1Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options1 = {
                    title: 'Interest vs. Difficulty comparison',
                    hAxis: {
                        title: 'Boring-Interesting',
                        minValue: -10,
                        maxValue: 10
                    },
                    vAxis: {
                        title: 'Easy-Hard',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart1 = new google.visualization.ScatterChart(document.getElementById('chart_div1'));

                chart1.draw(data1, options1);
            }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart2);

            function drawChart2() {
                var data2 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showScatterGraphByIndividualStudentTool2Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options2 = {
                    title: 'Plan vs. Familiarity comparison',
                    hAxis: {
                        title: 'Content was familiar-Content was all new',
                        minValue: -10,
                        maxValue: 10
                    },
                    vAxis: {
                        title: 'Did not know how to approach these problems-Had a clear plan for these problems',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart2 = new google.visualization.ScatterChart(document.getElementById('chart_div2'));

                chart2.draw(data2, options2);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart3);

            function drawChart3() {
                var data3 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showScatterGraphByIndividualStudentTool3Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options3 = {
                    title: 'Satisfaction vs. Improvement comparison',
                    hAxis: {
                        title: 'Frustrated-Triumphant',
                        minValue: -10,
                        maxValue: 10
                    },
                    vAxis: {
                        title: 'My programming skills have improved-My programming skills have not improved',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart3 = new google.visualization.ScatterChart(document.getElementById('chart_div3'));

                chart3.draw(data3, options3);
            }
        </script>
        <title>Staff Area | Show Individual Student Scatter Graphs</title>
    </head>

    <body>

        <!-- navbar -->
        <ul>
            <li><a href="../Staff site wide pages/staffAreaHome.html.php">Home</a></li>
            <li><a href="../Show student results/staffAreaShowStudentResultsController.php">Show Student Results</a></li>
            <li><a href="../Scatter graph by lab/staffAreaShowScatterGraphsByLabController.php">Show By Lab Scatter Graph</a></li>
            <li><a href="../Scatter graph individual student/staffAreaShowScatterGraphsByIndividualStudentController.php">Show Individual Student Scatter Graph</a></li>
            <li><a href="../Line graph individual student/staffAreaShowLineGraphsIndividualStudentController.php">Show Individual Student Line Graph</a></li>
            <li><a href="../Class average response all labs/staffAreaClassAverageResponseAllLabsController.php">Show Class Average Response Line Graph</a></li>
            <li><a href="../Add staff member/staffAreaAddStaffMemberController.php">Add Staff Member</a></li>
            <li><a href="../Add new student/staffAreaInsertNewStudentController.php">Add Student</a></li>
            <li><a href="../Delete student/staffAreaDeleteStudentsController.php">Delete Student</a></li>
            <li class="logoutbuttonnavbar"><a href="../Staff site wide pages/staffAreaLoggedOut.html.php">Logout</a></li>
        </ul>

        <br>
        <br>

        <?php
    if($showScatterGraphByIndividualStudentTool1ResultRowCount > 0)
    {
      echo "<div id='chart_div1' style='width: 900px; height: 500px; border:1px solid black;'></div><br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 1<br> <br></h3>");
    }
    if($showScatterGraphByIndividualStudentTool2ResultRowCount > 0)
    {
      echo "<div id='chart_div2' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 2<br> <br></h3>");
    }
    if($showScatterGraphByIndividualStudentTool3ResultRowCount > 0)
    {
      echo "<div id='chart_div3' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 3<br> <br></h3>");
    }
    ?>
    </body>

    </html>