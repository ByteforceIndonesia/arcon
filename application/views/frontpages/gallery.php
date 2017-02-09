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
      <div class="">
          <div class="col-lg-12">
          <div class="image">
            <div class="col-lg-12">
              <div class="col-lg-6 nopadding-left">
      <br><br>
              <?php 
                foreach($gallery as $count => $project): 
                if($count > count($gallery)/2) break;
              ?>
                <a href= "<?php echo base_url('gallery/project/' . $project->project_uuid) ?>">
                    <div class= "ImagePack">
                        <span class="galleryImageTitle"><?php echo $project->name ?></span>
                        <img src="<?php echo base_url() . $project->images ?>" alt="" class="smallImage" width = "100%">
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            
              <div class="col-lg-6 nopadding-right">
              <?php 
                foreach($gallery as $count => $project): 
                if($count < count($gallery)/2) continue; 
                if($count > count($gallery)) break;
              ?>
                <a href= "#">
                    <div class= "ImagePack">
                        <span class="galleryImageTitle">Antaya Tour Palembang Icon Mall</span>
                        <img src="assets/images/10.jpg" alt="" class="smallImage" width = "100%">
                    </div>
                </a>
              <?php endforeach; ?>
              </div>
          </div>

          </div>
      </div>
    </div>
  </div>
</section>