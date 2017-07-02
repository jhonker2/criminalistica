
        

/*Validaci[on del campo modelo*/
        $('#modelo').blur(function(){
            var modelo = $("#modelo").val();
            if (modelo.indexOf('')== -1){
              $('#modelo').addClass('error');
              $('#modelo').addClass('error_span');
              $('#span_mensaje_versiones').html('Ingrese Modelo');
            }else{
            $('#modelo').removeClass('error');
            $('#modelo').removeClass('error_span');
            $('#span_mensaje_modelo').html('');
            }
            
        }); // fin

 


//FUNCION validar capos al REGISTRAR modelos 
$("#btn_IngresarModelos").click(function(){
 if($('#modelo').val()=="" ){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#modelo').addClass('error');

          }else if($('#modelo').val()==""){
                      $('#modelo').addClass('error');
                      $('#span_modelo').addClass('error_span');
                      $('#span_mensaje_modelo').html('Ingrese modelo');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese modelo',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else{	
    registrar_modelos();
  }
});



// funcion para registrar modelos
function registrar_modelos(){
    
	  var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarModelos")[0]);
    $.ajax({
    url:"/app/modelo",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Modelo Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarModelos").reset();  
        $("#myModal_IngresarModelo").modal("hide");
        $("#datatable").load("/lista_modelo");
       }
     }
	});
}


// modificar modelos

 
            $("#btn_Actualizar_modelo").click(function() {
            Actualizar_modelo();
            });
           


    function cargar_datos(id){
    var route="/app/modelo/" +id+"/edit";	
    $.get(route,function(res){
    //	alert(res.tipoUsuario);
      $("#IdVersion").val(res.id)
      $("#modelos_A").val(res.id_modelo);     
      $("#versiones_A").val(res.version_descripcion);     
      });
    }

       
  function Actualizar_modelo(){

  var id =$("#IdVersion").val();
  var id_modelo =$("#tipoUsuario_A").val();
  var version_descripcion =$("#versiones_A").val();
  var token  =$("#token").val();
  var route="/app/modelo/" +id; 
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
			var route  ="/app/modelo/"+id+"";
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