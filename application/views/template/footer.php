 <footer class="content-footer">
    <div class="container">
      <div class="col-lg-3">

          <img src="<?php echo $company_logo ?>" alt="" class="logo-footer">
      </div>
      <div class="col-lg-9">
        <div class="col-lg-6">
          <p class="col-lg-12">Head Office & Studio
          Jl. Letnan Simanjuntak No.839
          RT 14 / RW 06, Kelurahan Pahlawan
          Palembang 30126, Sumatera Selatan - Indonesia</p>


          <p class="col-lg-12">Workshop
          Jl. Letnan Simanjuntak No.839
          RT 14 / RW 06, Kelurahan Pahlawan
          Palembang 30126, Sumatera Selatan - Indonesia</p>
        </div>

<div class="col-lg-6">
  <p>Complete the form so we can better understand your needs.
If you have questions that require immediate attention,
please visit us or contact our phone number above:</p>

  <?php echo form_open('home/email', array('class' => 'contact-form')); ?>
    <input type = "text" class="form-control nama" name= "nama" id = "nama" placeholder="Enter Your Name"/>
    <input type = "text" class="form-control nama" name= "nama" id = "nama" placeholder="How can we contact you? (Phone/Email)"/>
    <input type = "textarea" class="form-control message-text-area" name= "nama" id = "nama" placeholder="Enter Your Message" wrap="on" rows="3" />
    <input type = "submit" class="form-control" name= "nama" id = "nama" placeholder="Enter Your Message"/>
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
          //console.log(a);
   }
   if(wS < $('#paralax-home').innerHeight()-64){
     $('.wi-navigation').css("position", "absolute");
     $('.wi-navigation').css("top", "auto");
     $('.wi-navigation').css("bottom", "0px");$('.wi-navigation a').css("color", `rgb(${a},${a},${a})`);

   }
  });
  
//$('message-text-area').autoResize();

  </script>
</body>
</html>
