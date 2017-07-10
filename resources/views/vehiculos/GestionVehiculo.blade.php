    <!-- jQuery -->
    {!!Html::script('js/admin-js/Marcas.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Modelos</h2>
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
                   
                   <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmUser','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                 <div class="form-group">
                                    <label for="disabledTextInput">Tipo de Chasis</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione chasis</option>
                                    @foreach($Chasis as $cha)
                                        <option value="{{$cha->id}}"> {{$cha->tipo_chasis}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="disabledTextInput">Version</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Version</option>
                                    @foreach($Version as $ve)
                                        <option value="{{$ve->id}}"> {{$ve->version_descripcion}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="disabledTextInput">Plaqueta</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Plaqueta</option>
                                    @foreach($Plaquetas as $pla)
                                        <option value="{{$pla->id}}"> {{$pla->observacion}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="disabledTextInput">Motor</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Motor</option>
                                    @foreach($Motores as $mot)
                                        <option value="{{$mot->id}}"> {{$mot->tipo_grabado}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="disabledTextInput">Serie</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Serie</option>
                                    @foreach($Series as $se)
                                        <option value="{{$se->id}}"> {{$se->observacion}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                                  
                               {!!Form::label('Cilindraje:')!!}
                               {!!Form::text('cilindraje',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese Modelo','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                  <span id="span_modelo_A"></span>
                                  <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>

                                {!!Form::label('Trasmision:')!!}
                                {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese Modelo','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                <span id="span_modelo_A"></span>
                                <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>

                               {!!Form::label('Combustible:')!!}
                                {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese Modelo','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                <span id="span_modelo_A"></span>
                                <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>

                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_Usuario', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div> 
                <div class="col-md-6 col-xs-6">
                            <div class="foto"><span type="file"></span>
                                </div>
                                <label class="uploader foto" ondragover="return false">
                                   <i  class="fa fa-user fa-4x" aria-hidden="true"></i>
                                  <img src="" class="">
                                    <input type="file" name="archivo" id="archivo" accept="image/*" required>
                               </label>
             </div> 
               
        </div> <!--fin del div registro -->
     </div>
                    
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar de versiones-->

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

<!--  FIN Modal para Moidifcar de versiones -->


<!--  Modal para Ingresar Modelos -->

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
            <div class="col-md-6 col-sm-6 col-xs-12">     
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

<!--  FIN Modal para Ingresar Modelos -->
   
