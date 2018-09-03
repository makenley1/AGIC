<div class="Footop-newsletter">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        <div class="Footop-title">
         <h5>Abonner-vous</h5>
        </div>
        <input type="text" id="mc_email1" class="field-input" name="mc_email" placeholder=" Enter Your Email Address...">
        <input class="subscribe-btn bgcolor" id="btn_newsletter_1" type="submit" value="Sign Up">
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left pt-5 ">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div> 
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
        </ul>
      </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
      <ul class="list-unstyled list-inline social text-center">
        <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook-f"></i> </a> </li>
        <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i> </a> </li>
        <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus-g"></i> </a> </li>
        <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-linkedin"></i> </a> </li>
        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-youtube"></i> </a> </li>
        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-vimeo-square"></i></a> </li>
      </ul>
    </div> 
    <hr>
  </div>  
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
      <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
      <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a> </p>
    </div> <hr>
  </div>
</section>


<script>
  var myVar;
  function myFunction() {
    myVar = setTimeout(showPage, 1000);
  }

  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
</script>
      

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<script type="text/javascript">
  $(document).ready(function(){
  // invoke the carousel
  $('#myCarousel').carousel({
    interval:6000
  });
  // scroll slides on mouse scroll 
  $('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){
    if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
        $(this).carousel('prev');  
    }
    else{
        $(this).carousel('next');
  
    }
  });

//scroll slides on swipe for touch enabled devices 

  $("#myCarousel").on("touchstart", function(event){
 
        var yClick = event.originalEvent.touches[0].pageY;
      $(this).one("touchmove", function(event){

        var yMove = event.originalEvent.touches[0].pageY;
        if( Math.floor(yClick - yMove) > 1 ){
            $(".carousel").carousel('next');
        }
        else if( Math.floor(yClick - yMove) < -1 ){
            $(".carousel").carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});
    
});
//animated  carousel start
$(document).ready(function(){

//to add  start animation on load for first slide 
$(function(){
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });
       $('.item1.active img').animateCss('slideInDown');
       $('.item1.active h2').animateCss('zoomIn');
       $('.item1.active p').animateCss('fadeIn');
       
});
  
//to start animation on  mousescroll , click and swipe


 
     $("#myCarousel").on('slide.bs.carousel', function () {
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });
  
// add animation type  from animate.css on the element which you want to animate

    $('.item1 img').animateCss('slideInDown');
    $('.item1 h2').animateCss('zoomIn');
    $('.item1 p').animateCss('fadeIn');
    
    $('.item2 img').animateCss('zoomIn');
    $('.item2 h2').animateCss('swing');
    $('.item2 p').animateCss('fadeIn');
    
    $('.item3 img').animateCss('fadeInLeft');
    $('.item3 h2').animateCss('fadeInDown');
    $('.item3 p').animateCss('fadeIn');
    });
  });

</script>