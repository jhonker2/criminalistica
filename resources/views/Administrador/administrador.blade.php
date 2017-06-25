<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMINISTRADOR VEHICULOS</title>

    <!-- Bootstrap -->
    {!!Html::style('template_backend/plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('template_backend/plugins/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('template_backend/plugins/nprogress/nprogress.css')!!}
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    {!!Html::style('template_backend/css/custom.min.css')!!}
    <!-- Estilos SICGOM -->
    {!!Html::style('template_backend/css/sicgom.css')!!}
    <!-- PNOTIFY -->
    {!!Html::style('template_backend/plugins/pnotify/dist/pnotify.custom.min.css')!!}



  </head>
  <body class="login">
  <div class="row">
  	<div class="col-md-6"><a style="margin: 10px 0 0 10px;" href="/"><img src="{{asset('template_backend/img/back.png')}}" alt=""><p class="retrocer">Regresar</p></a></div>
  	<div class="col-md-6"></div>
  </div>
      <div class="figure margin_top70">
        <img class="logo-escudo" src="{{asset('template_backend/img/wrench.png')}}"> 
      </div>
      <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div id="lod" style="display: none;"> 
          <img src="{{asset('template_backend/img/load.gif')}}" alt="" style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 53px;width: 80px;">
          <h4 style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 136px;">Cargando...
                </h4>
        </div>
          <div id="login_from" class="login_wrapper">
            <section class="login_content">
              <h1>SYSTEM-CAR</h1>
                <div class="margin_bott10">
                  <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                  <input type="text" class="form-control" placeholder="Usuario" id="usuario" required="" />
                </div>
                <div class="margin_bott10">
                  <input type="password" class="form-control" placeholder="Clave" id="clave" required="" />
                </div>
                <div>
                  <button class="btn btn btn-dark form-control" href="#" id="btn_login">Iniciar Sessión</button>
                <!-- <a class="reset_pass" href="#">Olvido su clave?</a> -->
                </div>
                <div class="clearfix"></div>
                <div class="separator"></div>
               <!--  <p class="change_link">New to site?
                 <a href="#signup" class="to_register"> Crear Cuenta </a>
               </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>SYSTEM-CAR</h1>
              </div>
          </section>
      </div>
    </div>
  </body>

    {!!Html::script('template_backend/plugins/jquery/dist/jquery.min.js')!!}
    {!!Html::script('template_backend/js/login-sicgom.js')!!}
    {!!Html::script('template_backend/plugins/pnotify/dist/pnotify.custom.min.js')!!}


</html>