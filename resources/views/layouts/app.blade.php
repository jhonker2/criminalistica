<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PORTOAGUAS</title>
    
    {!!Html::style('css/sicgom.css')!!}
    <!-- Bootstrap -->
    {!!Html::style('template_backend/plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('template_backend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('template_backend/plugins/nprogress/nprogress.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style('template_backend/css/custom.min.css')!!}
    {!!Html::style('template_backend/css/sicgom.css')!!}
     <!-- iCheck -->
    {!!Html::style('template_backend/plugins/iCheck/skins/flat/green.css')!!}

    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/home" class="site_title"><span>PORTOAGUAS EP</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('imagenes/avatar.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           @include('layouts.menu');

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('imagenes/avatar.png')}}" alt="">{{Auth::user()->nombre}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div  id ="content-sicgom" class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Departamento de Planeacion <a href="http://utm.edu.ec" target="_black">UTM</a> - <a href="http://fci.utm.edu.ec" target="_black">FCI</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    {!!Html::script('template_backend/plugins/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('template_backend/plugins/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('template_backend/plugins/fastclick/lib/fastclick.js')!!}
    <!-- NProgress -->
    {!!Html::script('template_backend/plugins/nprogress/nprogress.js')!!}
    <!-- Chart.js -->
    {!!Html::script('template_backend/plugins/Chart.js/dist/Chart.min.js')!!}
     <!-- iCheck -->
    {!!Html::script('template_backend/plugins/iCheck/icheck.min.js')!!}
    <!-- jQuery Sparklines -->
    {!!Html::script('template_backend/plugins/jquery-sparkline/dist/jquery.sparkline.min.js')!!}
    <!-- Flot -->
    {!!Html::script('template_backend/plugins/Flot/jquery.flot.js')!!}
    {!!Html::script('template_backend/plugins/Flot/jquery.flot.pie.js')!!}
    {!!Html::script('template_backend/plugins/Flot/jquery.flot.time.js')!!}
    {!!Html::script('template_backend/plugins/Flot/jquery.flot.stack.js')!!}
    {!!Html::script('template_backend/plugins/Flot/jquery.flot.resize.js')!!}

    <!-- Flot plugins -->
    {!!Html::script('template_backend/plugins/flot.orderbars/js/jquery.flot.orderBars.js')!!}
    {!!Html::script('template_backend/plugins/flot-spline/js/jquery.flot.spline.min.js')!!}
    {!!Html::script('template_backend/plugins/flot.curvedlines/curvedLines.js')!!}

    <!-- DateJS -->
    {!!Html::script('template_backend/plugins/DateJS/build/date.js')!!}

    <!-- bootstrap-daterangepicker -->
    {!!Html::script('template_backend/plugins/moment/moment.min.js')!!}
    {!!Html::script('template_backend/plugins/datepicker/daterangepicker.js')!!}

    <!-- Custom Theme Scripts -->
    {!!Html::script('template_backend/js/custom.min.js')!!}
    {!!Html::script('template_backend/js/sicgom.js')!!}
    @yield('js')
    
  
  
  </body>
</html>