<?php
require_once('include.php');
$title = 'Contact Us - ' . $siteName;
$description = '';
$keyword = '';
require_once('head.php'); ?>

<body class="inner-page int_white_bg">

 <div id="wrapper">

  <?php require_once('header.php'); ?>
  <div class="clearfix"></div>

  <section class="headings">
   <div class="text-heading">
    <div class="container">
     <h1 class="text-center">CONTACT US</h1>
    </div>
   </div>
  </section>

  <section id="contact" class="contact bg-white-3" style="padding-top: 40px;">
   <div class="container">
    <div class="section-title ml-3">
     <h3>Have a Question?</h3>
    </div>
    <div class="row">
     <div class="col-md-8">
      <form id="contactform" class="contact-form" name="contactform" method="post" enctype="multipart/form-data" novalidate>
       <div id="success" class="successform">
        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
       </div>
       <div id="error" class="errorform">
        <p>Something went wrong, try refreshing and submitting the form again.</p>
       </div>
       <div class="form-group">
        <input type="text" required class="form-control input-custom input-full" name="name" id="name" placeholder="First Name">
       </div>
       <div class="form-group">
        <input type="text" required class="form-control input-custom input-full" name="sname" id="sname" placeholder="Last Name">
       </div>
       <div class="form-group">
        <input type="text" class="form-control input-custom input-full" name="email" id="email" placeholder="Email">
       </div>
       <div class="form-group">
        <input type="tel" class="form-control input-custom input-full" name="phone" id="phone" placeholder="Phone Number">
       </div>
       <div class="form-group">
        <textarea class="form-control textarea-custom input-full" id="message" name="message" required rows="8" placeholder="Message"></textarea>
       </div>
       <div class="box bg-3">
        <button type="button" onclick="contatMail()" id="submit" class="button button--wayra button--border-thick button--text-upper button--size-s">Submit</button>
       </div>
      </form>
     </div>

     <div class="col-md-4 info-touch">
      <h4>Keep In Touch</h4>
      <div class="my-info">
       <div class="in1">
        <div class="address">
         <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php print $siteAddress; ?></p>
        </div>
        <div class="email">
         <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php print $siteEmail; ?></p>
        </div>
       </div>
       <div class="in1">
        <div class="phone">
         <p><i class="fa fa-phone" aria-hidden="true"></i> <?php print $sitePhone; ?></p>
        </div>
        <div style="display: none;" class="whatssap">
         <p><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php print $sitePhone; ?></p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <div id="contact-map" class="map-area">
   <div id="googleMap" style="width:100%;height:500px;"></div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8kOYB_m_UPPC2xnEd7ddYKww8jO1819k"></script>
  <script src="js/map.js"></script>

  <?php require_once('footer.php'); ?>
</body>

</html>