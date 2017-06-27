    <!-- jQuery -->
    {!!Html::script('js/politicasPNBV.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Versiones</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                       <ul class="nav navbar-right panel_toolbox">
                          <ul class="nav navbar-right panel_toolbox">                    
                          <a href="/app/crear_reporte_politicas/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                          </ul>
                      </ul>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarPoliticaPNBV"><i class="fa fa-user-plus"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('versiones.TablaVersiones')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar politicas intitucional-->

<div class="modal fade" id="myModal_ModificarPoliticaPNBV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Politica Institucional </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoEstadoMeta'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdPoliticaPNBV"> 

           
             {!!Form::label('Politica del PNBV:')!!}
              {!!Form::text('politicaPNBV_A',null,['id'=>'politicaPNBV_A', 'class'=>'form-control','placeholder'=>'Ingrese Politica del PNBV','required'=>''])!!}
              <span id="span_politicaPNBV_A"></span>
              <span id="span_mensaje_politicaPNBV_A" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarPoliticaPNBV', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar politica institucional -->


<!--  Modal para Ingresar politicas de PNBV -->

<div class="modal fade" id="myModal_IngresarPoliticaPNBV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Politica del PNBV</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarPoliticaPNBV','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdPoliticaPNBV">
              

              {!!Form::label('Politica del PNBV:')!!}
              {!!Form::text('politicaPNBV',null,['id'=>'politicaPNBV', 'class'=>'form-control','placeholder'=>'Ingrese Politica PNBV','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
              <span id="span_politicaPNBV"></span>
              <span id="span_mensaje_politicaPNBV" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarPoliticaPNBV" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar politicas PNBV -->
   
