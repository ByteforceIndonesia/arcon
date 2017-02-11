<!-- Parallax  -->
 <section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_two?>"></section>

<!-- Team -->
  <section class="content-contacts" id="contact">
    <div class="container-fluid">
    <div class="">
      <div class="row row-horizon wrapper">

        <ul class="marketingPhone breakword">
            <li class="col-lg-1 hidden-md hidden-sm hidden-xs"></li>
            <?php foreach ($team as $people): ?>
                <li class="col-lg-2 col-md-4 col-sm-6 col-xs-12 breakword"><div class="contact-profile-picture"><img src="<?php echo base_url() . $people->image ?>" width="125px" height="125px"/></div>
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
    </div>
  </section>

<!-- Parallax -->
<section class="parallax-windowz" data-parallax="scroll" data-image-src="<?php echo $parallax_three?>"></section>

<!-- Footer -->
<footer class="content-footer">
   <div class="container">
     <div class="col-lg-3">

         <center><img src="<?php echo $company_logo ?>" alt="" style="max-width:255px;" class="logo-footer"></center>
          <br>
     </div>
     <div class="col-lg-9">
       <div class="col-lg-6">
          <p class="col-lg-12">
            Head Office & Studio : <br>
              <span style="padding-top:1em;">
                  <?php echo $offices->value_one; ?>
              </span>
          </p>
<br>
          <p class="col-lg-12">
            Workshop :<br>
              <span style="padding-top:1em;">
                  <?php echo $offices->value_two; ?>
              </span>
          </p>
        </div>

<div class="col-lg-6 contact-us">
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
 <script src="<?php echo base_url() ?>assets/js/lity.js"></script>

<!-- Disable right click -->
<!--
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
-->

<!--Smooth Scrolling-->
<script type="text/javascript">
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
</script>

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


            $('.wi-navigation').css("position", "fixed");
            $('.wi-navigation').css("top", "0px");
            $('.wi-navigation').css("bakground-color", "white");
            $('.wi-navigation').css("bottom", "auto");$('.wi-navigation a').css("color", `#000`);
            $('.wi-navigation-right').find('li:after').css("background-color", "#000");
           $('.wi-navigation-right').addClass('wnrBlack');
     
        $(function() {
                 var div = $('.ImagePack');
                 var width = div.width()*0.55;
                 var margin = width*0.85;
                 var text =   div.find( '.galleryImageTitle' );
                 var textWidth = text.height();

                 div.css('height', width);
                 text.css('margin-top', margin-textWidth);
             });

 </script>
</body>
</html>
