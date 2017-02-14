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
            <a href="<?php echo base_url('gallery/residential') ?>"><li>Residential</li></a>
            <a href="<?php echo base_url('gallery/comercial') ?>"><li>Comercial</li></a>
            <a href="<?php echo base_url('gallery/others') ?>"><li>Other Projects</li></a>
      </ul>
    </div>
    <div class="col-lg-9 imageContainer">
      <div>
          <div class="col-lg-12 contentProduct">
            <div class="galleryTitle">
                        <h2><?php echo $project->name ?></h2>
                        <hr class = "productPageLine">
                <span class="productPageAlamat"><?php echo $project->description ?></span><br><br>

            </div>
              <div class= "ImagePackBig">
                    <center>
                  <img src="<?php echo base_url() . $project->images ?>" alt="" class="firstImage" width = "100%">
                    </center>
                  </div>

              </div>
          </div>

          <div class="image">
            <div class="col-lg-12">

              <!-- Kiri -->
              <div class="col-lg-6">
                  <?php
                    $images = glob($project->datas . "/*.jpg");

                    foreach($images as $count => $image):
                    if($count > count($images)/2)break;
                  ?>
                    <div class= "ImagePackOne">
                    <center>
                          <img src="<?php echo base_url() . $image ?>" alt="" class="smallImage" width = "100%">
                    </center>
                        </div>
                 <?php
                    endforeach;
                  ?>
              </div>


              <!-- Kanan -->
              <div class="col-lg-6">
                  <?php
                    foreach($images as $count => $image):
                    if($count < count($images)/2)continue;
                  ?>
                        <a href="<?php echo base_url() . $image ?>" data-lity data-lity-desc="">
                        <div class= "ImagePackOne">
                          <img src="<?php echo base_url() . $image ?>" alt="" class="smallImage" width = "100%">
                        </div>
                        </a>
                   <?php
                        endforeach;
                    ?>
               </div>

          </div>
      </div>
    </div>
  </div>
</section>
