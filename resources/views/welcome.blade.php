<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <!-- Basic -->
  <title>PROYECTO</title>
  <!-- Define Charset -->
  <meta charset="utf-8">
  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">
  <!-- Bootstrap CSS  -->
    {!!Html::style('template_frontend/asset/css/bootstrap.min.css')!!}
  <!-- Revolution Slider -->
    {!!Html::style('template_frontend/css/settings.css')!!}
  <!-- Font Awesome CSS -->
    {!!Html::style('template_frontend/css/font-awesome.min.css')!!}
  <!-- Slicknav -->
    {!!Html::style('template_frontend/css/slicknav.css')!!}
  <!-- Margo CSS Styles  -->
    {!!Html::style('template_frontend/css/style.css')!!}
  <!-- Responsive CSS Styles  -->
    {!!Html::style('template_frontend/css/responsive.css')!!}
  <!-- Css3 Transitions Styles  -->
    {!!Html::style('template_frontend/css/animate.css')!!}
  <!-- Color Defult -->
    {!!Html::style('template_frontend/css/colors/red.css')!!}
     <!-- Font Awesome -->
    {!!Html::style('template_backend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')!!}
  <!-- Margo JS  -->
    {!!Html::script('template_frontend/js/jquery-2.1.4.min.js')!!}
    {!!Html::script('template_frontend/js/jquery.migrate.js')!!}
    {!!Html::script('template_frontend/js/modernizrr.js')!!}
    {!!Html::script('template_frontend/asset/js/bootstrap.min.js')!!}
    {!!Html::script('template_frontend/js/jquery.fitvids.js')!!}
    {!!Html::script('template_frontend/js/owl.carousel.min.js')!!}
    {!!Html::script('template_frontend/js/nivo-lightbox.min.js')!!}
    {!!Html::script('template_frontend/js/jquery.isotope.min.js')!!}
    {!!Html::script('template_frontend/js/jquery.appear.js')!!}
    {!!Html::script('template_frontend/js/count-to.js')!!}
    {!!Html::script('template_frontend/js/jquery.textillate.js')!!}
    {!!Html::script('template_frontend/js/jquery.lettering.js')!!}
    {!!Html::script('template_frontend/js/jquery.easypiechart.min.js')!!}
    {!!Html::script('template_frontend/js/smooth-scroll.js')!!}
    {!!Html::script('template_frontend/js/skrollr.js')!!}
    {!!Html::script('template_frontend/js/jquery.parallax.js')!!}
    {!!Html::script('template_frontend/js/mediaelement-and-player.js')!!}
    {!!Html::script('template_frontend/js/jquery.slicknav.js')!!}

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Portoviejo, Manabí, EC</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> jhonyguaman49@gail.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +052988853700</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-5">
                <ul class="contact-details iniciarSesion">
                    <li><a href="javascript:void(0)"><i class="fa fa-user-circle-o margin-rigth-5px" aria-hidden="true"></i>Iniciar Sesión</a></li>
                </ul>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html">
              <img alt="" src="{{asset('images/margo.png')}}">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="index.html">Incio</a>
              </li>
              <li>
                <a href="#search_vehiculo">Identificación Vehiculo</a>
              </li>
              <li><a href="">Herramienta</a>
                <ul>
                    <li><a href="https://vindecoder.eu/">Videcoder.eu</a></li>
                    <li><a href="http://www.vindecoder.net">Videcoder.net</a></li>
                </ul>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.html">Home</a>
            <ul class="dropdown">
              <li><a class="active" href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
              <li><a href="index-08.html">HSome Version 8</a>
              </li>
              <li><a href="index-09.html">Home Version 9</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="forms.html">Forms</a>
              </li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="animated-graphs.html">Animated Graphs</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="{{asset('template_frontend/images/1.jpg')}}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Bienvenido <strong>Descripción Vehicular</strong></span>
                </h2>
                <h3 class="animated3">
                   <span>Guia de criminalistica</span>
                  </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Ver Mas</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{asset('template_frontend/images/2.jpeg')}}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                  <span><strong>Margo</strong> for the highest</span>
                </h2>
                <h3 class="animated5">
                  <span>The Key of your Success</span>
                </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

   <div id="search_vehiculo">
      <div class="parallax-text-container-1">
        <div class="parallax-text-item">
          <div class="container">
            <div class="row">
              <!-- Start Video Section Content -->
              <div class="section-video-content text-center">
                <div class="row">
                    <div class="col-md-3"><select name="Marcas" class="form-control">
                        <option value="">Seleccione una Marca</option>
                    </select></div>
                    <div class="col-md-3"><select name="Marcas" class="form-control">
                        <option value="">Seleccione una Modelo</option>
                    </select></div>
                    <div class="col-md-3"><select name="Marcas" class="form-control">
                        <option value="">Seleccione una Versión</option>
                    </select></div>
                    <div class="col-md-3"><select name="Marcas" class="form-control">
                        <option value="">Seleccione un Año</option>
                    </select></div>
                    
                </div>
              </br>
                <!-- End Animations Text -->

                <!-- Start Buttons -->
                <a rel="nofollow" href="https://rebrand.ly/gg-margo-purchase" class="btn-system btn-large"><i class="fa fa-search"></i> Buscar Vehiculo</a>

              </div>
              <!-- End Section Content -->
            </div>
            <div class="row">
              <div class=" col-md-offset-2 col-md-8">
                <div class="pricing-table highlight-plan">
              <div class="plan-name plan-cabecera">
                <div class="col-md-4 col-xs-4"><img src="{{asset('imagenes/logo-chevrolet.jpg')}}" alt="" class="imagen-marca"></div>
                <div class="col-md-8 col-xs-8"><h3>Chevrolet</h3></div>
              </div>
              <div class="plan-price">
                <div class="row">
                  <div class="col-md-8">
                    <img src="{{asset('imagenes/auto.jpg')}}" alt="">
                  </div>
                  <div class="col-md-4">
                    <div class="plan-list">
                      <ul>
                        <li><strong>Ficha Técnica</strong></li>
                        <li class="text-aling-left"><strong>Cilindraje:</strong> 1.999 cc</li>
                        <li class="text-aling-left"><strong>Transmisión:</strong> -</li>
                        <li class="text-aling-left"><strong>Combustible:</strong> Gasolina</li>
                        <li class="text-aling-left"><strong>Pais origen:</strong> Colombia</li>
                        <li class="text-aling-left"><strong>Casa ensamblaje:</strong> -</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="plan-signup">
                <a href="#" class="btn-system btn-small border-btn">Ver Especificaciones</a>
              </div>
            </div>
              </div>
              
            </div>

            <div class="row" id="galeria_capas">
              <!--Start Clients Carousel-->
          <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Client 1 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('imagenes/1.jpg')}}" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('imagenes/2.jpg')}}" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('imagenes/3.jpg')}}" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('imagenes/4.jpg')}}" alt="" /></a>
              </div>

            </div>
          </div>
          <!-- End Clients Carousel -->
            </div>

          </div>
        </div>
      </div>
    </div>

    
    <!-- Start Testimonials Section -->
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>Latest News</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                <!-- Posts 1 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 2 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Link Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 3 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 4 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 5 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 6 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Recent Posts Carousel -->

          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->

    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">


          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->

          <!-- Start Flickr Widget -->
          <div class="col-md-4 col-xs-12">
           
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>Copyright © 2017 &amp; Developed by <a href="#">Lar-web</a></p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="/admin/app">SiteAdmin</a>
                </li>
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
    {!!Html::script('template_frontend/js/script.js')!!}
</body>
</html>