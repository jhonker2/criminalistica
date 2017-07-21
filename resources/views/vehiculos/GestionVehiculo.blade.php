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
                  <div class="col-md-6">
                    <div class="col-md-6">
                      {!!Form::label('Marcas:')!!}
                        <select name="marcas" class="form-control" id="marcas">
                          <option value="0">Seleccione una Marca</option>
                            @foreach($Marca as $marca)
                              <option value="{{$marca->id}}">{{$marca->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                      {!!Form::label('Modelo:')!!}
                        <select name="modelos" class="form-control" id="modelos">
                          <option value="0">Seleccione un Modelo</option>
                        </select>
                    </div>
                      {!!Form::label('Version:')!!}
                        <select name="version" class="form-control" id="version">
                          <option value="0">Seleccione una Version</option>
                        </select>
                      {!!Form::label('Cilindraje:')!!}
                      {!!Form::text('cilindraje',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese el cilindraje','required'=>'' ])!!}
                              <span id="span_cilindraje_A"></span>
                              <span id="span_mensaje_cilindraje_A" style="display: block;color: red;">
                              </span><br>
                      {!!Form::label('Transmision:')!!}
                      {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese la transmision','required'=>'' ])!!}
                              <span id="span_transmision_A"></span>
                              <span id="span_mensaje_transmision_A" style="display: block;color: red;"></span><br>
                      {!!Form::label('Combustible:')!!}
                      {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de combustible','required'=>'' ])!!}
                              <span id="span_combustible_A"></span>
                              <span id="span_mensaje_combustible_A" style="display: block;color: red;"></span><br>
                      {!!Form::label('Pais Origen:')!!}
                      {!!Form::text('modelo_A',null,['id'=>'modelo_A', 'class'=>'form-control','placeholder'=>'Ingrese país de origen','required'=>''])!!}
                              <span id="span_pais_A"></span>
                              <span id="span_mensaje_pais_A" style="display: block;color: red;"></span><br>
                      {!!Form::label('Año de Fabricación:')!!}
                      {!!Form::text('anio',null,['id'=>'anio', 'class'=>'form-control','placeholder'=>'Ingrese años de Fabricación','required'=>''])!!}
                              <span id="span_anio_A"></span>
                              <span id="span_mensaje_anio_A" style="display: block;color: red;"></span><br>
                  </div>
                  <div class="col-md-6">
                   Foto Vehiculo: <br>
                    <span class="btn btn-success btn-file">
                      <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_vehiculo" id="foto_vehiculo">
                    </span>
                    <output id="vehiculo"></output>
                  </div>
                  <br>
                  <div class="row text-right" style="margin-top: 18em;">
                      <button type="button" class="btn btn-success">Siguiente</button>
                  </div>       
                </div> 
                <!--FIN DEL PRIMER PANEL-->

                <!--PANEL DEL MOTOR-->
                <div role="tabpanel" class="tab-pane fade " id="tab_content1" aria-labelledby="home-tab">
                  <p>Formulario de Motor</p>
                    <div class="col-md-6">
                      <div class="form-group">
                        {!!Form::label('Ubicacion:')!!}
                        {!!Form::text('ubicacion',null,['id'=>'ubicacion', 'class'=>'form-control','placeholder'=>'Ingrese una ubicacion ubicacion','required'=>'' ])!!}
                            <span id="span_ubicacion_A"></span>
                            <span id="span_mensaje_ubicacion_A" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                        {!!Form::label('Tipo de Grabado:')!!}
                        {!!Form::text('tipo_grabado',null,['id'=>'tipo_grabado', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de grabado','required'=>'' ])!!}
                            <span id="span_tipograbado_A"></span>
                            <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                        {!!Form::label('Alineacion:')!!}
                        {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        {!!Form::label('Simetria:')!!}
                        {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                        {!!Form::label('Cantidad digitos:')!!}
                        {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          {!!Form::label('Espacidad:')!!}
                          {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Densidad:')!!}
                          {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          {!!Form::label('Superficie:')!!}
                          {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                          {!!Form::label('Observacion:')!!}
                          {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_A"></span>
                            <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        Foto Motor <br>
                        <span class="btn btn-success btn-file">
                          <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="files" name="files[]" />
                        </span>
                      </div>
                    </div>
                  </div> <!-- FIN DEL SEGUNDO TAB-->

                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <p>Formulario Plaqueta</p>
                      <div class="col-md-6">
                        <div class="form-group">
                          {!!Form::label('Ubicacion:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Material:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('tipo_gravado:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Tipo de Remache:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Informacion:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Observacion:')!!}
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipograbado_A"></span>
                              <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          Foto de la plaqueta <br>
                            <span class="btn btn-success btn-file">
                              <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="files" name="files[]" />
                            </span>
                        </div>
                      </div>
                    </div> <!--FIN DEL TAB TRES-->
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>Formulario Chasis</p>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Ubicacion:')!!}
                              {!!Form::text('ubicacion',null,['id'=>'ubicacion', 'class'=>'form-control','placeholder'=>'Ingrese una ubicacion ubicacion','required'=>'' ])!!}
                                  <span id="span_ubicacion_A"></span>
                                  <span id="span_mensaje_ubicacion_A" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Tipo de Grabado:')!!}
                              {!!Form::text('tipo_grabado',null,['id'=>'tipo_grabado', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de grabado','required'=>'' ])!!}
                                  <span id="span_tipograbado_A"></span>
                                  <span id="span_mensaje_tipograbado_A" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Alineacion:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Simetria:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Cantidad digitos:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Espacidad:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Densidad:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                          </div>
                            <div class="form-group">
                              {!!Form::label('Superficie:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Observacion:')!!}
                              {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                                </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                Foto del Chasis <br>
                                  <span class="btn btn-success btn-file">
                                    <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="foto_chasis" name="files[]" />
                                  </span>
                              </div>
                           </div>
                        </div> <!--FIN DEL TAB 3-->

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <p>Formulario Serie Secreta</p>
                           <div class="col-md-6">
                             <div class="form-group">
                                {!!Form::label('Ubicación:')!!}
                                {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('Tipo Grabado:')!!}
                                {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('cantidad de digitos:')!!}
                                {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('Observación:')!!}
                                {!!Form::text('alineacion',null,['id'=>'alineacion', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_A"></span>
                                  <span id="span_mensaje_alineacion_A" style="display: block;color: red;"></span>
                                </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                    Foto de la serie Secreta: <br>
                                    <span class="btn btn-success btn-file">
                                    <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="foto_chasis" name="files[]" />
                                    </span>
                              </div>
                           </div>
                        </div>
                      </div>
                    </div>
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

function fotoVehiculo(evt){
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
                document.getElementById("vehiculo").innerHTML = ['<img class="thumb"  id="image2" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}
             
document.getElementById('files').addEventListener('change', archivo, false);
document.getElementById('foto_vehiculo').addEventListener('change', fotoVehiculo, false);

</script>

<!--  FIN Modal para Ingresar Modelos -->
   
