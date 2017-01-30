<html>
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php echo $page_title ?></title>

    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/alpha.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>


    <!-- Slider -->
        <nav class ="wi-navigation-mob hidden-lg hidden-md">
            <div class="container ">
                <div class="col-lg-12">
                    <ul class="pull-right wi-navigation-center horizontal-center  ">
                        <li class="wi-logo-mob"></li>
                        <a href = "<?php echo base_url(); ?>" <?php if($this->uri->segment(1) != 'gallery'): ?>class ="active"<?php endif; ?>><li>Home</li></a>
                        <a href = "<?php echo base_url(); ?>#about"><li>About</li></a>
                        <a href = "<?php echo base_url('gallery') ?>" <?php if($this->uri->segment(1) == 'gallery'): ?>class ="active"<?php endif; ?>><li>Gallery</li></a>
                        <a href = "<?php echo base_url(); ?>#whatwedo"><li>What we do</li></a>
                        <a href = "<?php echo base_url(); ?>#contact"><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </nav>
  <!-- Parallax Slider -->
  <section class="parallax-window" id="paralax-home"data-parallax="scroll" data-image-src="<?php echo $home_slider ?>"></section>





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
