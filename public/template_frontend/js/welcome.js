var clic=0;

      function mostrar_login(){
        if(clic==0){
          $(".login").show();
          clic++;
        }else{
          $(".login").hide();
          clic=0;
        }
      }

      $("#home").on('click', function(){
        $(".login").hide();
          clic=0;
      });

      $("#navbart").on('click', function(){
        $(".login").hide();
          clic=0;
      })
      
      $("#cb_marcas").change(function(){
        var id_marca=$("#cb_marcas").val();
        if(id_marca==""){

        }else{
            $.get('/GET_modelos?marca_id='+id_marca, function(data){
              $('#Selectmodelo').empty();
                  $('#Selectmodelo').append('<option value="0">Seleccione un Modelo</option>');
                $.each(data, function(index, modelos) {
                  $('#Selectmodelo').append('<option value="'+modelos.id+'">'+modelos.modelo_descripcion+'</option>');
                });
            }); 
        }
      });
      $("#Selectmodelo").change(function(){
        var id_modelo=$("#Selectmodelo").val();
        if(id_modelo=="0"){

        }else{
            $.get('/GET_versiones?modelo_id='+id_modelo, function(data){
              $('#Selectversiones').empty();
                  $('#Selectversiones').append('<option value="0">Seleccione una Versión</option>');
                $.each(data, function(index, versiones) {
                  $('#Selectversiones').append('<option value="'+versiones.id+'">'+versiones.version_descripcion+'</option>');
                });
            }); 
        }
      });

      $("#btn_ver").click(function(){
          GET_galeria();
      });

      $("#g_motor").click(function(){
          var id_motor = $("#id_motor").val();
          $.ajax({
            url:'GET_info_motor/'+id_motor,
            type:'GET',
            dataType:'json',
            success:function(data){
             $(data).each(function(key, value){ 
              $("#ubicacion_m").html(value.ubicacion);
              $("#tipograbado_m").html(value.tipo_grabado);
              $("#simetria_m").html(value.simetria);
              $("#digitos_m").html(value.cantidad_digitos);
              $("#alineacion_m").html(value.alineacion);
              $("#espacidad_m").html(value.espacidad);
              $("#densidad_m").html(value.densidad);
              $("#observacion_m").html(value.observacion);

             });

            }
          });
          $("#M_motor").modal("show");
          $("#modal_g_motor").attr("src",getCookie("foto_motor"));

      });

      $("#g_chasis").click(function(){
        $("#M_chasis").modal("show");
        $("#modal_g_chasis").attr("src",getCookie("foto_chasis"));
      });

      $("#g_serie").click(function(){
        $("#M_serie").modal("show");
        $("#modal_g_serie").attr("src",getCookie("foto_serie"));
      });


      $("#g_plaqueta").click(function(){
        $("#M_plaqueta").modal("show");
        $("#modal_g_plaqueta").attr("src",getCookie("foto_plaqueta"));
      });
      function GET_galeria(){
        $(".loading2").show();
        var token = $("#token").val();
        var id_motor = $("#id_motor").val();
        var id_plaqueta = $("#id_plaqueta").val();
        var id_serie = $("#id_serie").val();
        var id_chasis = $("#id_chasis").val();
        $.ajax({
          url:'/GET_galeria',
          type:'POST',
          dataType: 'json',
          headers :{'X-CSRF-TOKEN': token},
          data:{id_motor:id_motor,id_serie:id_serie, id_chasis:id_chasis, id_plaqueta:id_plaqueta},
            success:function(data){
              $(".loading2").hide();
             $(data).each(function(key, value){ 
               document.cookie = "foto_motor=;";
               document.cookie = "foto_chasis=;";
               document.cookie = "foto_serie=;";
               document.cookie = "foto_plaqueta=;";
               document.cookie = "foto_motor="+value.fotoMotor;
               document.cookie = "foto_chasis="+value.fotoChasis;
               document.cookie = "foto_serie="+value.fotoSerie;
               document.cookie = "foto_plaqueta="+value.fotoPlaqueta;

                $("#fot_motor").attr('src',value.fotoMotor);
                $("#fot_chasis").attr('src',value.fotoChasis);
                $("#fot_serie").attr('src',value.fotoSerie);
                $("#fot_plaqueta").attr('src',value.fotoPlaqueta);
              });
             $("#galeria_capas").show();
            }
        });
      }

      function buscar_vehiculo(){
        $(".loading").show();
        var id_marca   = $("#cb_marcas").val();
        var id_version = $("#Selectversiones").val();
        GET_marca(id_marca);
        GET_vehiculos(id_version);
        

      }

      function GET_vehiculos(id_version){
        var token = $("#token").val();
        $.ajax({
          url:'/GET_vehiculo',
          type:'POST',
          dataType: 'json',
          headers :{'X-CSRF-TOKEN': token},
          data:{id_version:id_version},
          success:function(data){
            $(".loading").hide();
             $(data).each(function(key, value){ 
              $("#foto_logo").attr('src',value.fotografia);
              $("#span_cilindraje").html(value.cilindraje);
              $("#span_transmision").html(value.transmision);
              $("#span_combustible").html(value.combustible);
              $("#span_pais").html(value.pais_origen);
              $("#span_casa").html(value.casa_ensambladora);
              $("#id_motor").val(value.id_motor);
              $("#id_serie").val(value.id_serie);
              $("#id_plaqueta").val(value.id_plaqueta);
              $("#id_chasis").val(value.id_chasis);
            });
             $(".resultados").show();
          }
        });
      }
     
      function GET_marca(id_marca){
        $.ajax({
          url:'/GET_marca/'+id_marca,
          type:'GET',
          dataType:'json',
          success:function(data){
            $(data).each(function(key, value){ 
              $("#logo_marca").attr('src',value.logo);
              $("#marca_get").html(value.marca);
            });
          }
        });

      }

      $("#btn_login_w").click(function(){
        var usuario, clave, token;

        usuario =$("#usuario").val();
        clave   =$("#clave").val();
        token   =$("#token").val();
        $.ajax({
          url:'login_invitados',
          type:'POST',
          dataType: 'json',
          headers :{'X-CSRF-TOKEN': token},
          data:{usuario:usuario,clave:clave},
          success:function(data){
            if(data.sms=="errorUsuario"){
              alert("Estimado usuario usted no se encuentra registrado");
            }else if(data.sms=="error"){
              alert("No se ha podido iniciar session");
            }else if(data.sms=="login"){
              alert("Bienvenido usuario");
                redirect('/');

            }
          }
        });


      });
      function redirect(url){
        window.location=url;
      }

      function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}