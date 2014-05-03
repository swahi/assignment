<?php
include 'header.php';
include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .my
        {
            margin-left: -20px;
        }
    </style>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
    <div class="my">
    <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="images/placements1.jpg" alt="Welcome to Placement Information System" width="680px" height="306px"/>
            </a>
            <img src="images/comp_infos.jpg" alt="Company informations." width="680px" height="306px"/>
            <img src="images/give_fB.jpg" width="680px" height="306px" alt="Online quiz."/>
            <img src="images/img4.jpg" width="100" height="250" alt="Placement details"/>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="images/comp_infos.jpg" /></div>
                <div class="thumb-content"><p>Brief info about companies</p></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/img2.jpg" /></div>
                <div class="thumb-content"><p>Recruited Student information</p></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/give_fB.jpg" /></div>
                <div class="thumb-content"><p>Online quiz for students</p></div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/img7.jpg" /></div>
                <div class="thumb-content"><p>Fully Administrative control</p></div>
                <div style="clear:both;"></div>
            </div>
        </div>
 <div style="clear:both;height:0;"></div>
    </div>

    </div>
</body>
</html>

<?php

include 'footer.php';

?>
