<section class="content">
  <div class="container">
    <div class="col-lg-3">
      <!-- Logo -->
      <img src="<?php echo $company_logo ?>" alt="" class="logo-content">

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

<!-- Parallax One -->
<section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_one?>"></section>

<!-- Gallery -->
<section class="content-gallery">
  <div class="container">
    <div class="col-lg-3">

      <div class="content-menu-line"></div>
      <div class="content-menu">
          <h3 class ="content-menu-title">GALLERY</h3>
      </div>
      <div class="content-menu-line-under"></div>
      <br>
      <ul class="content-menu-links">
        <a href=""><li>Residence</li></a>
          <a href=""><li>Comercial</li></a>
            <a href=""><li>Other Projects</li></a>
      </ul>
    </div>
    <div class="col-lg-9 imageContainer">

      <div class="">
          <div class="image">
            <div class="col-lg-8">
              <img src="<?php echo base_url() . $gallery_banner->image ?>" alt="" class="firstImage" width = "100%">

              <div class="col-lg-6 nopadding-left">
              <?php foreach ($galleries as $count => $ones): ?>
                <?php if($count > 3) break; ?>
                <img src="<?php echo base_url() . $ones->image ?>" alt="" class="smallImage" width = "100%">
              <?php endforeach; ?>
              </div>

              <div class="col-lg-6 nopadding-right">
              <?php foreach ($galleries as $count => $ones): ?>
                <?php if($count > 6) {
                  break;
                }else if($count<3) {
                  continue;
                }?>
                <img src="<?php echo base_url() . $ones->image ?>" alt="" class="smallImage" width = "100%">
              <?php endforeach; ?>
              </div>
          </div>

            <div class="col-lg-4">
            <?php foreach ($galleries as $count => $ones): ?>
                <?php if($count > 10) {
                  break;
                }else if($count<6) {
                  continue;
                }?>
              <img src="<?php echo base_url() . $ones->image ?>" alt="" class="smallImage" width = "100%">
            <?php endforeach; ?>
            </div>
          </div>
      </div>

    </div>
  </div>
</section>

<!-- Parallax Two -->
<section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_two?>"></section>

<!-- Portfolio -->
  <section class="content-whatWeDo">
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
      <div class="col-lg-9 imageContainer">

        <div class="">
          <div class="image">
            <div class="col-lg-4 serviceType">
              <h3 class="col-lg-12 wwdTitle"><center>1. CONSTRUCTION</center></h3>
              <img src="images/10.jpg" alt="" class="" width = "100%">
              <ul class="serviceList">
                <li>Residence</li>
                <li>Elite Residence</li>
                <li>Town House</li>
              </ul>
            </div>

            <div class="col-lg-4 serviceType">
              <h3 class="col-lg-12 wwdTitle"><center>2. INTERIOR</center></h3>
              <img src="images/10.jpg" alt="" class="" width = "100%">
              <ul class="serviceList">
                <li>Intrior space Planning</li>
                <li>Interior Decoration</li>
                <li>Furniture Detailing</li>
              </ul>
            </div>

            <div class="col-lg-4 serviceType">
              <h3 class="col-lg-12 wwdTitle"><center>3. RENOVATION</center></h3>
              <img src="images/10.jpg" alt="" class="" width = "100%">
              <ul class="serviceList">
                <li>Residence</li>
                <li>Elite Residence</li>
                <li>Town House</li>
                <li>Shop</li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Parallax 3 -->
  <section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_three?>"></section>


  <!-- Team -->
  <section class="content-contacts">
    <div class="container">
      <div class="col-lg-12">

        <ul class="marketingPhone"><li  class="col-lg-1"></li>
            <?php foreach ($team as $people): ?>
                <li class="col-lg-2"><div class="contact-profile-picture"><img src="<?php echo base_url() . $people->image ?>"/></div>
                    <span class="contact-name">
                        <?php echo $people->name ?>
                    </span>
                    <br>
                    <span class="contact-details">
                        <?php echo $people->phone ?>
                        <br>
                        <?php echo $people->email ?>
                    </span>
                </li>

            <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </section>

<!-- Parallax Four -->
 <section class="parallax-windowz" data-parallax="scroll" data-image-src="<?php echo $parallax_four?>"></section>
