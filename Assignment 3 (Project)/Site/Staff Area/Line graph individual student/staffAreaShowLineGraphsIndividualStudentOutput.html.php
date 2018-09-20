<?php
    include '../staffAreaAccessControl.php';
?>

    <!--
This file is controlled by the staffAreaShowLineGraphsByIndividualStudentController.php file.  It is intended to output the results from the select statements.
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
            google.charts.setOnLoadCallback(drawChart1);

            function drawChart1() {
                var data1 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showLineGraphByIndividualStudentTool1Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options1 = {
                    title: 'Easy vs Hard',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'Easy-Hard',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart1 = new google.visualization.LineChart(document.getElementById('chart_div1'));

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
         foreach($showLineGraphByIndividualStudentTool2Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options2 = {
                    title: 'Interesting vs Boring',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'Interest-Boring',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart2 = new google.visualization.LineChart(document.getElementById('chart_div2'));

                chart2.draw(data2, options2);
            }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart3);

            function drawChart3() {
                var data3 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showLineGraphByIndividualStudentTool3Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options3 = {
                    title: 'Did not know how to approach these problems vs Had a clear plan for these problems',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'Did not know how to approach these problems - Clear plan for these problems',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart3 = new google.visualization.LineChart(document.getElementById('chart_div3'));

                chart3.draw(data3, options3);
            }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart4);

            function drawChart4() {
                var data4 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showLineGraphByIndividualStudentTool4Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options4 = {
                    title: 'Content was familiar vs Content was all new',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'Content was familiar-Content was all new',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart4 = new google.visualization.LineChart(document.getElementById('chart_div4'));

                chart4.draw(data4, options4);
            }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart5);

            function drawChart5() {
                var data5 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showLineGraphByIndividualStudentTool5Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options5 = {
                    title: 'Frustrated vs Triumphant',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'Frustrated-Triumphant',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart5 = new google.visualization.LineChart(document.getElementById('chart_div5'));

                chart5.draw(data5, options5);
            }
        </script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart6);

            function drawChart6() {
                var data6 = google.visualization.arrayToDataTable([
                    ['', ''],

                    <?php
         foreach($showLineGraphByIndividualStudentTool6Result as $row)
          {
              echo ("[$row[0], $row[1]],");
          }
          ?>

                ]);

                var options6 = {
                    title: 'My programming skills have improved vs My programming skills have not improved',
                    hAxis: {
                        title: 'Lab Numbers',
                        minValue: 1,
                        maxValue: 25
                    },
                    vAxis: {
                        title: 'My programming skills have improved-My programming skills have not improved',
                        minValue: -10,
                        maxValue: 10
                    },
                    legend: 'none'
                };

                var chart6 = new google.visualization.LineChart(document.getElementById('chart_div6'));

                chart6.draw(data6, options6);
            }
        </script>
        <title>Staff Area | Student Line Graphs</title>
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
    if($showLineGraphByIndividualStudentTool1ResultRowCount > 0)
    {
      echo "<div id='chart_div1' style='width: 900px; height: 500px; border:1px solid black;'></div><br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 1<br> <br></h3>");
    }
    if($showLineGraphByIndividualStudentTool2ResultRowCount > 0)
    {
      echo "<div id='chart_div2' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 2 <br> <br></h3>");
    }
    if($showLineGraphByIndividualStudentTool3ResultRowCount > 0)
    {
      echo "<div id='chart_div3' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 3 <br> <br></h3>");
    }
        if($showLineGraphByIndividualStudentTool4ResultRowCount > 0)
    {
      echo "<div id='chart_div4' style='width: 900px; height: 500px; border:1px solid black;'></div><br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 4 <br> <br></h3>");
    }
    if($showLineGraphByIndividualStudentTool5ResultRowCount > 0)
    {
      echo "<div id='chart_div5' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 5 <br> <br></h3>");
    }
    if($showLineGraphByIndividualStudentTool6ResultRowCount > 0)
    {
      echo "<div id='chart_div6' style='width: 900px; height: 500px; border:1px solid black;'></div> <br> <br>";
    }
    else
    {
      echo ("<h3>No result found for graph 6 <br> <br></h3>");
    }
    ?>
    </body>

    </html>