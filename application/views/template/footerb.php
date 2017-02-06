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
 <script src="<?php echo base_url() ?>assets/js/lity.js"></script>


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
            $('.wi-navigation').css("background-color", "white");
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
//$('message-text-area').autoResize();

 </script>
</body>
</html>
