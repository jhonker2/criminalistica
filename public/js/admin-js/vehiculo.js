
   // $('#tablaa').DataTable();


//Validaci[on del campo cilindraje
        $('#cilindraje').blur(function(){
            var cilindraje = $("#cilindraje").val();
            if (cilindraje.indexOf('')== -1){
              $('#cilindraje').addClass('error');
              $('#cilindraje').addClass('error_span');
              $('#span_mensaje_cilindraje').html('Ingrese cilindraje');
            }else{
            $('#cilindraje').removeClass('error');
            $('#cilindraje').removeClass('error_span');
            $('#span_cilindraje').removeClass('error_span');
            $('#span_mensaje_cilindraje').html('');
            }
            
        }); // fin

        //Validaci[on del campo trasmision
        $('#transmision_A').blur(function(){
            var transmision = $("#transmision_A").val();
            if (transmision.indexOf('')== -1){
              $('#transmision_A').addClass('error');
              $('#transmision_A').addClass('error_span');
              $('#span_mensaje_transmision').html('Ingrese transmision');
            }else{
            $('#transmision_A').removeClass('error');
            $('#transmision_A').removeClass('error_span');
            $('#span_transmision').removeClass('error_span');
            $('#span_mensaje_transmision').html('');
            }
            
        }); // fin

         //Validaci[on del campo combustible
        $('#combustible').blur(function(){
            var combustible = $("#combustible").val();
            if (combustible.indexOf('')== -1){
              $('#combustible').addClass('error');
              $('#combustible').addClass('error_span');
              $('#span_mensaje_transmision').html('Ingrese combustible');
            }else{
            $('#combustible').removeClass('error');
            $('#combustible').removeClass('error_span');
            $('#span_combustible').removeClass('error_span');
            $('#span_mensaje_combustible').html('');
            }
            
        }); // fin



          //Validaci[on del campo pais_origen
        $('#pais_origen').blur(function(){
            var pais_origen = $("#pais_origen").val();
            if (pais_origen.indexOf('')== -1){
              $('#pais_origen').addClass('error');
              $('#pais_origen').addClass('error_span');
              $('#span_mensaje_transmision').html('Ingrese pais_origen');
            }else{
            $('#pais_origen').removeClass('error');
            $('#pais_origen').removeClass('error_span');
            $('#span_pais_origen').removeClass('error_span');
            $('#span_mensaje_pais_origen').html('');
            }
            
        }); // fin

         //Validaci[on del campo anio
        $('#anio').blur(function(){
            var anio = $("#anio").val();
            if (anio.indexOf('')== -1){
              $('#anio').addClass('error');
              $('#anio').addClass('error_span');
              $('#span_mensaje_transmision').html('Ingrese anio');
            }else{
            $('#anio').removeClass('error');
            $('#anio').removeClass('error_span');
            $('#span_anio').removeClass('error_span');
            $('#span_mensaje_anio').html('');
            }
            
        }); // fin


         //Validaci[on del campo casa_emsambladora
        $('#casa_ensambladora_A').blur(function(){
            var casa_ensambladora_A = $("#casa_ensambladora_A").val();
            if (casa_ensambladora_A.indexOf('')== -1){
              $('#casa_ensambladora_A').addClass('error');
              $('#casa_ensambladora_A').addClass('error_span');
              $('#span_mensaje_casa_ensambladora_A').html('Ingrese Casa Emsambladora');
            }else{
            $('#casa_ensambladora_A').removeClass('error');
            $('#casa_ensambladora_A').removeClass('error_span');
             $('#span_casa_ensambladora_A').removeClass('error_span');
            $('#span_mensaje_casa_ensambladora_A').html('');
            }
            
        }); // fin
        
        //Validaci[on del campo ubicacion_ch
        $('#ubicacion_motor').blur(function(){
            var ubicacion_motor = $("#ubicacion_motor").val();
            if (ubicacion_motor.indexOf('')== -1){
              $('#ubicacion_motor').addClass('error');
              $('#ubicacion_motor').addClass('error_span');
              $('#span_mensaje_ubicacion_motor').html('Ingrese Ubicacion del motor');
            }else{
            $('#ubicacion_motor').removeClass('error');
            $('#ubicacion_motor').removeClass('error_span');
            $('#span_ubicacion_motor').removeClass('error_span');
            $('#span_mensaje_ubicacion_motor').html('');
            }
            
        }); // fin

         //Validaci[on del campo tipo_grabado_m
        $('#tipo_grabado_m').blur(function(){
            var tipo_grabado_m = $("#tipo_grabado_m").val();
            if (tipo_grabado_m.indexOf('')== -1){
              $('#tipo_grabado_m').addClass('error');
              $('#tipo_grabado_m').addClass('error_span');
              $('#span_mensaje_tipo_grabado_m').html('Ingrese Tipo de Grabado');
            }else{
            $('#tipo_grabado_m').removeClass('error');
            $('#tipo_grabado_m').removeClass('error_span');
            $('#span_tipo_grabado_m').removeClass('error_span');
            $('#span_mensaje_tipo_grabado_m').html('');
            }
            
        }); // fin

          //Validaci[on del campo alineacion_m
        $('#alineacion_m').blur(function(){
            var alineacion_m = $("#alineacion_m").val();
            if (alineacion_m.indexOf('')== -1){
              $('#alineacion_m').addClass('error');
              $('#alineacion_m').addClass('error_span');
              $('#span_mensaje_alineacion_m').html('Ingrese Alineacion del Motor');
            }else{
            $('#alineacion_m').removeClass('error');
            $('#alineacion_m').removeClass('error_span');
            $('#span_alineacion_m').removeClass('error_span');
            $('#span_mensaje_alineacion_m').html('');
            }
            
        }); // fin

           //Validaci[on del campo simetria_m
        $('#simetria_m').blur(function(){
            var simetria_m = $("#simetria_m").val();
            if (simetria_m.indexOf('')== -1){
              $('#simetria_m').addClass('error');
              $('#simetria_m').addClass('error_span');
              $('#span_mensaje_simetria_m').html('Ingrese Alineacion del Motor');
            }else{
            $('#simetria_m').removeClass('error');
            $('#simetria_m').removeClass('error_span');
            $('#span_simetria_m').removeClass('error_span');
            $('#span_mensaje_simetria_m').html('');
            }
            
        }); // fin

           //Validaci[on del campo cantidad_digito_mo
        $('#cantidad_digito_mo').blur(function(){
            var cantidad_digito_mo = $("#cantidad_digito_mo").val();
            if (cantidad_digito_mo.indexOf('')== -1){
              $('#cantidad_digito_mo').addClass('error');
              $('#cantidad_digito_mo').addClass('error_span');
              $('#span_mensaje_cantidad_digito_mo').html('Ingrese Cantida de Digitos del Motor');
            }else{
            $('#cantidad_digito_mo').removeClass('error');
            $('#cantidad_digito_mo').removeClass('error_span');
            $('#span_cantidad_digito_mo').removeClass('error_span');
            $('#span_mensaje_cantidad_digito_mo').html('');
            }
            
        }); // fin

            //Validaci[on del campo espacidad_m
        $('#espacidad_m').blur(function(){
            var espacidad_m = $("#espacidad_m").val();
            if (espacidad_m.indexOf('')== -1){
              $('#espacidad_m').addClass('error');
              $('#espacidad_m').addClass('error_span');
              $('#span_mensaje_espacidad_m').html('Ingrese Espacidad del Motor');
            }else{
            $('#espacidad_m').removeClass('error');
            $('#espacidad_m').removeClass('error_span');
            $('#span_espacidad_m').removeClass('error_span');
            $('#span_mensaje_espacidad_m').html('');
            }
            
        }); // fin

               //Validaci[on del campo densidad_m
        $('#densidad_m').blur(function(){
            var densidad_m = $("#densidad_m").val();
            if (densidad_m.indexOf('')== -1){
              $('#densidad_m').addClass('error');
              $('#densidad_m').addClass('error_span');
              $('#span_mensaje_densidad_m').html('Ingrese Densidad del Motor');
            }else{
            $('#densidad_m').removeClass('error');
            $('#densidad_m').removeClass('error_span');
            $('#span_densidad_m').removeClass('error_span');
            $('#span_mensaje_densidad_m').html('');
            }
            
        }); // fin

          //Validaci[on del campo superficie_m
        $('#superficie_m').blur(function(){
            var superficie_m = $("#superficie_m").val();
            if (superficie_m.indexOf('')== -1){
              $('#superficie_m').addClass('error');
              $('#superficie_m').addClass('error_span');
              $('#span_mensaje_superficie_m').html('Ingrese Superficie del Motor');
            }else{
            $('#superficie_m').removeClass('error');
            $('#superficie_m').removeClass('error_span');
            $('#span_superficie_m').removeClass('error_span');
            $('#span_mensaje_superficie_m').html('');
            }
            
        }); // fin

          //Validaci[on del campo observacion_m
        $('#observacion_m').blur(function(){
            var observacion_m = $("#observacion_m").val();
            if (observacion_m.indexOf('')== -1){
              $('#observacion_m').addClass('error');
              $('#observacion_m').addClass('error_span');
              $('#span_mensaje_observacion_m').html('Ingrese Observacion del Motor');
            }else{
            $('#observacion_m').removeClass('error');
            $('#observacion_m').removeClass('error_span');
            $('#span_observacion_m').removeClass('error_span');
            $('#span_mensaje_observacion_m').html('');
            }
            
        }); // fin
 

   //Validaci[on del campo ubicacion_plaqueta
        $('#ubicacion_plaqueta').blur(function(){
            var ubicacion_plaqueta = $("#ubicacion_plaqueta").val();
            if (ubicacion_plaqueta.indexOf('')== -1){
              $('#ubicacion_plaqueta').addClass('error');
              $('#ubicacion_plaqueta').addClass('error_span');
              $('#span_mensaje_ubicacion_plaqueta').html('Ingrese Ubicacion de Plaqueta');
            }else{
            $('#ubicacion_plaqueta').removeClass('error');
            $('#ubicacion_plaqueta').removeClass('error_span');
            $('#span_ubicacion_plaqueta').removeClass('error_span');
            $('#span_mensaje_ubicacion_plaqueta').html('');
            }
            
        }); // fin

        //Validaci[on del campo material_plaqueta
        $('#material_plaqueta').blur(function(){
            var material_plaqueta = $("#material_plaqueta").val();
            if (material_plaqueta.indexOf('')== -1){
              $('#material_plaqueta').addClass('error');
              $('#material_plaqueta').addClass('error_span');
              $('#span_mensaje_material_plaqueta').html('Ingrese Material de Plaqueta');
            }else{
            $('#material_plaqueta').removeClass('error');
            $('#material_plaqueta').removeClass('error_span');
            $('#span_material_plaqueta').removeClass('error_span');
            $('#span_mensaje_material_plaqueta').html('');
            }
            
        }); 

        // fin//Validaci[on del campo tipo_grabado_plaqueta
        $('#tipo_grabado_plaqueta').blur(function(){
            var tipo_grabado_plaqueta = $("#tipo_grabado_plaqueta").val();
            if (tipo_grabado_plaqueta.indexOf('')== -1){
              $('#tipo_grabado_plaqueta').addClass('error');
              $('#tipo_grabado_plaqueta').addClass('error_span');
              $('#span_mensaje_tipo_grabado_plaqueta').html('Ingrese Tipo de Grabado de Plaqueta');
            }else{
            $('#tipo_grabado_plaqueta').removeClass('error');
            $('#tipo_grabado_plaqueta').removeClass('error_span');
            $('#span_tipo_grabado_plaqueta').removeClass('error_span');
            $('#span_mensaje_tipo_grabado_plaqueta').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo tipoRemache_plaqueta
        $('#tipoRemache_plaqueta').blur(function(){
            var tipoRemache_plaqueta = $("#tipoRemache_plaqueta").val();
            if (tipoRemache_plaqueta.indexOf('')== -1){
              $('#tipoRemache_plaqueta').addClass('error');
              $('#tipoRemache_plaqueta').addClass('error_span');
              $('#span_mensaje_tipoRemache_plaqueta').html('Ingrese Tipo de Remache de Plaqueta');
            }else{
            $('#tipoRemache_plaqueta').removeClass('error');
            $('#tipoRemache_plaqueta').removeClass('error_span');
            $('#span_tipoRemache_plaqueta').removeClass('error_span');
            $('#span_mensaje_tipoRemache_plaqueta').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo informacion_plaqueta
        $('#informacion_plaqueta').blur(function(){
            var informacion_plaqueta = $("#informacion_plaqueta").val();
            if (informacion_plaqueta.indexOf('')== -1){
              $('#informacion_plaqueta').addClass('error');
              $('#informacion_plaqueta').addClass('error_span');
              $('#span_mensaje_informacion_plaqueta').html('Ingrese Informacion de Plaqueta');
            }else{
            $('#informacion_plaqueta').removeClass('error');
            $('#informacion_plaqueta').removeClass('error_span');
            $('#span_informacion_plaqueta').removeClass('error_span');
            $('#span_mensaje_informacion_plaqueta').html('');
            }
            
        }); // fin
 
  // fin//Validaci[on del campo observacion_plaqueta
        $('#observacion_plaqueta').blur(function(){
            var observacion_plaqueta = $("#observacion_plaqueta").val();
            if (observacion_plaqueta.indexOf('')== -1){
              $('#observacion_plaqueta').addClass('error');
              $('#observacion_plaqueta').addClass('error_span');
              $('#span_mensaje_observacion_plaqueta').html('Ingrese Observacion de Plaqueta');
            }else{
            $('#observacion_plaqueta').removeClass('error');
            $('#observacion_plaqueta').removeClass('error_span');
            $('#span_observacion_plaqueta').removeClass('error_span');
            $('#span_mensaje_observacion_plaqueta').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo ubicacion_ch
        $('#ubicacion_ch').blur(function(){
            var ubicacion_ch = $("#ubicacion_ch").val();
            if (ubicacion_ch.indexOf('')== -1){
              $('#ubicacion_ch').addClass('error');
              $('#ubicacion_ch').addClass('error_span');
              $('#span_mensaje_ubicacion_ch').html('Ingrese Ubicacion de Chasis');
            }else{
            $('#ubicacion_ch').removeClass('error');
            $('#ubicacion_ch').removeClass('error_span');
            $('#span_ubicacion_ch').removeClass('error_span');
            $('#span_mensaje_ubicacion_ch').html('');
            }
            
        }); // fin


         // fin//Validaci[on del campo tipo_grabado_ch
        $('#tipo_grabado_ch').blur(function(){
            var tipo_grabado_ch = $("#tipo_grabado_ch").val();
            if (tipo_grabado_ch.indexOf('')== -1){
              $('#tipo_grabado_ch').addClass('error');
              $('#tipo_grabado_ch').addClass('error_span');
              $('#span_mensaje_tipo_grabado_ch').html('Ingrese Tipo de Grabado de Chasis');
            }else{
            $('#tipo_grabado_ch').removeClass('error');
            $('#tipo_grabado_ch').removeClass('error_span');
            $('#span_tipograbado_ch').removeClass('error_span');
            $('#span_mensaje_tipo_grabado_ch').html('');
            }
            
        }); // fin

          // fin//Validaci[on del campo alineacion_ch
        $('#alineacion_ch').blur(function(){
            var alineacion_ch = $("#alineacion_ch").val();
            if (alineacion_ch.indexOf('')== -1){
              $('#alineacion_ch').addClass('error');
              $('#alineacion_ch').addClass('error_span');
              $('#span_mensaje_alineacion_ch').html('Ingrese Alineacion de Chasis');
            }else{
            $('#alineacion_ch').removeClass('error');
            $('#alineacion_ch').removeClass('error_span');
            $('#span_alineacion_ch').removeClass('error_span');
            $('#span_mensaje_alineacion_ch').html('');
            }
            
        }); // fin

           // fin//Validaci[on del campo simetria_ch
        $('#simetria_ch').blur(function(){
            var simetria_ch = $("#simetria_ch").val();
            if (simetria_ch.indexOf('')== -1){
              $('#simetria_ch').addClass('error');
              $('#simetria_ch').addClass('error_span');
              $('#span_mensaje_simetria_ch').html('Ingrese Simetria de Chasis');
            }else{
            $('#simetria_ch').removeClass('error');
            $('#simetria_ch').removeClass('error_span');
            $('#span_simetria_ch').removeClass('error_span');
            $('#span_mensaje_simetria_ch').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo cantidad_digitos_ch
        $('#cantidad_digitos_ch').blur(function(){
            var cantidad_digitos_ch = $("#cantidad_digitos_ch").val();
            if (cantidad_digitos_ch.indexOf('')== -1){
              $('#cantidad_digitos_ch').addClass('error');
              $('#cantidad_digitos_ch').addClass('error_span');
              $('#span_mensaje_cantidad_digitos_ch').html('Ingrese Cantidad de Digitos de Chasis');
            }else{
            $('#cantidad_digitos_ch').removeClass('error');
            $('#cantidad_digitos_ch').removeClass('error_span');
            $('#span_cantidad_digitos_serie').removeClass('error_span');
            $('#span_mensaje_cantidad_digitos_serie').html('');
            }
            
        }); // fin

          // fin//Validaci[on del campo espacidad_ch
        $('#espacidad_ch').blur(function(){
            var espacidad_ch = $("#espacidad_ch").val();
            if (espacidad_ch.indexOf('')== -1){
              $('#espacidad_ch').addClass('error');
              $('#espacidad_ch').addClass('error_span');
              $('#span_mensaje_espacidad_ch').html('Ingrese Espacidad de Chasis');
            }else{
            $('#espacidad_ch').removeClass('error');
            $('#espacidad_ch').removeClass('error_span');
            $('#span_espacidad_ch').removeClass('error_span');
            $('#span_mensaje_espacidad_ch').html('');
            }
            
        }); // fin

           // fin//Validaci[on del campo densidad_ch
        $('#densidad_ch').blur(function(){
            var densidad_ch = $("#densidad_ch").val();
            if (densidad_ch.indexOf('')== -1){
              $('#densidad_ch').addClass('error');
              $('#densidad_ch').addClass('error_span');
              $('#span_mensaje_densidad_ch').html('Ingrese Densidad de Chasis');
            }else{
            $('#densidad_ch').removeClass('error');
            $('#densidad_ch').removeClass('error_span');
            $('#span_densidad_ch').removeClass('error_span');
            $('#span_mensaje_densidad_ch').html('');
            }
            
        }); // fin

           // fin//Validaci[on del campo superficie_ch
        $('#superficie_ch').blur(function(){
            var superficie_ch = $("#superficie_ch").val();
            if (superficie_ch.indexOf('')== -1){
              $('#superficie_ch').addClass('error');
              $('#superficie_ch').addClass('error_span');
              $('#span_mensaje_superficie_ch').html('Ingrese Superficie de Chasis');
            }else{
            $('#superficie_ch').removeClass('error');
            $('#superficie_ch').removeClass('error_span');
            $('#span_superficie_ch').removeClass('error_span');
            $('#span_mensaje_superficie_ch').html('');
            }
            
        }); // fin

           // fin//Validaci[on del campo observacion_chasis
        $('#observacion_chasis').blur(function(){
            var observacion_chasis = $("#observacion_chasis").val();
            if (observacion_chasis.indexOf('')== -1){
              $('#observacion_chasis').addClass('error');
              $('#observacion_chasis').addClass('error_span');
              $('#span_mensaje_observacion_chasis').html('Ingrese Observacion de Chasis');
            }else{
            $('#observacion_chasis').removeClass('error');
            $('#observacion_chasis').removeClass('error_span');
            $('#span_observacion_chasis').removeClass('error_span');
            $('#span_mensaje_observacion_chasis').html('');
            }
            
        }); // fin

           // fin//Validaci[on del campo ubicacion_serie
        $('#ubicacion_serie').blur(function(){
            var ubicacion_serie = $("#ubicacion_serie").val();
            if (ubicacion_serie.indexOf('')== -1){
              $('#ubicacion_serie').addClass('error');
              $('#ubicacion_serie').addClass('error_span');
              $('#span_mensaje_ubicacion_serie').html('Ingrese Ubicacion de Serie Secreta');
            }else{
            $('#ubicacion_serie').removeClass('error');
            $('#ubicacion_serie').removeClass('error_span');
            $('#span_ubicacion_serie').removeClass('error_span');
            $('#span_mensaje_ubicacion_serie').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo tipoGrabado_serie
        $('#tipoGrabado_serie').blur(function(){
            var tipoGrabado_serie = $("#tipoGrabado_serie").val();
            if (tipoGrabado_serie.indexOf('')== -1){
              $('#tipoGrabado_serie').addClass('error');
              $('#tipoGrabado_serie').addClass('error_span');
              $('#span_mensaje_tipoGrabado_serie').html('Ingrese Tipo de Grabado de Serie Secreta');
            }else{
            $('#tipoGrabado_serie').removeClass('error');
            $('#tipoGrabado_serie').removeClass('error_span');
            $('#span_tipoGrabado_serie').removeClass('error_span');
            $('#span_mensaje_tipoGrabado_serie').html('');
            }
            
        }); // fin

         // fin//Validaci[on del campo cantidad_digitos_Serie
        $('#cantidad_digitos_Serie').blur(function(){
            var cantidad_digitos_Serie = $("#cantidad_digitos_Serie").val();
            if (cantidad_digitos_Serie.indexOf('')== -1){
              $('#cantidad_digitos_Serie').addClass('error');
              $('#cantidad_digitos_Serie').addClass('error_span');
              $('#span_cantidad_digitos_Serie').html('Ingrese Cantidad de digitos de Serie Secreta');
            }else{
            $('#cantidad_digitos_Serie').removeClass('error');
            $('#cantidad_digitos_Serie').removeClass('error_span');
            $('#span_cantidad_digitos_Serie').removeClass('error_span');
            $('#span_mensaje_cantidad_digitos_Serie').html('');
            }
            
        }); // fin

            // fin//Validaci[on del campo observacion_serie
        $('#observacion_serie').blur(function(){
            var observacion_serie = $("#observacion_serie").val();
            if (observacion_serie.indexOf('')== -1){
              $('#observacion_serie').addClass('error');
              $('#observacion_serie').addClass('error_span');
              $('#span_mensaje_observacion_serie').html('Ingrese Observacion de Serie Secreta');
            }else{
            $('#observacion_serie').removeClass('error');
            $('#observacion_serie').removeClass('error_span');
            $('#span_observacion_serie').removeClass('error_span');
            $('#span_mensaje_observacion_serie').html('');
            }
            
        }); // fin
 
 
 
 
 
 $("#marca").change(function(){
        var id_marca=$("#marca").val();
        if(id_marca=="0"){

        }else{
            $.get('/GET_modelos?marca_id='+id_marca, function(data){
              $('#modelo').empty();
                  $('#modelo').append('<option value="0">Seleccione un Modelo</option>');
                $.each(data, function(index, modelos) {
                  $('#modelo').append('<option value="'+modelos.id+'">'+modelos.modelo_descripcion+'</option>');
                });
            }); 
        }
      });

      $("#modelo").change(function(){
        var id_modelo=$("#modelo").val();
        if(id_modelo=="0"){

        }else{
            $.get('/GET_versiones?modelo_id='+id_modelo, function(data){
              $('#version').empty();
                  $('#version').append('<option value="0">Seleccione una Versión</option>');
                $.each(data, function(index, versiones) {
                  $('#version').append('<option value="'+versiones.id+'">'+versiones.version_descripcion+'</option>');
                });
            }); 
        }
      });  

 

$("#btn_IngresarVehiculos").click(function(){
        
    if($('#cilindraje').val()=="" && $('#transmision_A').val()==""  && $('#combustible').val()=="" && $('#pais_origen').val()=="" && $('#anio').val()=="" && $('#casa_ensambladora_A').val()=="" && $('#ubicacion_motor').val()==""  && $('#tipo_grabado_m').val()==""  && $('#alineacion_m').val()=="" && $('#simetria_m').val()=="" && $('#cantidad_digito_mo').val()=="" && $('#espacidad_m').val()=="" && $('#densidad_m').val()=="" && $('#superficie_m').val()=="" && $('#observacion_m').val()=="" && $('#ubicacion_plaqueta').val()=="" && $('#material_plaqueta').val()=="" && $('#tipo_grabado_plaqueta').val()=="" && $('#tipoRemache_plaqueta').val()=="" && $('#informacion_plaqueta').val()=="" && $('#observacion_plaqueta').val()=="" && $('#ubicacion_ch').val()=="" && $('#tipo_grabado_ch').val()==""  && $('#alineacion_ch').val()=="" && $('#simetria_ch').val()=="" && $('#cantidad_digitos_ch').val()=="" && $('#espacidad_ch').val()=="" && $('#densidad_ch').val()=="" && $('#superficie_ch').val()=="" && $('#observacion_chasis').val()=="" && $('#ubicacion_serie').val()=="" && $('#tipoGrabado_serie').val()=="" && $('#cantidad_digitos_Serie').val()==""  && $('#observacion_serie').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#cilindraje').addClass('error');
                $('#transmision_A').addClass('error');
                $('#combustible').addClass('error');
                $('#pais_origen').addClass('error');
                $('#anio').addClass('error');
                $('#casa_ensambladora_A').addClass('error');
                
                $('#ubicacion_motor').addClass('error');
                $('#tipo_grabado_m').addClass('error');
                $('#alineacion_m').addClass('error');
                $('#simetria_m').addClass('error');
                $('#cantidad_digito_mo').addClass('error');
                $('#espacidad_m').addClass('error');
                $('#densidad_m').addClass('error');
                $('#superficie_m').addClass('error');
                $('#observacion_m').addClass('error');

                $('#ubicacion_plaqueta').addClass('error');
                $('#material_plaqueta').addClass('error');
                $('#tipo_grabado_plaqueta').addClass('error');
                $('#tipoRemache_plaqueta').addClass('error');
                $('#informacion_plaqueta').addClass('error');
                $('#observacion_plaqueta').addClass('error');
                
                $('#ubicacion_ch').addClass('error');
                $('#tipo_grabado_ch').addClass('error');
                $('#alineacion_ch').addClass('error');
                $('#simetria_ch').addClass('error');
                $('#cantidad_digitos_ch').addClass('error');
                $('#espacidad_ch').addClass('error');
                $('#densidad_ch').addClass('error');
                $('#superficie_ch').addClass('error');
                $('#observacion_chasis').addClass('error');
                $('#chasis').addClass('error');

                $('#ubicacion_serie').addClass('error');
                $('#tipoGrabado_serie').addClass('error');
                $('#cantidad_digitos_Serie').addClass('error');
                $('#observacion_serie').addClass('error');


          }else if($('#cilindraje').val()==""){
                      $('#cilindraje').addClass('error');
                      $('#span_cilindraje').addClass('error_span');
                      $('#span_mensaje_cilindraje').html('Ingrese cilindraje');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese cilindraje',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#transmision_A').val()==""){
                      $('#transmision_A').addClass('error');
                      $('#span_transmision').addClass('error_span');
                      $('#span_mensaje_transmision').html('Ingrese transmision');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese transmision',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#combustible').val()==""){
                      $('#combustible').addClass('error');
                      $('#span_combustible').addClass('error_span');
                      $('#span_mensaje_combustible').html('Ingrese combustible');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese combustible',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#pais_origen').val()==""){
                      $('#pais_origen').addClass('error');
                      $('#span_pais_origen').addClass('error_span');
                      $('#span_mensaje_pais_origen').html('Ingrese Pais de Origen');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese Pais de Origen',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#anio').val()==""){
                      $('#anio').addClass('error');
                      $('#span_anio').addClass('error_span');
                      $('#span_mensaje_anio').html('Ingrese anio');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese año',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#casa_ensambladora_A').val()==""){
                      $('#casa_ensambladora_A').addClass('error');
                      $('#span_casa_ensambladora_A').addClass('error_span');
                      $('#span_mensaje_casa_ensambladora_A').html('Ingrese  Casa Ensambladora');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese  Casa Ensambladora',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#ubicacion_motor').val()==""){
                      $('#ubicacion_motor').addClass('error');
                      $('#span_ubicacion_motor').addClass('error_span');
                      $('#span_mensaje_ubicacion_motor').html('Ingrese Ubicacion del motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Ubicacion del motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#tipo_grabado_m').val()==""){
                      $('#tipo_grabado_m').addClass('error');
                      $('#span_tipo_grabado_m').addClass('error_span');
                      $('#span_mensaje_tipo_grabado_m').html('Ingrese tipo de Grabados');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese tipo de Grabado',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#alineacion_m').val()==""){
                      $('#alineacion_m').addClass('error');
                      $('#span_alineacion_m').addClass('error_span');
                      $('#span_mensaje_alineacion_m').html('Ingrese Alineacion del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese ALineacion del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#simetria_m').val()==""){
                      $('#simetria_m').addClass('error');
                      $('#span_simetria_m').addClass('error_span');
                      $('#span_mensaje_simetria_m').html('Ingrese Simetria del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Simetria del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#cantidad_digito_mo').val()==""){
                      $('#cantidad_digito_mo').addClass('error');
                      $('#span_cantidad_digito_mo').addClass('error_span');
                      $('#span_mensaje_cantidad_digito_mo').html('Ingrese Cantidad de Digitos del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Cantidad de Digitos del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#espacidad_m').val()==""){
                      $('#espacidad_m').addClass('error');
                      $('#span_espacidad_m').addClass('error_span');
                      $('#span_mensaje_espacidad_m').html('Ingrese Espacidad del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Espacidad del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#densidad_m').val()==""){
                      $('#densidad_m').addClass('error');
                      $('#span_densidad_m').addClass('error_span');
                      $('#span_mensaje_densidad_m').html('Ingrese Densidad del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Densidad del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#superficie_m').val()==""){
                      $('#superficie_m').addClass('error');
                      $('#span_superficie_m').addClass('error_span');
                      $('#span_mensaje_superficie_m').html('Ingrese Superficie del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Superficie del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#observacion_m').val()==""){
                      $('#observacion_m').addClass('error');
                      $('#span_observacion_m').addClass('error_span');
                      $('#span_mensaje_observacion_m').html('Ingrese observacion del Motor');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese observacion del Motor',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#ubicacion_plaqueta').val()==""){
                      $('#ubicacion_plaqueta').addClass('error');
                      $('#span_ubicacion_plaqueta').addClass('error_span');
                      $('#span_mensaje_ubicacion_plaqueta').html('Ingrese Ubicacion de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Ubicacion de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#material_plaqueta').val()==""){
                      $('#material_plaqueta').addClass('error');
                      $('#span_material_plaqueta').addClass('error_span');
                      $('#span_mensaje_material_plaqueta').html('Ingrese Material de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Ubicacion de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#tipo_grabado_plaqueta').val()==""){
                      $('#tipo_grabado_plaqueta').addClass('error');
                      $('#span_tipo_grabado_plaqueta').addClass('error_span');
                      $('#span_mensaje_tipo_grabado_plaqueta').html('Ingrese Tipo De Grabado de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Tipo de Grabado de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#tipoRemache_plaqueta').val()==""){
                      $('#tipoRemache_plaqueta').addClass('error');
                      $('#span_tipoRemache_plaqueta').addClass('error_span');
                      $('#span_mensaje_tipoRemache_plaqueta').html('Ingrese Tipo de Remache de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Tipo de Remache de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#informacion_plaqueta').val()==""){
                      $('#informacion_plaqueta').addClass('error');
                      $('#span_informacion_plaqueta').addClass('error_span');
                      $('#span_mensaje_informacion_plaqueta').html('Ingrese Informacion de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Informacion de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#observacion_plaqueta').val()==""){
                      $('#observacion_plaqueta').addClass('error');
                      $('#span_observacion_plaqueta').addClass('error_span');
                      $('#span_mensaje_observacion_plaqueta').html('Ingrese Observacion de Plaqueta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Observacion de Plaqueta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#ubicacion_ch').val()==""){
                      $('#ubicacion_ch').addClass('error');
                      $('#span_ubicacion_ch').addClass('error_span');
                      $('#span_mensaje_ubicacion_ch').html('Ingrese Ubicacion del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Ubicacion del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#tipo_grabado_ch').val()==""){
                      $('#tipo_grabado_ch').addClass('error');
                      $('#span_tipo_grabado_ch').addClass('error_span');
                      $('#span_mensaje_tipo_grabado_ch').html('Ingrese tipo de Grabado de Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese tipo de Grabado de Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#alineacion_ch').val()==""){
                      $('#alineacion_ch').addClass('error');
                      $('#span_alineacion_ch').addClass('error_span');
                      $('#span_mensaje_alineacion_ch').html('Ingrese Alineacion del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese ALineacion del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#simetria_ch').val()==""){
                      $('#simetria_ch').addClass('error');
                      $('#span_simetria_ch').addClass('error_span');
                      $('#span_mensaje_simetria_ch').html('Ingrese Simetria del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Simetria del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#cantidad_digitos_ch').val()==""){
                      $('#cantidad_digitos_ch').addClass('error');
                      $('#span_cantidad_digitos_ch').addClass('error_span');
                      $('#span_mensaje_cantidad_digitos_ch').html('Ingrese Cantidad de Digitos del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Cantidad de Digitos del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#espacidad_ch').val()==""){
                      $('#espacidad_ch').addClass('error');
                      $('#span_espacidad_ch').addClass('error_span');
                      $('#span_mensaje_espacidad_ch').html('Ingrese Espacidad del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Espacidad del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#densidad_ch').val()==""){
                      $('#densidad_ch').addClass('error');
                      $('#span_densidad_ch').addClass('error_span');
                      $('#span_mensaje_densidad_ch').html('Ingrese Densidad del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Densidad del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#superficie_ch').val()==""){
                      $('#superficie_ch').addClass('error');
                      $('#span_superficie_ch').addClass('error_span');
                      $('#span_mensaje_superficie_ch').html('Ingrese Superficie del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese Superficie del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#observacion_chasis').val()==""){
                      $('#observacion_chasis').addClass('error');
                      $('#span_observacion_chasis').addClass('error_span');
                      $('#span_mensaje_observacion_chasis').html('Ingrese observacion del Chasis');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese observacion del Chasis',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#ubicacion_serie').val()==""){
                      $('#ubicacion_serie').addClass('error');
                      $('#span_ubicacion_serie').addClass('error_span');
                      $('#span_mensaje_ubicacion_serie').html('Ingrese ubicacion de la serie secreta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese ubicacion de la serie secreta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#tipoGrabado_serie').val()==""){
                      $('#tipoGrabado_serie').addClass('error');
                      $('#span_tipoGrabado_serie').addClass('error_span');
                      $('#span_mensaje_tipoGrabado_serie').html('Ingrese tipo de Grabado de la serie secreta');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese tipo de Grabado de la serie secreta',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#cantidad_digitos_Serie').val()==""){
                      $('#cantidad_digitos_Serie').addClass('error');
                      $('#span_cantidad_digitos_Serie').addClass('error_span');
                      $('#span_mensaje_cantidad_digitos_Serie').html('Ingrese cantidad de Digitos de la serie  ');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese cantidad de Digitos de la serie  ',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#observacion_serie').val()==""){
                      $('#observacion_serie').addClass('error');
                      $('#span_observacion_serie').addClass('error_span');
                      $('#span_mensaje_observacion_serie').html('Ingrese observacion de la Serie');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! Ingrese observacion de la Serie',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else{ 
    registrar_vehiculo();
  }
});   


          // funcion para registrar modelos
              function registrar_vehiculo(){
                  
              	  var token    = new $('#token_vehiculo').val();
                  var datos  = new FormData($("#frmIngresarVehiculos")[0]);
                  $.ajax({
                  url:"/app/vehiculo",
                  headers :{'X-CSRF-TOKEN': token},
                  type: 'POST',
                  dataType: 'json',
                  contentType: false,
                  processData: false,
                  data: datos,
                  success:function(res){
                    if(res.registro==true){
                       //swal("Efood!", "El usuario se ha registro correctamente!", "success");
                      swal("Vehiculo Registrado Correctamente..!!", "", "success");
                      document.getElementById("frmIngresarVehiculo").reset();  
                     // $("#myModal_IngresarModelo").modal("hide");
                    ///  $("#datatable").load("/lista_modelo");
                     }
                   }
              	});
              }


              // modificar modelos

 
            $("#btn_ActualizarModelos").click(function() {
            Actualizar_modelo();
            });
           


    function cargar_datos(id){
    var route="/app/modelo/" +id+"/edit";	
    $.get(route,function(res){
    //	alert(res.tipoUsuario);
      $("#IdModelo").val(res.id)
      $("#marca_A").val(res.id_marca);     
      $("#modelo_A").val(res.modelo_descripcion);     
      });
    }

       
  function Actualizar_modelo(){

  var id =$("#IdModelo").val();
  var id_marca =$("#marca_A").val();
  var modelo_descripcion =$("#modelo_A").val();
  var token  =$("#token").val();
  var route="/app/modelo/" +id; 
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{id_marca:id_marca,modelo_descripcion:modelo_descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarModelos').modal('hide');
           swal("Modelo Modificado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_modelo');
            
          }else{
           swal("Error al modificar Modelo..!!", "", "error");
               }
          
        }
  });
}

 

function EliminarModelo(id){

    swal({ 
    title: "¿Deseas Elimar Modelo",
    text: "",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "¡Eliminar!",
    cancelButtonText: "No,Cancelar", 
    closeOnConfirm: false,
    closeOnCancel: false },

    function(isConfirm){ 
    if (isConfirm){
      var route  ="/app/modelo/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Modelo Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_modelo");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar modelo ","error"); 
    } 
  });
   

    
}