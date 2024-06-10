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

    <section id="portfolio" class="portfolio" style="padding-top: 30px; padding-bottom: 30px; background: black;">
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
          ?>
              <div class="item col-lg-6 col-md-6 landscapes people no-gutters">
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

    <?php require_once('footer.php'); ?>
</body>

</html>