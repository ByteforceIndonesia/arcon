<html>
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php echo $page_title ?></title>

    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/js/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/alpha.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/beta.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url() ?>assets/css/lity.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick/slick-theme.css"/>


</head>
<body>


    <!-- Slider -->
        <nav class ="wi-navigation-mob hidden-lg hidden-md animated">
            <div class="container ">
                <div class="col-lg-12">
                    <ul class="pull-right wi-navigation-center horizontal-center  ">
                        <li class="wi-logo-mob"></li>
                        <a href = "<?php echo base_url(); ?>" <?php if($this->uri->segment(1) != 'gallery'): ?>class ="active"<?php endif; ?>><li class="links">Home</li></a>
                        <a href = "<?php echo base_url(); ?>#about"><li class="links">About</li></a>
                        <a href = "<?php echo base_url('gallery') ?>" <?php if($this->uri->segment(1) == 'gallery'): ?>class ="active"<?php endif; ?>><li class="links">Gallery</li></a>
                        <a href = "<?php echo base_url(); ?>#whatwedo"><li class="links">What we do</li></a>
                        <a href = "<?php echo base_url(); ?>#contact"><li class="links">Contact</li></a>
                    </ul>
                </div>
            </div>
        </nav>
  <!-- Parallax Slider -->





  <section class="home-slider">

    <nav class ="wi-navigation" >
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


<section style= "height : 50px;">
</section>
