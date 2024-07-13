<?php
require_once('include.php');
$title = 'Our Portfolio - ' . $siteName;
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
          <h1 class="text-center">Projects</h1>
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio" style="padding-top: 30px; padding-bottom: 30px; background: black; display: none;">
      <div class="container-fluid">
        <div class="section-title">
          <h3 style="color: white;">Our Portfolio</h3>
        </div>
        <div class="filters-group">
          <ul>
            <li style="display: none;" class="active" data-filter="*">Show All</li>
          </ul>
        </div>
        <div class="row portfolio-items">


          <?php $sql = query_sql("SELECT * FROM $portfolio_tb ORDER BY id DESC LIMIT 9");
          $i = 1;
          if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) {

              if ($row['type'] === 'vd') {
          ?>

                <div style="display: none;" class="item col-lg-6 col-md-6 landscapes people ">
                  <div class="single-portfolio">
                    <div class="portfolio-img">
                      <img src="<?php print 'photo/' . $row['big_image']; ?>" alt="" width="840" />
                      <div class="portfolio-view">
                        <div class="item-wrap">
                          <a class="img-poppu" href="<?php print 'photo/' . $row['big_image']; ?>" data-rel="lightcase:myCollection:slideshow">
                            <span class="plus"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-text">
                      <a href="#">
                        <h4><?php print $row['title']; ?></h4>
                      </a>
                      <span><?php print $row['description']; ?></span>
                    </div>
                  </div>
                </div>

                <div style="display: none;" class="item col-lg-6 col-md-6 landscapes people ">
                  <div class="single-portfolio">
                    <div class="portfolio-img">
                      <video src="<?php print 'video/' . $row['big_image']; ?>" alt="" width="840" autoplay muted loop style="width: 100%; height: auto;"></video>
                      <div class="portfolio-view">
                        <div class="item-wrap">
                          <a class="img-poppu" href="<?php print 'video/' . $row['big_image']; ?>" data-rel="lightcase:myCollection:slideshow">
                            <span class="plus"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-text">
                      <a href="#">
                        <h4><?php print $row['title']; ?></h4>
                      </a>
                      <span><?php print $row['description']; ?></span>
                    </div>
                  </div>
                </div>

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

              <?php } else { ?>




              <?php } ?>


            <?php $i++;
            }
          } else { ?>
          <?php } ?>

          <div class="item col-lg-6 col-sm-6 col-xs-12 people landscapes no-gutters">
            <div class="single-portfolio">
              <div class="portfolio-img">
                <img src="images/project/p-13.jpg" alt="" width="840" />
                <div class="portfolio-view">
                  <div class="item-wrap">
                    <a class="img-poppu" href="images/project/p-13.jpg" data-rel="lightcase:myCollection:slideshow">
                      <span class="plus"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="portfolio-text">
                <a href="#">
                  <h4>Interior Project</h4>
                </a>
                <span>Develoment</span>
              </div>
            </div>
          </div>

          <div class="item it2 col-lg-6 col-md-6 people no-gutters">
            <div class="single-portfolio">
              <div class="portfolio-img">
                <img src="images/project/p-17.jpg" alt="" width="840" />
                <div class="portfolio-view">
                  <div class="item-wrap">
                    <a class="img-poppu" href="images/project/p-17.jpg" data-rel="lightcase:myCollection:slideshow">
                      <span class="plus"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="portfolio-text">
                <a href="#">
                  <h4>Interior Project</h4>
                </a>
                <span>Develoment</span>
              </div>
            </div>
          </div>

          <div class="item it2 col-lg-6 col-md-6 people no-gutters">
            <div class="single-portfolio">
              <div class="portfolio-img">
                <img src="img/Interior-Culture-by-Adiat-Oke-18.jpg" alt="" width="840" />
                <div class="portfolio-view">
                  <div class="item-wrap">
                    <a class="img-poppu" href="img/Interior-Culture-by-Adiat-Oke-18.jpg" data-rel="lightcase:myCollection:slideshow">
                      <span class="plus"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="portfolio-text">
                <a href="#">
                  <h4>Interior Project</h4>
                </a>
                <span>Develoment</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-items">

          <?php $sql = query_sql("SELECT * FROM $portfolio_tb ORDER BY id DESC ");
          $i = 1;
          if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) {

              if ($row['type'] === 'vd') {
          ?>

                <div class="item col-md-6 col-sm-6 col-xs-12 landscapes">
                  <div class="single-portfolio">
                    <div class="portfolio-img">
                      <video src="<?php print 'video/' . $row['big_image']; ?>" width="840" autoplay muted loop style="width: 100%; height: auto;"></video>
                      <div class="portfolio-view">
                        <div class="item-wrap">
                          <a class="img-poppu" href="<?php print 'video/' . $row['big_image']; ?>" data-rel="lightcase:myCollection:slideshow">
                            <span class="plus"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-title">
                    <h3 class="text-center"><a href="#"><?php print strtoupper($row['title']); ?></a></h3>
                    <p class="text-center"><?php print $row['description']; ?></p>
                  </div>
                </div>

              <?php } else { ?>


                <div class="item col-md-6 col-sm-6 col-xs-12 landscapes">
                  <div class="single-portfolio">
                    <div class="portfolio-img">
                      <img src="<?php print 'photo/' . $row['big_image']; ?>" alt="" width="840" />
                      <div class="portfolio-view">
                        <div class="item-wrap">
                          <a class="img-poppu" href="<?php print 'photo/' . $row['big_image']; ?>" data-rel="lightcase:myCollection:slideshow">
                            <span class="plus"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-title">
                    <h3 class="text-center"><a href="#"><?php print strtoupper($row['title']); ?></a></h3>
                    <p class="text-center"><?php print $row['description']; ?></p>
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