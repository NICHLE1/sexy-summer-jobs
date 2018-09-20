<!--
    This file is the first question on the grid. Its controller is he studentAreaLabQuestionsController.php file
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
    <script type="text/javascript" src="../../assets/javascript/jquery/jquery.imagemapster.js"></script>
    <script src="../../assets/javascript/custom-made/scripts.js"></script>
    <link rel="stylesheet" href="../../assets/css/custom-made/stylesheet.css" media="screen">
    <title>Student Area | Question One</title>
</head>

<body>

    <div class="pageheaderbox">
        <h1 class="pageheader">Question one</h1>
    </div>

    <form action='studentAreaLabQuestionsController.php' method='POST'>

        <!--<a href="#" id="des1">deselect circles (method 1)</a>-->

        <h2 class="northLabel">Interesting</h2>

        <!-- The draggable attribute works in the latest versions of Firefox, Google Chrome and Internet Explorer as of 30th October 2017. It does not seem to work in Edge.
            Perhaps I should use something like 'pointer events: none' instead.-->
        <div class="gridImage">
            <h2 class="westLabel">Easy</h2>

            <img class="grid" src="../../assets/images/graphImages/graphTemplate.png" alt="Question one" usemap="#graph_map" draggable="false">
            <h2 class="eastLabel">Hard</h2>
        </div>
        <h2 class="southLabel">Boring</h2>
        <map name="graph_map">

            <!-- Map information
        There are three sets of coordinates, as I am using circles for the whole graph. There are 20 by 20 rows.  
        The first set, e.g. '97', is the Y axis, which is moving vertical across the graph. These go up in increments of 35.
        The second set, e.g. '64' is the X axis, which is moving horizontal across the graph. These go up in increments of 28.
        The third set, e.g. '11', which is the size of the circle. This value always stays the same as I want the size of the circles to be equal.
        -->

            <!-- 1st row -->
            <area shape="circle" coords="16, 12, 8" group="inner-circle1" xValue="-10" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 12, 8" group="inner-circle2" xValue="-9" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 12, 8" group="inner-circle3" xValue="-8" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 12, 8" group="inner-circle4" xValue="-7" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="116, 12, 8" group="inner-circle5" xValue="-6" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 12, 8" group="inner-circle6" xValue="-5" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 12, 8" group="inner-circle7" xValue="-4" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 12, 8" group="inner-circle8" xValue="-3" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 12, 8" group="inner-circle9" xValue="-2" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 12, 8" group="inner-circle10" xValue="-1" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 12, 8" group="inner-circle11" xValue="1" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 12, 8" group="inner-circle12" xValue="2" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 12, 8" group="inner-circle13" xValue="3" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 12, 8" group="inner-circle14" xValue="4" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 12, 8" group="inner-circle15" xValue="5" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 12, 8" group="inner-circle16" xValue="6" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 12, 8" group="inner-circle17" xValue="7" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 12, 8" group="inner-circle18" xValue="8" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="466, 12, 8" group="inner-circle19" xValue="9" yValue="10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 12, 8" group="inner-circle20" xValue="10" yValue="10" href="#" onclick=getGridXYCoordinates()>

            <!-- 2nd row -->
            <area shape="circle" coords="16, 32, 8" group="inner-circle21" xValue="-10" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 32, 8" group="inner-circle22" xValue="-9" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 32, 8" group="inner-circle23" xValue="-8" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 32, 8" group="inner-circle24" xValue="-7" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 32, 8" group="inner-circle25" xValue="-6" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 32, 8" group="inner-circle26" xValue="-5" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 32, 8" group="inner-circle27" xValue="-4" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 32, 8" group="inner-circle28" xValue="-3" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 32, 8" group="inner-circle29" xValue="-2" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 32, 8" group="inner-circle30" xValue="-1" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 32, 8" group="inner-circle31" xValue="1" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 32, 8" group="inner-circle32" xValue="2" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 32, 8" group="inner-circle33" xValue="3" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 32, 8" group="inner-circle34" xValue="4" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 32, 8" group="inner-circle35" xValue="5" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 32, 8" group="inner-circle36" xValue="6" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 32, 8" group="inner-circle37" xValue="7" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 32, 8" group="inner-circle38" xValue="8" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 32, 8" group="inner-circle39" xValue="9" yValue="9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 32, 8" group="inner-circle40" xValue="10" yValue="9" href="#" onclick=getGridXYCoordinates()>

            <!-- 3rd row -->
            <area shape="circle" coords="16, 52, 8" group="inner-circle41" xValue="-10" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 52, 8" group="inner-circle42" xValue="-9" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 52, 8" group="inner-circle43" xValue="-8" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 52, 8" group="inner-circle44" xValue="-7" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 52, 8" group="inner-circle45" xValue="-6" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 52, 8" group="inner-circle46" xValue="-5" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 52, 8" group="inner-circle47" xValue="-4" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 52, 8" group="inner-circle48" xValue="-3" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 52, 8" group="inner-circle49" xValue="-2" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 52, 8" group="inner-circle50" xValue="-1" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 52, 8" group="inner-circle51" xValue="1" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 52, 8" group="inner-circle52" xValue="2" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 52, 8" group="inner-circle53" xValue="3" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 52, 8" group="inner-circle54" xValue="4" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 52, 8" group="inner-circle55" xValue="5" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 52, 8" group="inner-circle56" xValue="6" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 52, 8" group="inner-circle57" xValue="7" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 52, 8" group="inner-circle58" xValue="8" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 52, 8" group="inner-circle59" xValue="9" yValue="8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 52, 8" group="inner-circle60" xValue="10" yValue="8" href="#" onclick=getGridXYCoordinates()>

            <!-- 4th row -->
            <area shape="circle" coords="16, 72, 8" group="inner-circle61" xValue="-10" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 72, 8" group="inner-circle62" xValue="-9" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 72, 8" group="inner-circle63" xValue="-8" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 72, 8" group="inner-circle64" xValue="-7" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 72, 8" group="inner-circle65" xValue="-6" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 72, 8" group="inner-circle66" xValue="-5" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 72, 8" group="inner-circle67" xValue="-4" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 72, 8" group="inner-circle68" xValue="-3" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 72, 8" group="inner-circle69" xValue="-2" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 72, 8" group="inner-circle70" xValue="-1" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 72, 8" group="inner-circle71" xValue="1" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 72, 8" group="inner-circle72" xValue="2" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 72, 8" group="inner-circle73" xValue="3" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 72, 8" group="inner-circle74" xValue="4" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 72, 8" group="inner-circle75" xValue="5" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 72, 8" group="inner-circle76" xValue="6" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 72, 8" group="inner-circle77" xValue="7" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 72, 8" group="inner-circle78" xValue="8" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 72, 8" group="inner-circle79" xValue="9" yValue="7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 72, 8" group="inner-circle80" xValue="10" yValue="7" href="#" onclick=getGridXYCoordinates()>

            <!-- 5th row -->
            <area shape="circle" coords="16, 91, 8" group="inner-circle81" xValue="-10" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 91, 8" group="inner-circle82" xValue="-9" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 91, 8" group="inner-circle83" xValue="-8" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 91, 8" group="inner-circle84" xValue="-7" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 91, 8" group="inner-circle85" xValue="-6" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 91, 8" group="inner-circle86" xValue="-5" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 91, 8" group="inner-circle87" xValue="-4" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 91, 8" group="inner-circle88" xValue="-3" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 91, 8" group="inner-circle89" xValue="-2" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 91, 8" group="inner-circle90" xValue="-1" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 91, 8" group="inner-circle91" xValue="1" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 91, 8" group="inner-circle92" xValue="2" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 91, 8" group="inner-circle93" xValue="3" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 91, 8" group="inner-circle94" xValue="4" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 91, 8" group="inner-circle95" xValue="5" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 91, 8" group="inner-circle96" xValue="6" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 91, 8" group="inner-circle97" xValue="7" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 91, 8" group="inner-circle98" xValue="8" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 91, 8" group="inner-circle99" xValue="9" yValue="6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 91, 8" group="inner-circle100" xValue="10" yValue="6" href="#" onclick=getGridXYCoordinates()>

            <!-- 6th row -->
            <area shape="circle" coords="16, 111, 8" group="inner-circle101" xValue="-10" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 111, 8" group="inner-circle102" xValue="-9" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 111, 8" group="inner-circle103" xValue="-8" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 111, 8" group="inner-circle104" xValue="-7" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 111, 8" group="inner-circle105" xValue="-6" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 111, 8" group="inner-circle106" xValue="-5" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 111, 8" group="inner-circle107" xValue="-4" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 111, 8" group="inner-circle108" xValue="-3" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 111, 8" group="inner-circle109 " xValue="-2" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 111, 8" group="inner-circle110" xValue="-1" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 111, 8" group="inner-circle111" xValue="1" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 111, 8" group="inner-circle112" xValue="2" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 111, 8" group="inner-circle113" xValue="3" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 111, 8" group="inner-circle114" xValue="4" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 111, 8" group="inner-circle115" xValue="5" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 111, 8" group="inner-circle116" xValue="6" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 111, 8" group="inner-circle117" xValue="7" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 111, 8" group="inner-circle118" xValue="8" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 111, 8" group="inner-circle119" xValue="9" yValue="5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 111, 8" group="inner-circle120" xValue="10" yValue="5" href="#" onclick=getGridXYCoordinates()>

            <!-- 7th row -->
            <area shape="circle" coords="16, 130, 8" group="inner-circle121" xValue="-10" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 130, 8" group="inner-circle122" xValue="-9" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 130, 8" group="inner-circle123" xValue="-8" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 130, 8" group="inner-circle124" xValue="-7" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 130, 8" group="inner-circle125" xValue="-6" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 130, 8" group="inner-circle126" xValue="-5" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 130, 8" group="inner-circle127" xValue="-4" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 130, 8" group="inner-circle128" xValue="-3" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 130, 8" group="inner-circle129" xValue="-2" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 130, 8" group="inner-circle130" xValue="-1" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 130, 8" group="inner-circle131" xValue="1" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 130, 8" group="inner-circle132" xValue="2" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 130, 8" group="inner-circle133" xValue="3" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 130, 8" group="inner-circle134" xValue="4" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 130, 8" group="inner-circle135" xValue="5" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 130, 8" group="inner-circle136" xValue="6" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 130, 8" group="inner-circle137" xValue="7" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 130, 8" group="inner-circle138" xValue="8" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 130, 8" group="inner-circle139" xValue="9" yValue="4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 130, 8" group="inner-circle140" xValue="10" yValue="4" href="#" onclick=getGridXYCoordinates()>

            <!-- 8th row -->
            <area shape="circle" coords="16, 150, 8" group="inner-circle141" xValue="-10" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 150, 8" group="inner-circle142" xValue="-9" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 150, 8" group="inner-circle143" xValue="-8" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 150, 8" group="inner-circle144" xValue="-7" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 150, 8" group="inner-circle145" xValue="-6" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 150, 8" group="inner-circle146" xValue="-5" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 150, 8" group="inner-circle147" xValue="-4" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 150, 8" group="inner-circle148" xValue="-3" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 150, 8" group="inner-circle149" xValue="-2" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 150, 8" group="inner-circle150" xValue="-1" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 150, 8" group="inner-circle151" xValue="1" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 150, 8" group="inner-circle152" xValue="2" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 150, 8" group="inner-circle153" xValue="3" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 150, 8" group="inner-circle154" xValue="4" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 150, 8" group="inner-circle155" xValue="5" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 150, 8" group="inner-circle156" xValue="6" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 150, 8" group="inner-circle157" xValue="7" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 150, 8" group="inner-circle158" xValue="8" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 150, 8" group="inner-circle159" xValue="9" yValue="3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 150, 8" group="inner-circle160" xValue="10" yValue="3" href="#" onclick=getGridXYCoordinates()>

            <!-- 9th row -->
            <area shape="circle" coords="16, 170, 8" group="inner-circle161" xValue="-10" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 170, 8" group="inner-circle162" xValue="-9" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 170, 8" group="inner-circle163" xValue="-8" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 170, 8" group="inner-circle164" xValue="-7" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 170, 8" group="inner-circle165" xValue="-6" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 170, 8" group="inner-circle166" xValue="-5" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 170, 8" group="inner-circle167" xValue="-4" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 170, 8" group="inner-circle168" xValue="-3" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 170, 8" group="inner-circle169" xValue="-2" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 170, 8" group="inner-circle170" xValue="-1" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 170, 8" group="inner-circle171" xValue="1" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 170, 8" group="inner-circle172" xValue="2" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 170, 8" group="inner-circle173" xValue="3" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 170, 8" group="inner-circle174" xValue="4" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 170, 8" group="inner-circle175" xValue="5" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 170, 8" group="inner-circle176" xValue="6" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 170, 8" group="inner-circle177" xValue="7" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 170, 8" group="inner-circle178" xValue="8" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 170, 8" group="inner-circle179" xValue="9" yValue="2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 170, 8" group="inner-circle180" xValue="10" yValue="2" href="#" onclick=getGridXYCoordinates()>

            <!-- 10th row -->
            <area shape="circle" coords="16, 190, 8" group="inner-circle181" xValue="-10" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 190, 8" group="inner-circle182" xValue="-9" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 190, 8" group="inner-circle183" xValue="-8" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 190, 8" group="inner-circle184" xValue="-7" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 190, 8" group="inner-circle185" xValue="-6" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 190, 8" group="inner-circle186" xValue="-5" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 190, 8" group="inner-circle187" xValue="-4" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 190, 8" group="inner-circle188" xValue="-3" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 190, 8" group="inner-circle189" xValue="-2" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 190, 8" group="inner-circle190" xValue="-1" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 190, 8" group="inner-circle191" xValue="1" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 190, 8" group="inner-circle192" xValue="2" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 190, 8" group="inner-circle193" xValue="3" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 190, 8" group="inner-circle194" xValue="4" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 190, 8" group="inner-circle195" xValue="5" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 190, 8" group="inner-circle196" xValue="6" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 190, 8" group="inner-circle197" xValue="7" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 190, 8" group="inner-circle198" xValue="8" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 190, 8" group="inner-circle199" xValue="9" yValue="1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 190, 8" group="inner-circle200" xValue="10" yValue="1" href="#" onclick=getGridXYCoordinates()>

            <!-- 11th row -->
            <area shape="circle" coords="16, 210, 8" group="inner-circle201" xValue="-10" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 210, 8" group="inner-circle202" xValue="-9" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 210, 8" group="inner-circle203" xValue="-8" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 210, 8" group="inner-circle204" xValue="-7" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 210, 8" group="inner-circle205" xValue="-6" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 210, 8" group="inner-circle206" xValue="-5" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 210, 8" group="inner-circle207" xValue="-4" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 210, 8" group="inner-circle208" xValue="-3" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 210, 8" group="inner-circle209" xValue="-2" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 210, 8" group="inner-circle210" xValue="-1" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 210, 8" group="inner-circle211" xValue="1" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 210, 8" group="inner-circle212" xValue="2" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 210, 8" group="inner-circle213" xValue="3" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 210, 8" group="inner-circle214" xValue="4" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 210, 8" group="inner-circle215" xValue="5" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 210, 8" group="inner-circle216" xValue="6" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 210, 8" group="inner-circle217" xValue="7" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 210, 8" group="inner-circle218" xValue="8" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 210, 8" group="inner-circle219" xValue="9" yValue="-1" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 210, 8" group="inner-circle220" xValue="10" yValue="-1" href="#" onclick=getGridXYCoordinates()>

            <!-- 12th row -->
            <area shape="circle" coords="16, 230, 8" group="inner-circle221" xValue="-10" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 230, 8" group="inner-circle222" xValue="-9" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 230, 8" group="inner-circle223" xValue="-8" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 230, 8" group="inner-circle224" xValue="-7" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 230, 8" group="inner-circle225" xValue="-6" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 230, 8" group="inner-circle226" xValue="-5" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 230, 8" group="inner-circle227" xValue="-4" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 230, 8" group="inner-circle228" xValue="-3" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 230, 8" group="inner-circle229" xValue="-2" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 230, 8" group="inner-circle230" xValue="-1" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 230, 8" group="inner-circle231" xValue="1" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 230, 8" group="inner-circle232" xValue="2" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 230, 8" group="inner-circle233" xValue="3" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 230, 8" group="inner-circle234" xValue="4" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 230, 8" group="inner-circle235" xValue="5" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 230, 8" group="inner-circle236" xValue="6" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 230, 8" group="inner-circle237" xValue="7" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 230, 8" group="inner-circle238" xValue="8" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 230, 8" group="inner-circle239" xValue="9" yValue="-2" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 230, 8" group="inner-circle240" xValue="10" yValue="-2" href="#" onclick=getGridXYCoordinates()>

            <!-- 13th row -->
            <area shape="circle" coords="16, 250, 8" group="inner-circle241" xValue="-10" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 250, 8" group="inner-circle242" xValue="-9" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 250, 8" group="inner-circle243" xValue="-8" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 250, 8" group="inner-circle244" xValue="-7" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 250, 8" group="inner-circle245" xValue="-6" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 250, 8" group="inner-circle246" xValue="-5" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 250, 8" group="inner-circle247" xValue="-4" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 250, 8" group="inner-circle248" xValue="-3" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 250, 8" group="inner-circle249" xValue="-2" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 250, 8" group="inner-circle250" xValue="-1" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 250, 8" group="inner-circle251" xValue="1" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 250, 8" group="inner-circle252" xValue="2" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 250, 8" group="inner-circle253" xValue="3" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 250, 8" group="inner-circle254" xValue="4" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 250, 8" group="inner-circle255" xValue="5" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 250, 8" group="inner-circle256" xValue="6" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 250, 8" group="inner-circle257" xValue="7" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 250, 8" group="inner-circle258" xValue="8" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 250, 8" group="inner-circle259" xValue="9" yValue="-3" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 250, 8" group="inner-circle260" xValue="10" yValue="-3" href="#" onclick=getGridXYCoordinates()>

            <!-- 14th row -->
            <area shape="circle" coords="16, 270, 8" group="inner-circle261" xValue="-10" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 270, 8" group="inner-circle262" xValue="-9" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 270, 8" group="inner-circle263" xValue="-8" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 270, 8" group="inner-circle264" xValue="-7" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 270, 8" group="inner-circle265" xValue="-6" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 270, 8" group="inner-circle266" xValue="-5" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 270, 8" group="inner-circle267" xValue="-4" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 270, 8" group="inner-circle268" xValue="-3" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 270, 8" group="inner-circle269" xValue="-2" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 270, 8" group="inner-circle270" xValue="-1" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 270, 8" group="inner-circle271" xValue="1" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 270, 8" group="inner-circle272" xValue="2" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 270, 8" group="inner-circle273" xValue="3" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 270, 8" group="inner-circle274" xValue="4" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 270, 8" group="inner-circle275" xValue="5" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 270, 8" group="inner-circle276" xValue="6" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 270, 8" group="inner-circle277" xValue="7" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 270, 8" group="inner-circle278" xValue="8" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 270, 8" group="inner-circle279" xValue="9" yValue="-4" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 270, 8" group="inner-circle280" xValue="10" yValue="-4" href="#" onclick=getGridXYCoordinates()>

            <!-- 15th row -->
            <area shape="circle" coords="16, 289, 8" group="inner-circle281" xValue="-10" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 289, 8" group="inner-circle282" xValue="-9" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 289, 8" group="inner-circle283" xValue="-8" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 289, 8" group="inner-circle284" xValue="-7" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 289, 8" group="inner-circle285" xValue="-6" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 289, 8" group="inner-circle286" xValue="-5" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 289, 8" group="inner-circle287" xValue="-4" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 289, 8" group="inner-circle288" xValue="-3" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 289, 8" group="inner-circle289" xValue="-2" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 289, 8" group="inner-circle290" xValue="-1" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 289, 8" group="inner-circle291" xValue="1" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="289, 289, 8" group="inner-circle292" xValue="2" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 289, 8" group="inner-circle293" xValue="3" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 289, 8" group="inner-circle294" xValue="4" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 289, 8" group="inner-circle295" xValue="5" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 289, 8" group="inner-circle296" xValue="6" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 289, 8" group="inner-circle297" xValue="7" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 289, 8" group="inner-circle298" xValue="8" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 289, 8" group="inner-circle299" xValue="9" yValue="-5" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 290, 8" group="inner-circle300" xValue="10" yValue="-5" href="#" onclick=getGridXYCoordinates()>

            <!-- 16th row -->
            <area shape="circle" coords="16, 309, 8" group="inner-circle301" xValue="-10" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 309, 8" group="inner-circle302" xValue="-9" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 309, 8" group="inner-circle303" xValue="-8" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 309, 8" group="inner-circle304" xValue="-7" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 309, 8" group="inner-circle305" xValue="-6" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 309, 8" group="inner-circle306" xValue="-5" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 309, 8" group="inner-circle307" xValue="-4" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 309, 8" group="inner-circle308" xValue="-3" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 309, 8" group="inner-circle309" xValue="-2" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 309, 8" group="inner-circle310" xValue="-1" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 309, 8" group="inner-circle311" xValue="1" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 309, 8" group="inner-circle312" xValue="2" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 309, 8" group="inner-circle313" xValue="3" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 309, 8" group="inner-circle314" xValue="4" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 309, 8" group="inner-circle315" xValue="5" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 309, 8" group="inner-circle316" xValue="6" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 309, 8" group="inner-circle317" xValue="7" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 309, 8" group="inner-circle318" xValue="8" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 309, 8" group="inner-circle319" xValue="9" yValue="-6" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 309, 8" group="inner-circle320" xValue="10" yValue="-6" href="#" onclick=getGridXYCoordinates()>

            <!-- 17th row -->
            <area shape="circle" coords="16, 329, 8" group="inner-circle321" xValue="-10" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 329, 8" group="inner-circle322" xValue="-9" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 329, 8" group="inner-circle323" xValue="-8" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 329, 8" group="inner-circle324" xValue="-7" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 329, 8" group="inner-circle325" xValue="-6" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 329, 8" group="inner-circle326" xValue="-5" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 329, 8" group="inner-circle327" xValue="-4" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 329, 8" group="inner-circle328" xValue="-3" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 329, 8" group="inner-circle329" xValue="-2" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 329, 8" group="inner-circle330" xValue="-1" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 329, 8" group="inner-circle331" xValue="1" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 329, 8" group="inner-circle332" xValue="2" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 329, 8" group="inner-circle333" xValue="3" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 329, 8" group="inner-circle334" xValue="4" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 329, 8" group="inner-circle335" xValue="5" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 329, 8" group="inner-circle336" xValue="6" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 329, 8" group="inner-circle337" xValue="7" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 329, 8" group="inner-circle338" xValue="8" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 329, 8" group="inner-circle339" xValue="9" yValue="-7" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 329, 8" group="inner-circle340" xValue="10" yValue="-7" href="#" onclick=getGridXYCoordinates()>

            <!-- 18th row -->
            <area shape="circle" coords="16, 349, 8" group="inner-circle341" xValue="-10" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 349, 8" group="inner-circle342" xValue="-9" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 349, 8" group="inner-circle343" xValue="-8" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 349, 8" group="inner-circle344" xValue="-7" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 349, 8" group="inner-circle345" xValue="-6" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 349, 8" group="inner-circle346" xValue="-5" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 349, 8" group="inner-circle347" xValue="-4" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 349, 8" group="inner-circle348" xValue="-3" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 349, 8" group="inner-circle349" xValue="-2" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 349, 8" group="inner-circle350" xValue="-1" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 349, 8" group="inner-circle351" xValue="1" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 349, 8" group="inner-circle352" xValue="2" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 349, 8" group="inner-circle353" xValue="3" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 349, 8" group="inner-circle354" xValue="4" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 349, 8" group="inner-circle355" xValue="5" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 349, 8" group="inner-circle356" xValue="6" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 349, 8" group="inner-circle357" xValue="7" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 349, 8" group="inner-circle358" xValue="8" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 349, 8" group="inner-circle359" xValue="9" yValue="-8" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 349, 8" group="inner-circle360" xValue="10" yValue="-8" href="#" onclick=getGridXYCoordinates()>

            <!-- 19th row -->
            <area shape="circle" coords="16, 368, 8" group="inner-circle361" xValue="-10" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 368, 8" group="inner-circle362" xValue="-9" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 368, 8" group="inner-circle363" xValue="-8" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 368, 8" group="inner-circle364" xValue="-7" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 368, 8" group="inner-circle365" xValue="-6" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 368, 8" group="inner-circle366" xValue="-5" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 368, 8" group="inner-circle367" xValue="-4" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 368, 8" group="inner-circle368" xValue="-3" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 368, 8" group="inner-circle369" xValue="-2" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 368, 8" group="inner-circle370" xValue="-1" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 368, 8" group="inner-circle371" xValue="1" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 368, 8" group="inner-circle372" xValue="2" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 368, 8" group="inner-circle373" xValue="3" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 368, 8" group="inner-circle374" xValue="4" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 368, 8" group="inner-circle375" xValue="5" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 368, 8" group="inner-circle376" xValue="6" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 368, 8" group="inner-circle377" xValue="7" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 368, 8" group="inner-circle378" xValue="8" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 368, 8" group="inner-circle379" xValue="9" yValue="-9" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 368, 8" group="inner-circle380" xValue="10" yValue="-9" href="#" onclick=getGridXYCoordinates()>

            <!-- 20th row -->
            <area shape="circle" coords="16, 388, 8" group="inner-circle381" xValue="-10" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="41, 388, 8" group="inner-circle382" xValue="-9" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="66, 388, 8" group="inner-circle383" xValue="-8" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="91, 388, 8" group="inner-circle384" xValue="-7" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="115, 388, 8" group="inner-circle385" xValue="-6" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="141, 388, 8" group="inner-circle386" xValue="-5" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="166, 388, 8" group="inner-circle387" xValue="-4" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="191, 388, 8" group="inner-circle388" xValue="-3" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="216, 388, 8" group="inner-circle389" xValue="-2" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="240, 388, 8" group="inner-circle390" xValue="-1" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="266, 388, 8" group="inner-circle391" xValue="1" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="290, 388, 8" group="inner-circle392" xValue="2" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="315, 388, 8" group="inner-circle393" xValue="3" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="341, 388, 8" group="inner-circle394" xValue="4" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="366, 388, 8" group="inner-circle395" xValue="5" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="390, 388, 8" group="inner-circle396" xValue="-6" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="416, 388, 8" group="inner-circle397" xValue="7" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="441, 388, 8" group="inner-circle398" xValue="8" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="465, 388, 8" group="inner-circle399" xValue="9" yValue="-10" href="#" onclick=getGridXYCoordinates()>
            <area shape="circle" coords="491, 388, 8" group="inner-circle400" xValue="10" yValue="-10" href="#" onclick=getGridXYCoordinates()>
        </map>

        <br>

        <div class="skipButtonQuestionContainer">
            <input class="skipButtonQuestionPage" type="submit" name="checkpointComplete" value="Skip question one">
        </div>

        <br>

        <div class="submitButtonQuestionContainer">
            <input class="submitButtonQuestionPage" type="submit" name="checkpointComplete" value="Submit question one" id="submitQuestion" disabled selected>
        </div>

        <input type="hidden" name="tool1Student" value="<?php echo $_POST['studentToMarkOff'] ?>">
        <input type="hidden" name="tool1Lab" value="<?php echo $_POST['labNumberToMarkOff'] ?>">
        <input type="hidden" name="xValue" value="" id="xValueInput">
        <input type="hidden" name="yValue" value="" id="yValueInput">

    </form>

</body>

</html>