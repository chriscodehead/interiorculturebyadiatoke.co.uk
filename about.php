<?php
require_once('include.php');
$title = 'Welcome to ' . $siteName . ' Transforming Spaces, Elevating Lifestyles';
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
                    <h1 class="text-center">About Us</h1>
                </div>
            </div>
        </section>

        <section class="who-we-are bg-white-3" style="padding-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 who-1">
                        <div>
                            <h2 class="text-left mb-4" data-aos="fade-up">About <br><span><?php print $siteName; ?> </span></h2>
                        </div>
                        <div class="pftext" style="font-family: " baskerville-display-pt", Georgia, Times, Times New Roman, serif;">
                            <p data-aos="fade-up"><em><?php print $siteName; ?> was born out of a passion for design and a love for creating beautiful, functional spaces. Adiat Oke, our founder and lead designer, brings a wealth of experience and a keen eye for detail to every project. With a background in both interior design and architecture, Adiat combines creativity with technical expertise to deliver exceptional results.</em> </p>

                            <p data-aos="fade-up"><em>We believe that interior design is more than just decorating; it's about creating environments that enhance the way you live. Our approach is client-focused, ensuring that your tastes, preferences, and lifestyle are at the heart of our designs. We work closely with you to understand your vision and bring it to life with style and sophistication.</em>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 who pt-5">
                        <div class="image-container">
                            <img src="img/about-adiotoke.png" alt="About Adiat Oke">
                            <a href="about">
                                <div class="text-overlay">
                                    <h5 data-aos="fade-up">About</h5>
                                    <p data-aos="fade-up" class="font-newer"><em><?php print $siteName; ?></em></p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php require_once('footer.php'); ?>
</body>

</html>