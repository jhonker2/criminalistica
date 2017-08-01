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
$("#btn_ActualizarMarca").click(function() {
  Actualizar_marcas();
});
           


    function cargar_datos(id){
      $("#foto_marca_A").attr("src","");
      $("#image2").attr("src","");
    var route="/app/marca/" +id+"/edit";	
    $.get(route,function(res){
      $("#IdMarca_a").val(res.id)
      $("#marca_A").val(res.marca);     
      $("#foto_marca_A").attr("src","../"+res.logo);     
      });
    }

       
  function Actualizar_marcas(){
  var token =$("#token").val();
  var route ="/app/marca_act";
  var datos  = new FormData($("#frmActualizarMarcas")[0]);
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      data    :datos,
    success:function(res){
          if(res.sms=='ok'){
            $("#foto_marca").val("");
            $('#myModal_ModificarMarcas').modal('hide');
            swal("Marca se modifico correctamente..!!", "", "success");
            $("#datatable").load('/lista_marca');
          }else{
            swal("Error al modificar Marca..!!", "", "error");
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

$("#marcas").change(function(){
        var id_marca=$("#marcas").val();
        if(id_marca==""){

        }else{
            $.get('/GET_modelos?marca_id='+id_marca, function(data){
              $('#modelos').empty();
                  $('#modelos').append('<option value="0">Seleccione un Modelo</option>');
                $.each(data, function(index, modelos) {
                  $('#modelos').append('<option value="'+modelos.id+'">'+modelos.modelo_descripcion+'</option>');
                });
            }); 
        }
      });
 $("#modelos").change(function(){
        var id_modelo=$("#modelos").val();
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


function fotoMarca(evt){
  var files = evt.target.files; // FileList object
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
              return function(e) {
               // Creamos la imagen.
               $("#foto_marca_A").attr("src","");
                document.getElementById("marca_output").innerHTML = ['<img class="thumb"  id="image2" src="', e.target.result,'"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}

document.getElementById('foto_marca').addEventListener('change', fotoMarca, false);

