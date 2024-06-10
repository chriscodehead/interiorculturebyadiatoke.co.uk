 <footer class="first-footer">
  <div class="top-footer bg-white-5">
   <div class="container">
    <div class="row">

     <div class="col-lg-4 col-md-6">
      <div class="netabout">
       <a href="./" class="logo">
        <img src="img/logo-new.png" alt="logo">
       </a>
       <p><?php print $siteName; ?> is a premier interior design firm dedicated to transforming spaces into beautiful, functional environments. </p>
      </div>
      <div class="contactus">
       <ul>
        <li>
         <div class="info">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p class="in-p"><?php print $siteName; ?></p>
         </div>
        </li>
        <li>
         <div class="info">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <p class="in-p"><?php print $sitePhone; ?></p>
         </div>
        </li>
        <li>
         <div class="info">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p class="in-p ti"><?php print $siteEmail ?></p>
         </div>
        </li>
       </ul>
      </div>
     </div>

     <div class="col-lg-4 col-md-6">
      <div class="navigation">
       <h3>Navigation</h3>
       <div class="nav-footer">
        <ul>
         <li><a href="./">Home</a></li>
         <li><a href="about">About Us</a></li>
         <li><a href="services">Services</a></li>
        </ul>
        <ul class="nav-right">
         <li><a href="portfolio">Portfolio</a></li>
         <li class="no-mgb"><a href="contact">Contact Us</a></li>
        </ul>
       </div>
      </div>
     </div>

     <div class="col-lg-4 col-md-6">
      <div class="widget">
       <h3>Social</h3>
       <div class="twitter-widget contuct">
        <div class="twitter-area">

         <div class="single-item">
          <div class="icon-holder">
           <i class="fa fa-facebook" aria-hidden="true"></i>
          </div>
          <div class="text">
           <h5><a href="<?php print $siteFacebook; ?>">Follow us on Facebook</h5>
          </div>
         </div>
         <div class="single-item">
          <div class="icon-holder">
           <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
          <div class="text">
           <h5><a href="<?php print $siteInstagram; ?>">Follow us on Instagram</h5>
          </div>
         </div>
         <div class="single-item">
          <div class="icon-holder">
           <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          <div class="text">
           <h5><a href="<?php print $siteTwitter; ?>">Follow us on Twitter</h5>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>

     <!-- <div class="col-lg-3 col-md-6">
      <div class="newsletters">
       <h3>Join Us</h3>
       <p>At <?php print $siteName; ?>, we understand that every project is unique, and we take the time to understand your vision and requirements. By providing us with some initial details, we can offer a customized quote that reflects the scope and specifics of your project. </p>
      </div>
     </div> -->

    </div>
   </div>
  </div>
  <div class="second-footer bg-white-3">
   <div class="container">
    <p><?php print $siteYear; ?> © Copyright <?php print $siteName; ?> - All Rights Reserved.</p>
    <p>By <a href="https://centadesk.com">Centadesk</a></p>
   </div>
  </div>
 </footer>

 <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>

 <div id="preloader">
  <div id="status">
   <div class="status-mes"></div>
  </div>
 </div>

 <script src="js/jquery.min.js"></script>
 <script src="js/tether.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/mmenu.min.js"></script>
 <script src="js/mmenu.js"></script>
 <script src="js/aos.js"></script>
 <script src="js/aos2.js"></script>
 <script src="js/slick.min.js"></script>
 <script src="js/slick.js"></script>
 <script src="js/jquery.easing.min.js"></script>
 <script src="js/smooth-scroll.min.js"></script>
 <script src="js/typed.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>
 <script src="js/lightcase.js"></script>
 <script src="js/owl.carousel.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>

 <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
 <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
 <script src="toast/jquery.toast.js"></script>
 <script src="toast/toast-functions.js"></script>

 <script>
  var tpj = jQuery;
  var revapi26;
  tpj(document).ready(function() {
   if (tpj("#rev_slider_26_1").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_26_1");
   } else {
    revapi26 = tpj("#rev_slider_26_1").show().revolution({
     sliderType: "standard",
     jsFileLocation: "revolution/js/",
     sliderLayout: "fullscreen",
     dottedOverlay: "none",
     delay: 9000,
     navigation: {
      keyboardNavigation: "off",
      keyboard_direction: "horizontal",
      mouseScrollNavigation: "off",
      mouseScrollReverse: "default",
      onHoverStop: "off",
      touch: {
       touchenabled: "on",
       touchOnDesktop: "off",
       swipe_threshold: 75,
       swipe_min_touches: 50,
       swipe_direction: "horizontal",
       drag_block_vertical: false
      },

      arrows: {
       style: "metis",
       enable: true,
       hide_onmobile: false,
       hide_onleave: false,
       tmp: '',
       left: {
        h_align: "right",
        v_align: "bottom",
        h_offset: 80,
        v_offset: 10
       },
       right: {
        h_align: "right",
        v_align: "bottom",
        h_offset: 10,
        v_offset: 10
       }
      },
      bullets: {
       enable: false,
       hide_onmobile: false,
       style: "bullet-bar",
       hide_onleave: false,
       direction: "horizontal",
       h_align: "right",
       v_align: "bottom",
       h_offset: 30,
       v_offset: 30,
       space: 5,
       tmp: ''
      }
     },
     responsiveLevels: [1240, 1024, 778, 480],
     visibilityLevels: [1240, 1024, 778, 480],
     gridwidth: [1270, 1024, 778, 480],
     gridheight: [729, 600, 600, 480],
     lazyType: "none",
     parallax: {
      type: "scroll",
      origo: "slidercenter",
      speed: 2000,
      levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
     },
     shadow: 0,
     spinner: "off",
     stopLoop: "off",
     stopAfterLoops: -1,
     stopAtSlide: -1,
     shuffle: "off",
     autoHeight: "off",
     fullScreenAutoWidth: "off",
     fullScreenAlignForce: "off",
     fullScreenOffsetContainer: ".site-header",
     fullScreenOffset: "0px",
     hideThumbsOnMobile: "off",
     hideSliderAtLimit: 0,
     hideCaptionAtLimit: 0,
     hideAllCaptionAtLilmit: 0,
     debugMode: false,
     fallbacks: {
      simplifyAll: "off",
      nextSlideOnWindowFocus: "off",
      disableFocusListener: false,
     }
    });
   }
  }); /*ready*/
 </script>
 <script>
  $('.home5-right-slider').owlCarousel({
   loop: true,
   margin: 30,
   dots: false,
   nav: true,
   rtl: false,
   autoplayHoverPause: false,
   autoplay: false,
   singleItem: true,
   smartSpeed: 1200,
   navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
   responsive: {
    0: {
     items: 1,
     center: false
    },
    480: {
     items: 1,
     center: false
    },
    520: {
     items: 2,
     center: false
    },
    600: {
     items: 2,
     center: false
    },
    768: {
     items: 2
    },
    992: {
     items: 3
    },
    1200: {
     items: 5
    },
    1366: {
     items: 5
    },
    1400: {
     items: 5
    }
   }
  });
 </script>

 <script src="js/script.js"></script>

 <script>
  $(window).on('scroll load', function() {
   $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
  });
 </script>
 <script>
  $('.style1').owlCarousel({
   loop: true,
   margin: 10,
   autoplay: true,
   autoplayTimeout: 5000,
   responsive: {
    0: {
     items: 1
    },
    400: {
     items: 1,
     margin: 20
    },
    500: {
     items: 1,
     margin: 20
    },
    768: {
     items: 2,
     margin: 20
    },
    991: {
     items: 2,
     margin: 20
    },
    1000: {
     items: 3,
     margin: 20
    }
   }
  });
 </script>

 <script>
  function contatMail() {
   $('i#sp5').attr("class", "fa fa-spinner fa-spin");
   var hr = new XMLHttpRequest();
   var url = "reg_process.php";
   var cotactmail = document.getElementById('email').value;
   var name = document.getElementById('name').value;
   var sname = document.getElementById('sname').value;
   var phone = document.getElementById('phone').value;
   var message = document.getElementById('message').value;
   var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message + "&sname=" + sname + "&phone=" + phone;
   if (cotactmail == "" || name == "" || message == "") {
    sweetUnpre("Please fill all necessary fields!");
    $('i#sp5').attr("class", "");
   } else {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(cotactmail)) {
     sweetUnpre('Please use a valid email address!');
     $('i#sp5').attr("class", "");
    } else {

     hr.open("POST", url, true);
     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     // Access the onreadystatechange event for the XMLHttpRequest object
     hr.onreadystatechange = function() {
      //  console.log(hr);
      if (hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
       sweetUnpre(return_data);
       $('i#sp5').attr("class", "");
       //setTimeout(refreshPage,2000);
       if (return_data == 'Internal error. Mail fail to send') {

       } else {
        document.getElementById('email').value = "";
        document.getElementById('name').value = "";
        document.getElementById('sname').value = "";
        document.getElementById('message').value = "";
        document.getElementById('subject').value = "";
        document.getElementById('phone').value = "";
       }
      }
     }
     hr.send(vars); // Actually execute the request
    } //email
    sweetUnpre('processing...');
   } //else empty
  }
 </script>

 </div>