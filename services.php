<?php
require_once('include.php');
$title = 'Our Services - ' . $siteName;
$description = '';
$keyword = '';
require_once('head.php'); ?>
<style>
  .card {
    width: 100%;
    height: 450px;
    border: 1px solid #ccc;
    border-radius: 0px;
    overflow: hidden;
  }

  .card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  @media (max-width: 767px) {
    .hide-on-mobile {
      display: none;
    }
  }
</style>

<body class="inner-page int_white_bg">

  <div id="wrapper">

    <?php require_once('header.php'); ?>
    <div class="clearfix"></div>

    <section class="headings2">
      <div class="text-heading">
        <div class="container">
          <h1 class="text-center">Our Services</h1>
        </div>
      </div>
    </section>

    <section class="all-services" style="padding-top: 50px;">
      <div class="container">
        <div class="section-title">
          <h3>Services</h3>
        </div>
        <div class="row mt-50">

          <?php $sql = query_sql("SELECT * FROM $services_tb ORDER BY id ASC");
          $i = 1;
          if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) {

              if ($row['type'] === 'img') {
          ?>
                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                  <div class="item mb-30">
                    <div class="service-box">
                      <figure style="height: 100%;" class="img-box">
                        <a href="#" class="card"><img src="<?php print 'photo/' . $row['big_image']; ?>" alt=""></a>
                      </figure>
                      <div class="clearfix service-inner-box" style="height: 300px;">
                        <div class=service-icon-box><img src="images/services/1.png" alt=""></div>
                        <div class="service-content-box">
                          <h3 class="pt-3"><a href="#"><?php print strtoupper($row['title']); ?></a></h3>
                          <p><?php print $row['description']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } else { ?>

                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                  <div class="item mb-30">
                    <div class="service-box">
                      <figure style="height: 100%;" class="img-box">
                        <a href="#" class="card">
                          <video src="<?php print 'video/' . $row['big_image']; ?>" autoplay muted loop style="width: 100%; height: auto;"></video>
                        </a>
                      </figure>
                      <div class="clearfix service-inner-box" style="height: 300px;">
                        <div class="service-icon-box"><img src="images/services/1.png" alt=""></div>
                        <div class="service-content-box">
                          <h3 class="pt-3"><a href="#"><?php print strtoupper($row['title']); ?></a></h3>
                          <p><?php print $row['description']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

            <?php $i++;
            }
          } else { ?>
          <?php } ?>




        </div>
      </div>
    </section>

    <?php require_once('footer.php'); ?>
</body>

</html>