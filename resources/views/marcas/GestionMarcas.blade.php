    <!-- jQuery -->
    {!!Html::script('js/admin-js/Marcas.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Marcas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarMarca"><i class="fa fa-plus-circle fa-3x"></i></a>
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

<div class="modal fade" id="myModal_ModificarMarcas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Marca </h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('url'=>'','id'=>'frmActualizarMarcas'))!!}
          <input  type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
          <input  type="hidden" name="IdMarca_a" value="" id="IdMarca_a">
          {!!Form::label('Marca:')!!}
          {!!Form::text('marca_A',null,['id'=>'marca_A', 'class'=>'form-control','placeholder'=>'Ingrese una Marca','required'=>'' ])!!}
          <span id="span_marca_A"></span>
          <span id="span_mensaje_marca_A" style="display: block;color: red;"></span>
          Foto Marca: <br>
          <span class="btn btn-success btn-file">
          <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia para la marca <input type="file" name="foto_marca" id="foto_marca">
          </span>
          <img id="foto_marca_A" class="thumber_vehiculo">
          <output id="marca_output" class="thumber_marca">
          </output>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarMarca', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Modidifcar de marcas -->


<!--  Modal para Ingresar marcas-->

<div class="modal fade" id="myModal_IngresarMarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar una Marca</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarMarca','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdMarca">
              
           <div class="col-md-4  col-xs-12">  
              {!!Form::label('Marca:')!!}
              {!!Form::text('marca',null,['id'=>'marca', 'class'=>'form-control','placeholder'=>'Ingrese Marca' ])!!}
              <span id="span_marca"></span>
              <span id="span_mensaje_marca" style="display: block;color: red;"></span>
            </div>
               <div class="col-md-8  col-xs-8">
                            <div class="foto"><span type="file"></span>
                                </div>
                                <label class="uploader foto" ondragover="return false">
                                   <i  class="fa fa-user fa-4x" aria-hidden="true"></i>
                                  <img id="foto" src="" class="">
                                    <input type="file" name="archivo" id="archivo" accept="image/*" required>
                               </label>
               </div>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default boton-style" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success boton-style" id="btn_IngresarMarca" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        
<!--  FIN Modal para Ingresar marcas -->
 <script type="text/javascript">
            new FileUploader('.uploader');
 </script>
