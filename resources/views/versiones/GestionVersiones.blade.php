    <!-- jQuery -->
    {!!Html::script('js/admin-js/versiones.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Versiones</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarVersiones"><i class="fa fa-plus-circle fa-3x"></i></a>
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

<!--  Modal para modificar de versiones-->

<div class="modal fade" id="myModal_ModificarVersiones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
              <input  type="hidden" name="" value="" id="IdVersion">
              
                     <div class="form-group">
                         <label for="disabledTextInput">Modelos</label>
                             <select id="modelos_A" name="modelos_A" class="form-control text">
                                <option>Seleccione Modelo</option>
                                   @foreach($Modelos as $mo)
                                         <option value="{{$mo->id}}"> {{$mo->modelo_descripcion}}</option>
                                   @endforeach
                              </select>
                     </div>      

              {!!Form::label('Versiones:')!!}
              {!!Form::text('versiones_A',null,['id'=>'versiones_A', 'class'=>'form-control','placeholder'=>'Ingrese Versiones','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
              <span id="span_versiones_A"></span>
              <span id="span_mensaje_versiones_A" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarVersiones', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar de versiones -->


<!--  Modal para Ingresar versiones -->

<div class="modal fade" id="myModal_IngresarVersiones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Versiones</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarVersiones','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdVersion">
              
                     <div class="form-group">
                         <label for="disabledTextInput">Modelos</label>
                             <select id="modelos" name="modelos" class="form-control text">
                                <option>Seleccione Modelo</option>
                                   @foreach($Modelos as $mo)
                                         <option value="{{$mo->id}}"> {{$mo->modelo_descripcion}}</option>
                                   @endforeach
                              </select>
                     </div>      

              {!!Form::label('Versiones:')!!}
              {!!Form::text('versiones',null,['id'=>'versiones', 'class'=>'form-control','placeholder'=>'Ingrese Versiones' ])!!}
              <span id="span_versiones"></span>
              <span id="span_mensaje_versiones" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarVersiones" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar versiones -->
   
