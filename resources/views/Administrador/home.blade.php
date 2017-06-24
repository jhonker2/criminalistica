@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
            <input type="hidden" id="cajera" value="{{Auth::user()->email}}">
                <div class="panel-heading">Cobros</div>

                <div class="panel-body">
                        <div class="col-md-8 col-md-offset-2">
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                            <input type="text" class="form-control" name="cliente" value="" placeholder="Ingrese cedula , Nombre ,cuenta" id="buscar_cliente"> 
                        </div>

                        <div class="row">
                            <div class="col-md-12" id="clientes">
                                
                            </div>
                            <div id="load" class="lod_home" style="display: none;">
                              <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                              <span class="sr-only">Buscando Clientes...</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Modal_Pago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">PAGO  <p id="cliente_nombre"></p></h4>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-md-12">
                <input type="hidden" name="cod_cliente" id="cod_cliente">
               <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Numero Cuenta:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 margin_bott10">
                          <input type="text" class="form-control" id="num_cuenta" disabled="true">
                          <span class="fa fa-address-card-o form-control-feedback right" aria-hidden="true"></span>
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Deuda:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 margin_bott10">
                          <input type="text" class="form-control" id="deuda" disabled="true">
                          <span class="fa fa-usd form-control-feedback right" aria-hidden="true"></span>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Monto:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 margin_bott10">
                          <input type="number" id="monto" class="form-control" onKeyPress="return solo_monedas(event)">
                          <span class="fa fa-usd form-control-feedback right" aria-hidden="true"></span>
                        </div>
                </div>
                <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-3">Formas de Pago *:</label>
                     <div class="col-md-9 col-sm-9 col-xs-9 margin_bott10">
                      <p>
                        Efectivo:
                        <input type="radio" class="flat" name="gender" id="rEfectivo" value="efectivo" checked="" required /> Cheque:
                        <input type="radio" class="flat" name="gender" id="rCheque" value="cheque" />
                        Transferencia:
                        <input type="radio" class="flat" name="gender" id="rTransferencia" value="transferencia" />
                        Tarjeta:
                        <input type="radio" class="flat" name="gender" id="rTarjeta" value="tarjeta" />
                      </p>
                        </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Saldo Pendiente:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 margin_bott10">
                          <input type="number" id="saldo_pendiente" class="form-control" disabled="true">
                          <span class="fa fa-usd form-control-feedback right" aria-hidden="true"></span>
                        </div>
                </div>
           </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btn_close" data-dismiss="modal">Close</button>
        <button type="button" id="btn_guardar" class="btn btn-primary">Guardar Pago</button>
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
