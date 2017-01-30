 <!-- Parallax  -->
  <section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_two?>"></section>

 <!-- Team -->
  <section class="content-contacts" id="contact">
    <div class="container">
      <div class="col-lg-12">

        <ul class="marketingPhone"><li  class="col-lg-1 hidden-sm hidden-xs"></li>
            <?php foreach ($team as $people): ?>
                <li class="col-lg-2 col-md-2 col-sm-6 col-xs-12"><div class="contact-profile-picture"><img src="<?php echo base_url() . $people->image ?>"/></div>
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

<!-- Parallax -->
 <section class="parallax-windowz" data-parallax="scroll" data-image-src="<?php echo $parallax_three?>"></section>

 <!-- Footer -->
 <footer class="content-footer">
    <div class="container">
      <div class="col-lg-3">

          <img src="<?php echo $company_logo ?>" alt="" class="logo-footer">
      </div>
      <div class="col-lg-9">
        <div class="col-lg-6">
          <p class="col-lg-12">
            <?php echo $offices->value_one; ?>
          </p>

          <p class="col-lg-12">
            <?php echo $offices->value_two; ?>
          </p>
        </div>

<div class="col-lg-6">
  <p><?php echo $contact_us ?></p>

  <?php echo form_open('home/email', array('class' => 'contact-form')); ?>
    <input type = "text" class="form-control nama" name= "nama" id = "nama" placeholder="Enter Your Name"/>
    <input type = "text" class="form-control nama" name= "contact" id = "nama" placeholder="How can we contact you? (Phone/Email)"/>
    <input type = "textarea" class="form-control message-text-area" name= "message" id = "nama" placeholder="Enter Your Message" wrap="on" rows="3" />
    <input type = "submit" class="form-control" id = "nama" placeholder="Enter Your Message"/>
  <?php echo form_close() ?>
</div>

      </div>
    </div>
  </footer>





  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/parallax.js"></script>


  <script>
     $('.wi-navigation-mob').css('display','none');

          $('#navbarLink').click(function(){
             $('.wi-navigation-mob').css('display','block');
          });

        $('.wi-navigation-mob').click(function(){
           $('.wi-navigation-mob').css('display','none');
        });
           $('.wi-navigation-mob a').click(function(){
              $('.wi-navigation-mob').css('opacity','0.5');
           });

           $(window).scroll(function() {
            var hT = $('.wi-navigation').offset().top,
                hH = $('.wi-navigation').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            if (wS>= 100){
              $('.wi-navigation').css("position", "fixed");
              $('.wi-navigation').css("top", "0px");
              $('.wi-navigation').css("bottom", "auto");
             var a = (($('#paralax-home').innerHeight()-wS)/64)*255;
                   $('.wi-navigation').css("background-color", `rgba(255,255,255,${(wS-$('#paralax-home').innerHeight()+64)/64})`);


                        console.log(a);
            }
            if(wS < $('#paralax-home').innerHeight()-64){
              $('.wi-navigation').css("position", "absolute");
              $('.wi-navigation').css("top", "auto");
              $('.wi-navigation').css("bottom", "0px");$('.wi-navigation a').css("color", `#fff`);
             $('.wi-navigation-right').removeClass('wnrBlack');

            }

            if(wS > $('#paralax-home').innerHeight()-64){
              $('.wi-navigation').css("position", "fixed");
              $('.wi-navigation').css("top", "0px");
              $('.wi-navigation').css("bottom", "auto");$('.wi-navigation a').css("color", `#000`);
              $('.wi-navigation-right').find('li:after').css("background-color", "#000");
             $('.wi-navigation-right').addClass('wnrBlack');

            }
           });

//$('message-text-area').autoResize();

  </script>
</body>
</html>
