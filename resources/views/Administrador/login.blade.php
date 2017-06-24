<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COBROS</title>

    <!-- Bootstrap -->
    {!!Html::style('plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('plugins/nprogress/nprogress.css')!!}
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    {!!Html::style('css/custom.min.css')!!}
    <!-- Estilos SICGOM -->
    {!!Html::style('css/sicgom.css')!!}
    <!-- PNOTIFY -->
    {!!Html::style('plugins/pnotify/dist/pnotify.custom.min.css')!!}



  </head>
  <body class="login">
      <div class="figure margin_top70">
        <img class="logo-escudo" src="{{asset('img/logo.png')}}"> 
      </div>
      <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div id="lod" style="display: none;"> 
          <img src="{{asset('img/load.gif')}}" alt="" style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 53px;width: 80px;">
          <h4 style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 136px;">Cargando...
                </h4>
        </div>
          <div id="login_from" class="login_wrapper">
            <section class="login_content">
              <h1>PORTOAGUAS EP</h1>
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
                  <h1>PORTOAGUAS EP</h1>
              </div>
          </section>
      </div>
    </div>
  </body>

    {!!Html::script('plugins/jquery/dist/jquery.min.js')!!}
    {!!Html::script('js/login-sicgom.js')!!}
    {!!Html::script('plugins/pnotify/dist/pnotify.custom.min.js')!!}


</html>