<html>
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php $page_title ?></title>

    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/alpha.css" rel="stylesheet">

</head>
<body>
<!-- Parallax Slider -->
<section class="parallax-window" id="paralax-home"data-parallax="scroll" data-image-src="<?php echo $home_slider ?>"></section>

<!-- Slider -->
<section class="home-slider">
    <nav class ="wi-navigation">
        <div class="container ">
            <div class="col-lg-12">
                <ul class="pull-left wi-navigation-left">
                    <li class="wi-logo"></li>
                </ul>
                <ul class="pull-right wi-navigation-right">
                    <a href="#" class ="active"><li>Home</li></a>
                    <a href = "#"><li>About</li></a>
                    <a href = "#content-gallery"><li>Gallery</li></a>
                    <a href = "#"><li>What we do</li></a>
                    <a href = "#"><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </nav>
</section>