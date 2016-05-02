<!DOCTYPE html>
<html>
<head>
    <title>SPRL</title>
    <?php
        define("pageName","Research");
        include("all_header.php");
    ?>
    <link href="cover.css" media="all" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php include("header.php");?>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row post-title">
            <h2>
                Research Areas
            </h2>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row post-body">
            The current major active areas of research at SPRL are:
            <br/>
            <br/>
            <ol class="research-interests">
                <li><a href="#rsr">Robust Speech recognition</a></li>
                <li><a href="#apaca">Audio Processing and Content Analysis</a></li>
                <li><a href="#vad">Voice Activity Detection</a></li>
                <li><a href="#sa">Speaker Adaptation</a></li>
                <li><a href="#ssad">Speaker Segmentation and Diarization</a></li>
                <li><a href="#li">Language Identification</a></li>
                <li><a href="#aw">Audio Watermarking</a></li>
                <li><a href="#se">Speech Enhancement</a></li>
            </ol>
            <div class="row research-interest-title bottom-border">
                <h2 class="">
                    <a name="rsr">
                        Robust Speech Recognition
                    </a>
                </h2>
            </div>

            <div class="row research-interest-body">
                Speech recognition systems decode the speech signal into meaningful words, phrases or sentences.
                Robustness in speech recognition refers to the need to maintain good recognition accuracy even when
                the quality of the input speech is degraded, or when the acoustical, articulatory, or phonetic
                characteristics of speech in the training and testing environments differ. Obstacles to robust
                recognition include acoustical degradations produced by additive noise, the effects of linear filtering,
                nonlinearities in transduction or transmission as well as impulsive interfering sources, and diminished
                accuracy caused by changes in articulation produced by the presence of high-intensity noise sources.
                <br/>
                <br/>
                Specific activities in this area involve:
                <br/>
                <br/>
                <ol class="research-interests">
                    <li>Autocorrelation-based robust speech recognition</li>
                    <li>Histogram equalization and other normalizations for robust recognition</li>
                    <li>ICA-based robust speech recognition and enhancement</li>
                    <li>MVDR and other spectral estimations for robust speech recognition</li>
                </ol>

            </div>

        </div>
    </div>
    <div class="col-md-3"></div>
</div>


<div class="row footer center">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="inner">
            <p class="">
                Speech Processing Research Lab., 3rd floor Abou-Ray-Han Building, Amirkabir University of Technology
                (Tehran Polytechnic), Hafez Ave., Tehran, Iran.   Tel: +98-21-6454-3392
            </p>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

<!--<div class="site-wrapper">-->
<!--    <div class="site-wrapper-inner">-->
<!---->
<!--        <div class="cover-container">-->
<!---->
<!--            <div class="inner cover">-->
<!--                <h1 class="cover-heading farsi">-->
<!--                    لوکسین تک-->
<!--                </h1>-->
<!--                <p class="lead farsi">-->
<!--                    مدیریت هوشمند روشنایی فروشگاهها-->
<!--                </p>-->
<!--                <p class="lead">-->
<!--                    <a href="add_project.php" class="btn btn-lg btn-default farsi">-->
<!--                        سفارش گذاری-->
<!--                    </a>-->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--            <div class="mastfoot">-->
<!--                <div class="inner">-->
<!--                    <p class="farsi">-->
<!--                        تولید شده در واحد توسعه و تکنولوژی لوکسین تک-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
</body>
</html>