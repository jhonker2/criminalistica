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

      function buscar_vehiculo(){
        var id_marca   = $("#cb_marcas").val();
        var id_version = $("#Selectversiones").val();
        GET_marca(id_marca);
        GET_vehiculos(id_version);
        $(".resultados").show();

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
             $(data).each(function(key, value){ 
              $("#foto_logo").attr('src',value.fotografia);
              $("#span_cilindraje").html(value.cilindraje);
              $("#span_transmision").html(value.transmision);
              $("#span_combustible").html(value.combustible);
              $("#span_pais").html(value.pais_origen);
              $("#span_casa").html(value.casa_ensambladora);
            });
          }
        });
      }
      function GET_foto_motor(id_motor){
        $.ajax({
          url:'/GET_foto_m/'+id_motor,
          type:'GET',
          dataType:'json',
          success:function(data){
            $(data).each(function(key, value){ 
              
            });
          }
        })
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