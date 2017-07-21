$(document).ready(function(){
    $('#tabla').DataTable();
});
        

$("#btn_sig2").click(function(){
            if($('#ubicacion_motor').val()=="" && $('#tipo_grabado_M').val()=="" && $('#alineacion_m').val()=="" && $("#simetria_m").val()=="" && $('#cantidad_digitos_m').val()==0 && $("#espacidad_m").val()=="" && $("#densidad_m").val()=="" && $("#superficie_m").val()=="" && $("#superficie_m").val()=="" && $("#observacion_m").val()==""){
                var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
                $('#ubicacion_motor').addClass('error');
                $('#tipo_grabado_M').addClass('error');
                $('#alineacion_m').addClass('error');
                $('#simetria_m').addClass('error');
                $('#cantidad_digitos_m').addClass('error');
                $('#direccion_E').addClass('error');
                $('#correo_E').addClass('error');
                $('#telefono_E').addClass('error');

            }else if($('#cedula').val()==""){
                $('#cedula').addClass('error');
                $('#span_cedula').addClass('error_span');
                $('#span_mensaje').html('Ingrese un número de cédula');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese un numero de cédula',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#apellidoPaterno').val()==""){
                $('#apellidoPaterno').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese su Apellido Paterno',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#apellidoMaterno').val()==""){
                $('#apellidoMaterno').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese su Apellido Materno',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#nombre').val()==""){
                $('#nombre').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese su Nombre ',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#estadoCivil').val()==0){
                $('#estadoCivil').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! seleccione un estado civil',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#direccion_E').val()==""){
                $('#direccion_E').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese su direccion de domicilio',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#correo_E').val()==""){
                $('#correo_E').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese el correo Electronico',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if( $('#telefono_E').val()==""){
                $('#telefono_E').addClass('error');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese el numero de telefono',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }
            else{
                $('#Tab_empleado a[href="#tab-2"]').tab('show');
            }

        });


          // funcion para registrar modelos
              function registrar_vehiculo(){
                  
              	  var token    = new $('#token').val();
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