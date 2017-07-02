
        

/*Validaci[on del campo versiones*/
        $('#versiones').blur(function(){
            var versiones = $("#versiones").val();
            if (versiones.indexOf('')== -1){
              $('#versiones').addClass('error');
              $('#versiones').addClass('error_span');
              $('#span_mensaje_versiones').html('Ingrese Version ');
            }else{
            $('#versiones').removeClass('error');
            $('#versiones').removeClass('error_span');
            $('#span_mensaje_versiones').html('');
            }
            
        }); // fin

 /*Validaci[on del campo password*/
        $('#password').blur(function(){
            var password = $("#password").val();
            if (password.indexOf('')== -1){
              $('#password').addClass('error');
              $('#span_mensaje_password').html('Ingrese el password ');
            }else{
            $('#password').removeClass('error');
            $('#span_mensaje_password').html('');
            }
            
        }); // fin

     /*Validaci[on del campo tipoUsuario
        $('#tipoUsuario').blur(function(){
            var tipoUsuario = $("#tipoUsuario").val();
            if (tipoUsuario.indexOf('Seleccione Tipo Usuario')== 1){
              $('#tipoUsuario').addClass('error');
              $('#span_mensaje_tipoUsuario').html('Ingrese el tipo de Usuario ');
            }else{
            $('#tipoUsuario').removeClass('error');
            $('#span_mensaje_tipoUsuario').html('');
            }
            
        }); // fin*/


//FUNCION REGISTRAR USUARIOS
$("#btn_IngresarVersiones").click(function(){
 if($('#versiones').val()=="" ){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#versiones').addClass('error');

          }else if($('#versiones').val()==""){
                      $('#versiones').addClass('error');
                      $('#span_versiones').addClass('error_span');
                      $('#span_mensaje_versiones').html('Ingrese version');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese version',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else{	
    registrar_versiones();
  }
});



// funcion para registrar versiones
function registrar_versiones(){
    
	  var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarVersiones")[0]);
    $.ajax({
    url:"/app/versione",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Version Registrada Correctamente..!!", "", "success");
        document.getElementById("frmIngresarVersiones").reset();  
        $("#myModal_IngresarVersiones").modal("hide");
        $("#datatable").load("/lista_versione");
       }
     }
	});
}


// modificar versiones

 
            $("#btn_ActualizarVersiones").click(function() {
            Actualizar_Versiones();
            });
           


    function cargar_datos(id){
    var route="/app/versione/" +id+"/edit";	
    $.get(route,function(res){
    //	alert(res.tipoUsuario);
      $("#IdVersion").val(res.id)
      $("#modelos_A").val(res.id_modelo);     
      $("#versiones_A").val(res.version_descripcion);     
      });
    }

       
  function Actualizar_Versiones(){

  var id =$("#IdVersion").val();
  var id_modelo =$("#tipoUsuario_A").val();
  var version_descripcion =$("#versiones_A").val();
  var token  =$("#token").val();
  var route="/app/versione/" +id; 
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{id_modelo:id_modelo,version_descripcion:version_descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarVersiones').modal('hide');
           swal("Version Modificado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_versione');
            
          }else{
           swal("Error al modificar Version..!!", "", "error");
               }
          
        }
  });
}

 

function EliminarUsuarios(id){

    swal({ 
		title: "¿Deseas Elimar el Usuario?",
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
			var route  ="/app/usuario/"+id+"";
		    var token  =$("#token").val();
		    $.ajax({
			    url: route,
			    headers :{'X-CSRF-TOKEN': token},
			    type: 'delete',
			    dataType:'json',
			        success:function(res){
			         if(res.sms=='ok'){
						swal("¡Hecho!","Usuario Eliminado Correctamente","success"); 
			            $("#datatable").load("/lista_usuarios");
			          }          
			        }
		 	     });
        }else { 
			swal("¡Error !","No se pudo Eliminar el Usuario ","error"); 
		} 
	});
   

    
}