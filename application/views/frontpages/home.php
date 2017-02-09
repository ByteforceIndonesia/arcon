<section class="content" id="about">
  <div class="container">
    <div class="col-lg-3">
      <!-- Logo -->
      <center><img src="<?php echo $company_logo ?>" alt="" class="logo-content" style="max-width:255px;"></center>

      <!-- About -->
      <div class="content-menu-line"></div>
      <div class="content-menu">
          <h3 class ="content-menu-title">ABOUT</h3>
      </div>
      <div class="content-menu-line-under"></div>
      <br>
      <ul class="content-menu-links">
        <p>
            <?php echo $about_text->value ?>
        </p>
      </ul>
    </div>
    <div class="col-lg-9 imageContainer">

    <!-- Motto -->
      <div class="">
        <div class="image">
          <img src="<?php echo base_url() . $about_text->images ?>" alt="" class="largeImage col-lg-12" width = "100%">

          <img src="<?php echo base_url() . $about_motto->images ?>" alt="" class="smallImage col-lg-8" width = "100%">
          <div class="col-lg-4">
            <p class="ourMotto">
                <?php echo $about_motto->value ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery -->
<section class="Gallery" id="gallery">
  <a href = "<?php echo base_url('gallery/residence') ?>">
    <div class="galleryResidence galleryMenu" style="background-image : url('<?php echo base_url() . $gallery_banner_residence ?>');"><div class="galleryMargin"></div>
      <div class="galleryText">RESIDENCE</div>
    </div>
  </a>
  <a href = "<?php echo base_url('gallery/comercial') ?>">
    <div class="galleryComercial galleryMenu" style="background-image : url('<?php echo base_url() . $gallery_banner_comercial ?>');"><div class="galleryMargin"></div>
      <div class="galleryText">COMERCIAL</div>
    </div>
  </a>
</section>

<!-- Parallax One -->
<section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_one?>"></section>

<!-- Portfolio -->
  <section class="content-whatWeDo" id="whatwedo">
    <div class="container">
      <div class="col-lg-3">

        <div class="content-menu-line"></div>
        <div class="content-menu">
            <h3 class ="content-menu-title">WHAT WE DO</h3>
        </div>
        <div class="content-menu-line-under"></div>
        <br>
        <ul class="content-menu-links">
          <p>We offer 3 kinds of service including : construction, interior, and renovation.</p>
        </ul>
      </div>
        <br><br>
      <div class="col-lg-9 imageContainer">

        <?php $counter = 0; foreach($wedo as $what): $counter++;?>
        <div class="">
          <div class="image">
            <div class="col-lg-4 serviceType">
              <h2 class="col-lg-12 wwdTitle"><?php echo $counter . '. ' . $what->name; ?></h2>
              <img src="<?php echo base_url() . $what->link; ?>" alt="" class="" width = "100%">
              <ul class="serviceList">
                <?php echo $what->text; ?>
              </ul>
            </div>
            <br>
        <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </section>
