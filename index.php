<!DOCTYPE html>
<html>
<head>
    <title>SPRL</title>
    <?php
        define("pageName","Home");
        include("all_header.php");
    ?>
    <link href="cover.css" media="all" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php include("header.php");?>

<div class="row">
    <div class="col-md-3"></div>
    <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/carousel1.jpg" alt="SPRL">
                <div class="carousel-caption">
                    <h3>carousel1</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel2.jpg" alt="SPRL">
                <div class="carousel-caption">
                    <h3>carousel2</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel3.jpg" alt="SPRL">
                <div class="carousel-caption">
                    <h3>carousel3</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel4.jpg" alt="SPRL">
                <div class="carousel-caption">
                    <h3>carousel4</h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel5.jpg" alt="SPRL">
                <div class="carousel-caption">
                    <h3>carousel5</h3>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="col-md-3"></div>
</div>

<br/><br/>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row post-title">
            <h2>
                About Speech Processing Research Lab
            </h2>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row post-body">
            The Speech Processing Research Lab. (SPRL) at the EE Department, Amirkabir University of Technology (AUT) is
            actively involved in research in the fields of speech and audio processing. This includes audio signal analysis,
            speech recognition, speech synthesis, speaker recognition, speaker adaptation, speech enhancement and spoken dialog systems.
        </div>
        <div class="row mission-title">
            <h3>
                Our Mission and Charter
            </h3>
        </div>
        <div class="row mission-sum">
<!--            <div class="col-md-2"></div>-->
            <div class="col-md-6 mission-body">
                To train and educate, at both undergraduate and postgraduate levels, engineers of outstanding ability who
                can become leaders in the industry, academia and profession.
            </div>
            <div class="col-md-6 mission-body">
                To train and educate, at both undergraduate and postgraduate levels, engineers of outstanding ability who
                can become leaders in the industry, academia and profession.
            </div>
<!--            <div class="col-md-2"></div>-->
        </div>

    </div>
    <div class="col-md-3"></div>
</div>


<?php
include("footer.php");
?>

</body>
</html>