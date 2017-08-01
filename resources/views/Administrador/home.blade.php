@extends('layouts.app')

@section('content')
<div id="content">
  <div class="right_col no_margin" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
              @foreach($totalUsuarios as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Total de Vehiculos</span>

              @foreach($totalVehiculos as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Total Marcas</span>
              @foreach($totalMarcas as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
          </div>
  </div>
</div>
@endsection

@section('js')

<script>

   $(document).ready(function(){
    $("#buscar_cliente").focus();
   })

   $("#btn_close").click(function(){
       limpiar();
   });

   function limpiar(){
    $("#deuda").val("");
        $("#monto").val("");
        $("#num_cuenta").val("");
        $("#saldo_pendiente").val("");
   }


   $("#monto").keyup(function(){
       var deuda =parseFloat($("#deuda").val().replace(',','.'));
       var monto =parseFloat($("#monto").val());
       var saldo =deuda-monto;
       if(saldo<0){
        //alert("monto ingresado incorrecto");
            $("#saldo_pendiente").addClass("error");
       }else{
            $("#saldo_pendiente").removeClass("error");
       }
       $("#saldo_pendiente").val(Math.round(saldo * 100) / 100);

   });

   $("#btn_guardar").click(function(){
    var num_cuenta = $("#num_cuenta").val();
    var deuda =parseFloat($("#deuda").val().replace(',','.'));
    var monto =$("#monto").val();
    var cajera = $("#cajera").val();
    var cod_cliente = $("#cod_cliente").val();
    var tipo_pago=$('input[name="gender"]:checked').val();
    var token = $("#token").val();
    if(monto!=""){
        if(parseFloat(monto)>deuda){
            alert("El monto ingresado sobrepasa a valor de la deuda");
        }else{
            // guardar datos 
            registrar_pago(cod_cliente,num_cuenta,deuda,monto,tipo_pago,cajera,token);

        }

    }else{
        alert("El monto esta vacio");
    }
   });





    $("#buscar_cliente").keypress(function(tecla) {
    if (tecla.which == 13) {
     $('#load').show();
      if($("#buscar_cliente").val()==""){
        alert("Deberias agregar alguna información para consultar");
        $('#load').hide();
        }else{
          buscar_cliente($("#buscar_cliente").val());
        }
      }
    });

    function registrar_pago(cod_cliente, cuenta, deuda,monto,tipoPago,cajera,token){
        $.ajax({
            url:"/pstore",
            headers :{'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType:'json',
            data:{cod_cliente:cod_cliente,cuenta:cuenta,deuda:deuda,monto:monto,tipoPago:tipoPago,cajera:cajera,token:token},
            success:function(res){
                if(res.sms=="ok"){
                    alert("deuda actualizada");
                    $("#Modal_Pago").modal("hide");
                    $("#clientes").html("");
                    $("#buscar_cliente").val("");
                    limpiar();
                }

            }
        })

    }

    function buscar_cliente($cedula){
      $.ajax({
        url:"/buscar_cliente/"+$cedula,
        headers :{'X-CSRF-TOKEN': token},
        type: 'GET',
        success:function(res){ 
        $('#load').hide();
            $("#clientes").html(res);
            /*$(res).each(function(i, v){
            $("#codigo").html(v.cod_cliente);
            $("#codigo1").html(v.identificacion);
            $("#codigo2").html(v.cliente);
            $("#codigo3").html(v.cuenta);
            $("#codigo4").html(v.direccion);
            $("#codigo5").html(v.tipo_consumo);
            $("#codigo6").html(v.facturas_impago);
            $("#codigo7").html(v.deuda_total);

        })*/
        }
      })
    }


</script>
@endsection
