<?php
?>
<!-- Fixed navbar -->
<!--<nav class="navbar navbar-default navbar-fixed-top">-->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">SPRL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if(pageName == "Home") echo " active" ?>"><a href="index.php">Home</a></li>
                <li class="<?php if(pageName == "Research") echo " active" ?>"><a href="research.php">Research</a></li>
                <li class="<?php if(pageName == "Publications") echo " active" ?>"><a href="publications.php">Publications</a></li>
                <li class="<?php if(pageName == "People") echo " active" ?>"><a href="people.php">People</a></li>
                <li class="<?php if(pageName == "Links") echo " active" ?>"><a href="links.php">Links</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Books/Chapters</a></li>
                        <li><a href="#">Journal Papers</a></li>
                        <li><a href="#">Conference Papers Papers</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="col-md-2">
            <img style="margin: 0 auto;" class="img-responsive header-img center-block" src="img/amirkabir.gif">
        </div>
        <div class="col-md-8">
            <div class="col-md-12 nav-header-name">
                SPRL: Speech Processing Research Lab
            </div>
        </div>
        <div class="col-md-2">
            <img style="margin: 0 auto;" class="img-responsive header-img center-block img-circle" src="img/signal.jpg">
        </div>
    </div>
    <div class="col-md-1"></div>
</div>