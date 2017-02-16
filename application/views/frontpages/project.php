<section class="content-gallery">
  <div class="container">
    <div class="row">
    <div class="col-lg-3">

      <div class="content-menu-line"></div>
      <div class="content-menu">
          <h3 class ="content-menu-title">GALLERY</h3>
      </div>
      <div class="content-menu-line-under"></div>
      <br>
      <ul class="content-menu-links">
            <a href="<?php echo base_url('gallery/residential') ?>"><li>Residential</li></a>
            <a href="<?php echo base_url('gallery/comercial') ?>"><li>Commercial</li></a>
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

            <!-- Design -->
            <?php $design_images = glob($project->datas . "/design/*.{jpg,png,gif}", GLOB_BRACE); ?>
            <div class="col-lg-12">
            <?php if(!empty($design_images)): ?><h2 style="padding-left:0.5em">Design</h2><?php endif; ?>
              <!-- Kiri -->
              <div class="col-lg-6">
                  <?php
                    foreach($design_images as $count => $image):
                    if (count($design_images) % 2 == 0)
                    {
                      if($count > count($design_images)/2)break;
                    }else {
                      if($count > count($design_images)/2-1)break;
                    }
                  ?>
                  <a href="<?php echo base_url() . $image ?>" data-lity data-lity-desc="">
                    <div class= "ImagePackOne">
                    <center>
                          <img src="<?php echo base_url() . $image ?>" alt="" class="smallImage" width = "100%">
                    </center>
                        </div>
                  </a>
                 <?php
                    endforeach;
                  ?>
              </div>


              <!-- Kanan -->
              <div class="col-lg-6">
                  <?php
                    foreach($design_images as $count => $image):
                    if($count < count($design_images)/2)continue;
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

          <!-- Result -->
          <?php $result = glob($project->datas . "/result/*.{jpg,png,gif}", GLOB_BRACE); ?>
          <div class="col-lg-12">
          <?php if(!empty($result)): ?><h2 style="padding-left:padding-left:0.5em">Result</h2><?php endif; ?>
            <!-- Kiri -->
            <div class="col-lg-6">
                <?php
                  foreach($result as $count => $image):
                  if (count($result) % 2 == 0)
                  {
                    if($count > count($result)/2)break;
                  }else {
                    if($count > count($result)/2-1)break;
                  }
                ?>
                <a href="<?php echo base_url() . $image ?>" data-lity data-lity-desc="">
                  <div class= "ImagePackOne">
                  <center>
                        <img src="<?php echo base_url() . $image ?>" alt="" class="smallImage" width = "100%">
                  </center>
                      </div>
                </a>
               <?php
                  endforeach;
                ?>
            </div>


            <!-- Kanan -->
            <div class="col-lg-6">
                  <?php
                    foreach($result as $count => $image):
                    if($count < count($result)/2)continue;
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
</div>
</section>
