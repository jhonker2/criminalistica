$(document).ready(function(){
    $('#tabla').DataTable();
});
        

/*Validaci[on del campo Marca*/
        $('#Marca').blur(function(){
            var Marca = $("#Marca").val();
            if (Marca.indexOf('')== -1){
              $('#Marca').addClass('error');
              $('#Marca').addClass('error_span');
              $('#span_mensaje_versiones').html('Ingrese Marca');
            }else{
            $('#Marca').removeClass('error');
            $('#Marca').removeClass('error_span');
            $('#span_mensaje_modelo').html('');
            }
            
        }); // fin

 


//FUNCION validar capos al REGISTRAR Marcas
$("#btn_IngresarMarca").click(function(){
 if($('#Marca').val()=="" ){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#Marca').addClass('error');
Marca
          }else if($('#Marca').val()==""){
                      $('#Marca').addClass('error');
                      $('#span_Marca').addClass('error_span');
                      $('#span_mensaje_Marca').html('Ingrese Marca');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese Marca',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else{	
    registrar_marca();
  }
});



// funcion para registrar modelos
function registrar_marca(){
	  var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarMarca")[0]);
    $.ajax({
      url:"/app/marca",
      headers :{'X-CSRF-TOKEN': token},
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      data: datos,
      success:function(res){
        if(res.registro==true){
          swal("Marca Registrada Correctamente..!!", "", "success");
          document.getElementById("frmIngresarMarca").reset();  
          $("#myModal_IngresarMarca").modal("hide");
          $("#datatable").load("/lista_marca");
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