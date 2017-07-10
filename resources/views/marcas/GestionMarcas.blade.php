    <!-- jQuery -->
    {!!Html::script('js/admin-js/Marcas.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Marcas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                       <ul class="nav navbar-right panel_toolbox">
                          <ul class="nav navbar-right panel_toolbox">                    
                          <a href="/app/crear_reporte_politicas/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                          </ul>
                      </ul>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarModelo"><i class="fa fa-user-plus"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('Marcas.TableMarcas')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar de Marcas-->

<div class="modal fade" id="myModal_ModificarModelos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Version </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarVersiones'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
            <input  type="hidden" name="" value="" id="IdVersion"> 

           
            <input  type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
              <input  type="hidden" name="" value="" id="IdModelo">
              
                     
              {!!Form::label('Marca:')!!}
              {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese Modelo','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
              <span id="span_modelo_A"></span>
              <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarModelos', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Modidifcar de marcas -->


<!--  Modal para Ingresar marcas-->

<div class="modal fade" id="myModal_IngresarModelo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Versiones</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarModelos','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdModelo">
              
           <div class="col-md-6 col-xs-12">  
              {!!Form::label('Marca:')!!}
              {!!Form::text('Marca',null,['id'=>'Marca', 'class'=>'form-control','placeholder'=>'Ingrese Marca','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                <span id="span_marca"></span>
               <span id="span_mensaje_marca" style="display: block;color: red;"></span>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">     
              <div class="col-md-4 col-xs-6">
                            <div class="foto"><span type="file"></span>
                                </div>
                                <label class="uploader foto" ondragover="return false">
                                   <i  class="fa fa-user fa-4x" aria-hidden="true"></i>
                                  <img src="" class="">
                                    <input type="file" name="archivo" id="archivo" accept="image/*" required>
                               </label>
             </div>
           </div>                 
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarMarca" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar marcas -->
 <script type="text/javascript">
            new FileUploader('.uploader');
 </script>
