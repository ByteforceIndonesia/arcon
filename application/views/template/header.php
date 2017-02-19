<html>
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php echo $page_title ?></title>

    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/js/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-horizon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/alpha.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url() ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url() ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>


    <!-- Slider -->
        <nav class ="wi-navigation-mob hidden-lg hidden-md animated">
            <div class="container">
                <div class="col-lg-12">
                    <ul class="pull-right wi-navigation-center horizontal-center  ">
                        <li class="wi-logo-mob"></li>
                        <a href = "<?php echo base_url(); ?>" <?php if($this->uri->segment(1) != 'gallery'): ?>                     class ="active"<?php endif; ?>><li class="links">Home</li></a>
                        <a href = "<?php echo base_url(); ?>#about"><li class="links">About</li></a>
                        <a href = "<?php echo base_url('gallery') ?>" <?php if($this->uri->segment(1) == 'gallery'): ?>class ="active"<?php endif; ?>><li class="links">Gallery</li></a>
                        <a href = "<?php echo base_url(); ?>#whatwedo"><li class="links">What we do</li></a>
                        <a href = "<?php echo base_url(); ?>#contact"><li class="links">Contact</li></a>
                    </ul>
                </div>
            </div>
        </nav>

  <!-- Parallax Slider -->
  <section class="parallax-window parallax-buskwak" id="paralax-home"data-parallax="scroll" data-image-src="#buskrak"></section>

  <section class="home-slider">

    <nav class ="wi-navigation">
        <div class="container ">
            <div class="col-lg-12">
                <ul class="pull-left wi-navigation-left">
                    <li class="wi-logo"></li>
                </ul>
                <ul class="pull-right wi-navigation-right hidden-sm hidden-xs">
                    <a href = "<?php echo base_url(); ?>" <?php if($this->uri->segment(1) != 'gallery'): ?>class ="active"<?php endif; ?>><li>Home</li></a>
                    <a href = "<?php echo base_url(); ?>#about"><li>About</li></a>
                    <a href = "<?php echo base_url('gallery') ?>" <?php if($this->uri->segment(1) == 'gallery'): ?>class ="active"<?php endif; ?>><li>Gallery</li></a>
                    <a href = "<?php echo base_url(); ?>#whatwedo"><li>What we do</li></a>
                    <a href = "<?php echo base_url(); ?>#contact"><li>Contact</li></a>
                </ul>
                <ul class="pull-right wi-navigation-right-Burger hidden-lg hidden-md">
                    <a id="navbarLink" href = "#" <?php if($this->uri->segment(1) != 'gallery'): ?>class ="active"<?php endif; ?>><li  style="border:0px;"><i class="fa fa-bars"></i></li></a>

                </ul>
            </div>
        </div>
    </nav>

  </section>
