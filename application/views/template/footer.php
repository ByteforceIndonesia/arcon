 <!-- Parallax  -->
  <section class="parallax-window2" data-parallax="scroll" data-image-src="<?php echo $parallax_two?>"></section>


  <!-- Team -->
   <section class="content-contacts" id="contact">
     <div class="container-fluid">
     <div class="">
       <div class="row wrapper">
         <div class="marketingPhone breakword slick-car">
             <?php foreach ($team as $people): ?>
               <div class="breakword">
                 <li>
                   <div class="contact-profile-picture">
                     <center>
                       <img src="<?php echo base_url() . $people->image ?>" width="125px" height="125px"/>
                     </center>
                   </div>
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
               </div>
             <?php endforeach; ?>
         </div>
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
    <script src="<?php echo base_url() ?>assets/js/slick/slick.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>

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

<!-- Animations -->
<script type="text/javascript">
    var whatwedo = new Waypoint({
      element: document.getElementById('whatwedo'),
      handler: function() {
        $('.what-1').addClass('slideInUp');
          setTimeout(function() {$('.what-2').addClass('slideInUp')}, 50);
            setTimeout(function() {$('.what-3').addClass('slideInUp')}, 100);
      },
      offset: '95%'
    })
</script>

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
             $('.wi-navigation-mob').addClass('fadeinRight');
          });

        $('.links').click(function (){
            $('.wi-navigation-mob').css('display','none');
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

           $('#homeSliderParalax').slick({

             arrows: true,
             autoplay: true,
             autoplaySpeed: 2000
           });

           $('.slick-car').slick({
              arrows: true,
              slidesToShow: 5,
              slidesToScroll: 5,
              responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
           })

           $('.parallax-buskwak').parallax({imageSrc: '#buskwak'});
             var parax = $('.parallax-slider');


             var type = 0;
             var userAgent = navigator.userAgent || navigator.vendor || window.opera;

               // Windows Phone must come first because its UA also contains "Android"
             if (/windows phone/i.test(userAgent)) {
               var parax =$('.parallax-buskwak');
                 console.log("Windows Phone");
                 type=1;
             }

             if (/android/i.test(userAgent)) {
               var parax =$('.parallax-buskwak');
                  console.log( "Android");
                  type=1;
             }

             // iOS detection from: http://stackoverflow.com/a/9039885/177710
             if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
               var parax =$('.parallax-buskwak');
                  console.log( "iOS");
                  type=1;
             }



            $('.parallax-window').parallax({imageSrc: ''});
                      //console.log();
            $('.parallax-slider').attr("src","assets/images/slider/1.jpg");
            var thisId=0;
            $(function(){
              //prepare Your data array with img urls
              var dataArray=new Array();
              dataArray[0]="<?php echo base_url() ?>assets/images/slider/1.jpg";
              dataArray[1]="<?php echo base_url() ?>assets/images/slider/2.jpg";
              dataArray[2]="<?php echo base_url() ?>assets/images/slider/3.jpg";
              dataArray[3]="<?php echo base_url() ?>assets/images/slider/4.jpg";

              //start with id=0 after 5 seconds



                if(type=1){
                                            parax.css('background-image',"url('"+dataArray[thisId]+"')");

                }
              window.setInterval(function(){

                      parax.addClass('transparentClass');
                  setTimeout(function () {
                    if(type=0){
                        parax.attr('src',dataArray[thisId]);
                      } else{

                            parax.css('background-image',"url('"+dataArray[thisId]+"')");
                      }
                  }, 400);
                  setTimeout(function () {
                    parax.removeClass('transparentClass');
                  }, 400);

                  thisId++; //increment data array id
                  if (thisId==3) thisId=0; //repeat from start
              },6000);
          });
  </script>

  <div class="preload">
     <img src="<?php echo base_url() ?>assets/images/slider/1.jpg" width="1" height="1" alt="Image 01" />
     <img src="<?php echo base_url() ?>assets/images/slider/2.jpg" width="1" height="1" alt="Image 02" />
     <img src="<?php echo base_url() ?>assets/images/slider/3.jpg" width="1" height="1" alt="Image 03" />
     <img src="<?php echo base_url() ?>assets/images/slider/4.jpg" width="1" height="1" alt="Image 03" />
  </div>

</body>
</html>
