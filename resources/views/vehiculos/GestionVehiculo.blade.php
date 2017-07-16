    <!-- jQuery -->
    {!!Html::script('js/admin-js/Marcas.js')!!}
    {!!Html::script('template_backend/plugins/cropper/dist/cropper.js')!!}

		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Vehiculos</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                   
                   <div class="panel-body">
            <div class="col-md-12 registro">
            <div class="col-md-12">
                 <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Vehiculo</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Motor</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Plaqueta</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Chasis</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Serie Secreta</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content" aria-labelledby="profile-tab">
                          <p>Formulario Vehiculo</p>
                          <div class="col-md-6">
                            {!!Form::label('Cilindraje:')!!}
                            {!!Form::text('cilindraje',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese el cilindraje','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                              <span id="span_modelo_A"></span>
                              <span id="span_mensaje_modelo_A" style="display: block;color: red;">
                              </span><br>
                            {!!Form::label('Transmision:')!!}
                                {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese la transmision','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                <span id="span_modelo_A"></span>
                                <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>

                               {!!Form::label('Combustible:')!!}
                                {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de combustible','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                <span id="span_modelo_A"></span>
                                <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>
                                {!!Form::label('Pais Origen:')!!}
                                {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese país de origen','required'=>'','onkeypress'=>'return validaLetrasYEspacio(event)' ])!!}
                                <span id="span_modelo_A"></span>
                                <span id="span_mensaje_modelo_A" style="display: block;color: red;"></span><br>

                          </div>
                          <div class="col-md-6">
                              <div class="foto"><span type="file"></span></div>
                                <label class="uploader foto" ondragover="return false">
                                  <i  class="fa fa-car fa-5x" aria-hidden="true"></i>
                                    <img src="" class="">
                                    <input type="file" name="archivo" id="archivo" accept="image/*" required>
                               </label>
                          </div>
                            <br>
                            <div class="row text-right" style="margin-top: 18em;">
                              <button type="button" class="btn btn-success">Siguiente</button>
                            </div>       
                        </div>


                        <div role="tabpanel" class="tab-pane fade " id="tab_content1" aria-labelledby="home-tab">
                          <p>Formulario de Motor</p>
                              
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
                                    Foto Motor
                                    <input type="file" id="files" name="files[]" />
                                    

                                  </div>
                               
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <p>Formulario Plaqueta</p>
                          <div class="form-group">
                                    <label for="disabledTextInput">Plaqueta</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Plaqueta</option>
                                    @foreach($Plaquetas as $pla)
                                        <option value="{{$pla->id}}"> {{$pla->observacion}}</option>
                                    @endforeach
                                    </select>
                                </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>Formulario Chasis</p>
                           <div class="form-group">
                                    <label for="disabledTextInput">Tipo de Chasis</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione chasis</option>
                                    @foreach($Chasis as $cha)
                                        <option value="{{$cha->id}}"> {{$cha->tipo_chasis}}</option>
                                    @endforeach
                                    </select>
                                </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <p>Formulario Serie Secreta</p>
                           <div class="form-group">
                                    <label for="disabledTextInput">Serie</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione Serie</option>
                                    @foreach($Series as $se)
                                        <option value="{{$se->id}}"> {{$se->observacion}}</option>
                                    @endforeach
                                    </select>
                                </div>
                        </div>
                      </div>
                    </div>
            </div>
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmUser','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                     {!!Form::close()!!}
                </div> 
                <div class="col-md-6 col-xs-6">
                          
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
<div class="modal fade" id="recorteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Recorte de imagen</h4>
      </div>
      <div class="modal-body" style="height: 430px;">
        <div class="col-md-6">
          <output id="list"></output>
        </div>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-success">Realizar Corte</button>
      </div>
      </div>
  </div>
</div> 

  
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
<script>
  

function archivo(evt) {
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
                      document.getElementById("list").innerHTML = ['<img class="thumb"  id="image" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      $("#recorteModal").modal("show");
                      var image = document.getElementById('image');
                      var cropper = new Cropper(image, {
                          crop: function(e) {
                        }
                      });
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('files').addEventListener('change', archivo, false);
</script>

<!--  FIN Modal para Ingresar Modelos -->
   
