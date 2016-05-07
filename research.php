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
                <li><a href="#assp">Audio/speech signal processing</a></li>
                <li><a href="#asr">Automatic speech recognition</a></li>
                <li><a href="#rsr">Robust speech recognition</a></li>
                <li><a href="#se">Speech enhancement</a></li>
                <li><a href="#saisr">Speaker adaptation in speech recognition</a></li>
                <li><a href="#slr">Speaker/language recognition</a></li>
                <li><a href="#asslts">Audio/speech source localization/tracking/separation</a></li>
                <li><a href="#asw">Audio and speech watermarking</a></li>
                <li><a href="#ip">Image processing</a></li>
                <li><a href="#dms">Digital and microprocessor-based systems</a></li>
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


<?php
include("footer.php");
?>

</body>
</html>