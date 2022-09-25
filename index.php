<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
  <!-- Basic Page Needs
        ================================================== -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
        ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">





  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!--
        ==================================================
        Header Section Start
        ================================================== -->
  <section id="header" class="top-bar animated-header <?php echo get_theme_mod('is_menu_position'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="col-md-3">
              <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_theme_mod('is_header_setting'); ?>" alt="logo">
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-md-9 menu-position">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nav_main" class="navbar-nav ml-auto">

                  <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'depth'          => 2,
                    'container'      => '<div>',
                    'container_id'   => 'navbarSupportedContent',
                    'menu_class'     => 'nav navbar-nav',
                    'fallback_cb'    => 'wp_Bootstrap_Navwalker::fallback',
                    'walker'         => new wp_Bootstrap_Navwalker(),

                  ]);
                  ?>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!--
==================================================
Slider Section Start
================================================== -->
  <section id="hero-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="block wow fadeInUp" data-wow-delay=".3s">

            <!-- Slider -->
            <section class="cd-intro">
              <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                <span>HI, MY NAME IS ISTIAK &amp; I AM A</span><br>
                <span class="cd-words-wrapper">
                  <b class="is-visible">DESIGNER</b>
                  <b>DEVELOPER</b>
                  <b>FREELANCER</b>
                </span>
              </h1>
            </section> <!-- cd-intro -->
            <!-- /.slider -->
            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
              With 10 years experience, I've occupied many roles including digital design director,<br> web designer and
              developer. This site showcases some of my work.
            </h2>
            <a class="btn-lines dark light wow fadeInUp animated btn btn-default btn-green hvr-bounce-to-right" data-wow-delay=".9s" href="https://themefisher.com/" target="_blank">Download More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#main-slider-->

  <!--
==================================================
About Section Start
================================================== -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
            <h2>
              ABOUT ME
            </h2>
            <p>
              Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of
              Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only
              five centuries
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus
              impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
            </p>
          </div>

        </div>
        <div class="col-md-6 col-sm-6">
          <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
            <img src="<?php bloginfo('template_directory') ?> /images/about/about.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section> <!-- /#about -->


  <!--
==================================================
Portfolio Section Start
================================================== -->
  <section id="works" class="works">
    <div class="container">
      <div class="section-heading">
        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
        <p class="wow fadeInDown" data-wow-delay=".5s">
          Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
          Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
          lacus.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-1.jpg" class="img-fluid" alt="this is a title">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-1.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Dew Drop
                </a>
              </h4>
              <p>
                Redesigne UI Concept
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-2.jpg" class="img-fluid" alt="this is a title">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-2.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Bottle Mockup
                </a>
              </h4>
              <p>
                Lorem ipsum dolor sit.
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-3.jpg" class="img-fluid" alt="">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-3.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Table Design
                </a>
              </h4>
              <p>
                Lorem ipsum dolor sit amet.
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-4.jpg" class="img-fluid" alt="">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-4.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Make Up elements
                </a>
              </h4>
              <p>
                Lorem ipsum dolor.
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-5.jpg" class="img-fluid" alt="">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-5.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Shoping Bag Concept
                </a>
              </h4>
              <p>
                Lorem ipsum dolor.
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
            <div class="img-wrapper">
              <img src="<?php bloginfo('template_directory') ?> /images/portfolio/item-6.jpg" class="img-fluid" alt="">
              <div class="overlay">
                <div class="buttons">
                  <a rel="gallery" class="fancybox" href="<?php bloginfo('template_directory') ?> /images/portfolio/item-6.jpg">Demo</a>
                  <a target="_blank" href="single-portfolio.html">Details</a>
                </div>
              </div>
            </div>
            <figcaption>
              <h4>
                <a href="#">
                  Caramel Bottle
                </a>
              </h4>
              <p>
                Lorem ipsum dolor.
              </p>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section> <!-- #works -->
  <!--
==================================================
Portfolio Section Start
================================================== -->
  <section id="feature">
    <div class="container">
      <div class="section-heading">
        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
        <p class="wow fadeInDown" data-wow-delay=".5s">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora
          commodi repellendus quod laborum.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-flask-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-lightbulb-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Well documented.</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-lightbulb-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Well documented.</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-americanfootball-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Free updates</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-keypad-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Solid Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-barcode-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Simple Installation</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- /#feature -->
  }

  <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
  <section id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
              <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
              <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--
            ==================================================
            Footer Section Start
            ================================================== -->
  <footer id="footer">
    <div class="container">
      <div class="row content-justify-between">
        <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
          <p class="copyright">&copy; Design and Developed by <a href="http://isdev.xyz" target="_blank">IsDev</a>
          </p>
        </div>
        <div class="col-md-4 col-12">
          <!-- Social Media -->
          <ul class="social text-center text-md-right text-lg-right">
            <li>
              <a href="http://wwww.fb.com/themefisher" class="Facebook">
                <i class="ion-social-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                <i class="ion-social-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="Linkedin">
                <i class="ion-social-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                <i class="ion-social-googleplus"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer> <!-- /#footer -->

  <!-- Template Javascript Files
	================================================== -->
  <!-- jquery -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/jQurey/jquery.min.js"></script>
  <!-- Form Validation -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/form-validation/jquery.form.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/plugins/form-validation/jquery.validate.min.js"></script>
  <!-- slick slider -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/slick/slick.min.js"></script>
  <!-- bootstrap js -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/bootstrap/bootstrap.min.js"></script>
  <!-- wow js -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/wow-js/wow.min.js"></script>
  <!-- slider js -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/slider/slider.js"></script>
  <!-- Fancybox -->
  <script src="<?php bloginfo('template_directory') ?>/plugins/facncybox/jquery.fancybox.js"></script>
  <!-- template main js -->
  <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

  <?php wp_footer(); ?>
</body>

</html>