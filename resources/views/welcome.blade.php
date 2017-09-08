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
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
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
                <li><a href="#"><i class="fa fa-envelope-o"></i> jhonyguaman49@gmail.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +052988853700</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-5">
                <ul class="contact-details iniciarSesion">
                @if (Auth::guest())
                  
                  <li><a href="javascript:void(0)" onclick="mostrar_login()" class="loginsize"><i class="fa fa-user-circle-o margin-rigth-5px" aria-hidden="true"></i>Iniciar Sesión</a></li>
                @else
                    
                  <div class="dropdown">
                    <a class="dropdown-toggle user-data" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  >
                    <i class="fa fa-user-circle-o margin-rigth-5px" aria-hidden="true"></i> {{Auth::user()->nombre}}
                    </a>
                    <ul class="dropdown-menu menu_usuario" aria-labelledby="dropdownMenu1">
                        <li><a href="/logout_invitados">Salir</a></li>
                      </ul>
                  </div>
                @endif
                </ul>
            </div>
            <div class="login" style="float: right;margin-right: 30%; display: none;">
              <div class="div_login">
                <div>
                  <h1 class="titulo_login">Criminalistica</h1>
                  <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                  <div class="col-md-offset-2 col-md-8 margin-botton-10px">
                    <input type="text" class="form-control" placeholder="Usuario" id="usuario">
                  </div>
                  <div class="col-md-offset-2 col-md-8 margin-botton-10px">
                    <input type="password" id="clave" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="col-md-offset-3 col-md-8 margin-botton-10px">
                    <button type="button" id="btn_login_w" class="btn-system btn-large"> Iniciar Sesión</button>
                    <a href="">Quiero registrarme</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div id="navbart" class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="">
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
                <a class="active" href="#" style="background: #ee3733;">Incio</a>
              </li>
              @if (Auth::guest())
              @else
              <li>
                <a href="#search_vehiculo">Identificación Vehiculo</a>
              </li>
              @endif
              <li><a href="">Herramienta</a>
                <ul>
                    <li><a href="#tools">Videcoder.eu</a></li>
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
                  <span><strong>Crimininalistica</strong> Portoviejo</span>
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
    @if (Auth::guest())
    @else
  <div id="search_vehiculo">
      <div class="parallax-text-container-1">
        <div class="parallax-text-item">
          <div class="container">
            <div class="row">
              <!-- Start Video Section Content -->
              <div class="section-video-content text-center">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                    <select name="Marcas" id="cb_marcas" class="form-control" style="margin-bottom: 10px;">
                        <option value="">Seleccione una Marca</option>
                        @foreach($marca as $MARCA)
                        <option value="{{$MARCA->id}}">{{strtoupper($MARCA->marca)}}</option>
                        @endforeach
                    </select></div>
                    <div class="col-md-3 col-xs-6"><select name="modelos" id="Selectmodelo" class="form-control" style="margin-bottom: 10px;">
                        <option value="">Esperando..</option>
                    </select></div>
                    <div class="col-md-3 col-xs-6"><select name="versiones" id="Selectversiones" class="form-control">
                        <option value="">Esperando..</option>
                    </select></div>
                    <div class="col-md-3 col-xs-6"><select name="Marcas" class="form-control">
                        <option value="">Seleccione un Año</option>
                        @for($x=1970 ; $x<=2017 ; $x++)
                        <option value="{{$x}}">{{$x}}</option>
                        @endfor
                    </select></div>
                    
                </div>
              </br>
                <!-- End Animations Text -->

                <!-- Start Buttons -->
                <button onclick="buscar_vehiculo()" class="btn-system btn-large"><i class="fa fa-search"></i> Buscar Vehiculo</button>

              </div>
              <!-- End Section Content -->
            </div>
            <div class="loading">
              <img src="{{asset('imagenes/gif-load.gif')}}" alt="" style="width: 100px;">
            </div>
            <div class="resultados">
              <div class="row">
                <div class=" col-md-offset-2 col-md-8">
                  <div class="pricing-table highlight-plan">
                    <div class="plan-name plan-cabecera">
                      <div class="col-md-4 col-xs-4"><img id='logo_marca' src="" alt="" class="imagen-marca">
                      </div>
                      <div class="col-md-8 col-xs-8"><h3 id="marca_get">Chevrolet</h3></div>
                    </div>
                  <div class="plan-price">
                    <div class="row">
                      <div class="col-md-8">
                        <img id="foto_logo" src="" alt="">
                      </div>
                    <div class="col-md-4">
                      <div class="plan-list">
                        <ul>
                          <li><strong class="text_ficha">Ficha Técnica</strong></li>
                          <li class="text-aling-left text_titulo"><strong>Cilindraje:</strong><span id="span_cilindraje"></span> </li>
                          <li class="text-aling-left text_titulo"><strong>Transmisión:</strong><span id="span_transmision"></span></li>
                          <li class="text-aling-left text_titulo"><strong>Combustible:</strong><span id="span_combustible"></span></li>
                          <li class="text-aling-left text_titulo"><strong>Pais origen:</strong><span id="span_pais"></span></li>
                          <li class="text-aling-left text_titulo"><strong>Casa ensamblaje:</strong><span id="span_casa"></span></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="plan-signup">
                    <button type="button" class="btn-system btn-small border-btn" id="btn_ver" >Ver Especificaciones</button>

                    <input type="hidden" id="id_motor">                  
                    <input type="hidden" id="id_serie">               
                    <input type="hidden" id="id_chasis">      
                    <input type="hidden" id="id_plaqueta">      
                 </div>
                </div>
              </div>
            </div>
           
            </div>
            <div class="loading2">
              <img src="{{asset('imagenes/gif-load.gif')}}" alt="" style="width: 100px;">
            </div>
             <div class="row galeria" id="galeria_capas">
              <!--Start Clients Carousel-->
              <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
                  <!-- Client 1 -->
                  <div class="client-item item">
                    <a href="javascript:void(0)" id="g_motor"><img id="fot_motor" alt="" /></a>
                  </div>
                  <!-- Client 2 -->
                  <div class="client-item item">
                    <a href="javascript:void(0)" id="g_chasis"><img id="fot_chasis" alt="" /></a>
                  </div>
                  <!-- Client 3 -->
                  <div class="client-item item">
                    <a href="javascript:void(0)" id="g_serie"><img id="fot_serie"alt="" /></a>
                  </div>
                  <!-- Client 4 -->
                  <div class="client-item item">
                    <a href="javascript:void(0)" id="g_plaqueta"><img id="fot_plaqueta" alt="" /></a>
                  </div>
                </div>
              </div>
              <!-- End Clients Carousel -->
            </div> <!-- fin del div de galeria de capas-->
          </div>
        </div>
      </div>
  </div>
  @endif
  <!-- MODAL MOTOR -->
    <div class="modal fade foto_motor" id="M_motor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 80%">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>x</span>
        </button>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <img id="modal_g_motor" src="" style="width: 100vh;" alt="" class="">
          </div>
          <div class="col-md-4">
            <div class="row ubicacion_st">
              <span><b class="titulos">Ubicación:</b></span> 
              <br>
              <span class="contenido" id="ubicacion_m">asasdasd</span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <span><b class="titulos">Tipo de Grabado</b></span> 
                <br>
                <span class="contenido" id="tipograbado_m">asasdasd</span>

                <br>

                <span><b class="titulos">Simetria</b></span> 
                <br>
                <span class="contenido" id="simetria_m">asasdasd</span>

                <br>

                <span><b class="titulos">Candidad Digitos</b></span> 
                <br>
                <span class="contenido" id="digitos_m">10</span>

              </div>
              <div class="col-md-6">
                <span><b class="titulos">Alineación</b></span> 
                <br>
                <span class="contenido" id="alineacion_m">asasdasd</span>

                <br>
                <span><b class="titulos">Espacidad</b></span> 
                <br>
                <span class="contenido" id="espacidad_m">asasdasd</span>

                <br>

                <span><b class="titulos">Densidad</b></span> 
                <br>
                <span class="contenido" id="densidad_m">asasdasd</span>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-12">
                <span><b class="titulos">Observacion</b></span> 
                <br>
                <span class="contenido" id="observacion_m">asasdasd</span>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

  <!-- MODAL CHASIS -->
  <div class="modal fade" id="M_chasis" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 80%">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>x</span>
        </button>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <img id="modal_g_chasis" src="" style="width: 100vh;" alt="" class="">
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- MODAL SERIE -->
  <div class="modal fade" id="M_serie" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 80%">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>x</span>
        </button>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <img id="modal_g_serie" src="" style="width: 100vh;" alt="" class="">
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- MODAL PLAQUETA -->
  <div class="modal fade" id="M_plaqueta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 80%">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>x</span>
        </button>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <img id="modal_g_plaqueta" src="" style="width: 100vh;" alt="" class="">
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

    <!--<section id="tools" style="height: 100vh;">
      <iframe src="https://vindecoder.eu/" style="width: 100%; height: 100vh;"></iframe>
    </section>-->
    <!-- Start Footer Section -->
    <footer>
      <div class="container">
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
    {!!Html::script('template_frontend/js/welcome.js')!!}
</body>
</html>