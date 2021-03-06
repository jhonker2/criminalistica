<!-- jQuery -->
{!!Html::script('js/admin-js/vehiculo.js')!!}
{!!Html::script('template_backend/plugins/cropper/dist/cropper.js')!!}
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registro de Vehiculos</h2>
        <div class="row text-right" >
                                   <button style="" type="button" id="btn_IngresarVehiculos" class="btn btn-success">Registrar</button>
             </div>
        <div class="clearfix"></div>
      </div>

      {!!Form::open(array('url'=>'','id'=>'frmIngresarVehiculos'))!!}
      <input  type="hidden" name="_token" value="{{ csrf_token()}}" id="token_vehiculo">
      <div class="x_content" id="datatable">
        <div class="panel-body">
          <div class="col-md-12 registro">
            <div class="col-md-12">
              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content" id="home-tab-motor" role="tab" data-toggle="tab" aria-expanded="true">Vehiculo</a>
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
                      {!!Form::label('Marcas:')!!}<span class="obligatorio">*</span>
                        <select name="marca" class="form-control" id="marca">
                          <option value="0">Seleccione una Marca</option>
                            @foreach($Marca as $marca)
                              <option value="{{$marca->id}}">{{$marca->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                      {!!Form::label('Modelo:')!!} <span class="obligatorio">*</span>
                        <select name="modelo" class="form-control" id="modelo">
                          <option value="0">Esperando...</option>
                        </select>
                    </div>
                      {!!Form::label('Version:')!!}<span class="obligatorio">*</span>
                        <select name="version" class="form-control" id="version">
                          <option value="0">Esperando...</option>
                        </select>
                     
                      {!!Form::label('Cilindraje:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('cilindraje',null,['id'=>'cilindraje', 'class'=>'form-control','placeholder'=>'Ingrese el cilindraje','required'=>'' ])!!}
                              <span id="span_cilindraje"></span>
                              <span id="span_mensaje_cilindraje" style="display: block;color: red;">
                              </span><br>
                      
                      {!!Form::label('Transmision:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('transmision_A',null,['id'=>'transmision_A', 'class'=>'form-control','placeholder'=>'Ingrese la transmision','required'=>'' ])!!}
                              <span id="span_transmision"></span>
                              <span id="span_mensaje_transmision" style="display: block;color: red;"></span><br>
                      
                      {!!Form::label('Combustible:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('combustible',null,['id'=>'combustible', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de combustible','required'=>'' ])!!}
                              <span id="span_combustible"></span>
                              <span id="span_mensaje_combustible" style="display: block;color: red;"></span><br>
                      
                      {!!Form::label('Pais Origen:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('pais_origen',null,['id'=>'pais_origen', 'class'=>'form-control','placeholder'=>'Ingrese país de origen','required'=>''])!!}
                              <span id="span_pais_origen"></span>
                              <span id="span_mensaje_pais_origen" style="display: block;color: red;"></span><br>
                      
                      {!!Form::label('Año de Fabricación:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('anio',null,['id'=>'anio', 'class'=>'form-control','placeholder'=>'Ingrese años de Fabricación','required'=>''])!!}
                              <span id="span_anio"></span>
                              <span id="span_mensaje_anio" style="display: block;color: red;"></span><br>
                      
                      {!!Form::label('Casa ensambladora:')!!}<span class="obligatorio">*</span>
                      {!!Form::text('casa_ensambladora_A',null,['id'=>'casa_ensambladora_A', 'class'=>'form-control','placeholder'=>'Ingrese años de Fabricación','required'=>''])!!}
                              <span id="span_casa_ensambladora_A"></span>
                              <span id="span_mensaje_casa_ensambladora_A" style="display: block;color: red;"></span><br>
                  </div>
                  
                  <div class="col-md-6">
                   Foto Vehiculo: <br>
                    <span class="btn btn-success btn-file">
                      <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_vehiculo" id="foto_vehiculo">
                    </span>
                    <output id="vehiculo" class="thumber_vehiculo"></output>
                  </div>
                  <br>
                       
                </div> 
                <!--FIN DEL PRIMER PANEL-->

                <!--PANEL DEL MOTOR-->
                <div role="tabpanel" class="tab-pane fade " id="tab_content1" aria-labelledby="home-tab">
                  <p>Formulario de Motor</p>
                    <div class="col-md-6">
                      <div class="form-group">
                        {!!Form::label('Ubicacion:')!!}<span class="obligatorio">*</span>
                        {!!Form::text('ubicacion_motor',null,['id'=>'ubicacion_motor', 'class'=>'form-control','placeholder'=>'Ingrese una ubicacion','required'=>'' ])!!}
                            <span id="span_ubicacion_motor"></span>
                            <span id="span_mensaje_ubicacion_motor" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                        {!!Form::label('Tipo de Grabado:')!!}<span class="obligatorio">*</span>
                        {!!Form::text('tipo_grabado_m',null,['id'=>'tipo_grabado_m', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de grabado','required'=>'' ])!!}
                            <span id="span_tipo_grabado_m"></span>
                            <span id="span_mensaje_tipo_grabado_m" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                        {!!Form::label('Alineacion:')!!}<span class="obligatorio">*</span>
                        {!!Form::text('alineacion_m',null,['id'=>'alineacion_m', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                            <span id="span_alineacion_m"></span>
                            <span id="span_mensaje_alineacion_m" style="display: block;color: red;"></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        {!!Form::label('Simetria:')!!}<span class="obligatorio">*</span>
                        {!!Form::text('simetria_m',null,['id'=>'simetria_m', 'class'=>'form-control','placeholder'=>'Ingrese una simetria','required'=>'' ])!!}
                            <span id="span_simetria_m"></span>
                            <span id="span_mensaje_simetria_m" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                        {!!Form::label('Cantidad digitos:')!!}<span class="obligatorio">*</span>
                        {!!Form::text('cantidad_digito_mo',null,['id'=>'cantidad_digito_mo', 'class'=>'form-control','placeholder'=>'Ingrese una cantidad ','required'=>'' ])!!}
                            <span id="span_cantidad_digito_mo"></span>
                            <span id="span_mensaje_cantidad_digito_mo" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          {!!Form::label('Espacidad:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('espacidad_m',null,['id'=>'espacidad_m', 'class'=>'form-control','placeholder'=>'Ingrese Espacidad ','required'=>'' ])!!}
                            <span id="span_espacidad_m"></span>
                            <span id="span_mensaje_espacidad_m" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Densidad:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('densidad_m',null,['id'=>'densidad_m', 'class'=>'form-control','placeholder'=>'Ingrese una densidad','required'=>'' ])!!}
                            <span id="span_densidad_m"></span>
                            <span id="span_mensaje_densidad_m" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="form-group">
                          {!!Form::label('Superficie:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('superficie_m',null,['id'=>'superficie_m', 'class'=>'form-control','placeholder'=>'Ingrese una superficie','required'=>'' ])!!}
                            <span id="span_superficie_m"></span>
                            <span id="span_mensaje_superficie_m" style="display: block;color: red;"></span>
                      </div>
                      <div class="form-group">
                          {!!Form::label('Observacion:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('observacion_m',null,['id'=>'observacion_m', 'class'=>'form-control','placeholder'=>'Ingrese una observacion','required'=>'' ])!!}
                            <span id="span_observaion_m"></span>
                            <span id="span_mensaje_observaion_m" style="display: block;color: red;"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        Foto Motor <br>
                        <!--<span class="btn btn-success btn-file">
                          <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="files" name="files[]" />
                        </span>-->
                        <span class="btn btn-success btn-file">
                          <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_motor" id="foto_motor">
                        </span>
                        <output id="motor" class="thumber_motor"></output>
                      </div>
                    </div>
                    <div class="row text-right" style="margin-top: 18em;">
                      <button type="button" name="btn_sig2" id="btn_sig2" class="btn btn-success">Siguiente</button>
                  </div>    
                  </div> <!-- FIN DEL SEGUNDO TAB-->

                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <p>Formulario Plaqueta</p>
                      <div class="col-md-6">
                        <div class="form-group">
                          {!!Form::label('Ubicacion:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('ubicacion_plaqueta',null,['id'=>'ubicacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_ubicacion_plaqueta"></span>
                              <span id="span_mensaje_ubicacion_plaqueta" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Material:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('material_plaqueta',null,['id'=>'material_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_material_plaqueta"></span>
                              <span id="span_mensaje_material_plaqueta" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('tipo_grabado:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('tipo_grabado_plaqueta',null,['id'=>'tipo_grabado_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipo_grabado_plaqueta"></span>
                              <span id="span_mensaje_tipo_grabado_plaqueta" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Tipo de Remache:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('tipoRemache_plaqueta',null,['id'=>'tipoRemache_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_tipoRemache_plaqueta"></span>
                              <span id="span_mensaje_tipoRemache_plaqueta" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Informacion:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('informacion_plaqueta',null,['id'=>'informacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_informacion_plaqueta"></span>
                              <span id="span_mensaje_informacion_plaqueta" style="display: block;color: red;"></span>
                        </div>
                        <div class="form-group">
                          {!!Form::label('Observacion:')!!}<span class="obligatorio">*</span>
                          {!!Form::text('observacion_plaqueta',null,['id'=>'observacion_plaqueta', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion','required'=>'' ])!!}
                              <span id="span_observacion_plaqueta"></span>
                              <span id="span_mensaje_observacion_plaqqueta" style="display: block;color: red;"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          Foto de la plaqueta <br>
                            <!--<span class="btn btn-success btn-file">
                              <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" id="files" name="files[]" />
                            </span>-->
                             <span class="btn btn-success btn-file">
                                <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_plaqueta" id="foto_plaqueta">
                             </span>
                            <output id="plaqueta" class="thumber_plaqueta"></output>
                        </div>
                      </div>
                    </div> <!--FIN DEL TAB TRES-->

                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>Formulario Chasis</p>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Ubicacion:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('ubicacion_ch',null,['id'=>'ubicacion_ch', 'class'=>'form-control','placeholder'=>'Ingrese una ubicacion ubicacion','required'=>'' ])!!}
                                  <span id="span_ubicacion_ch"></span>
                                  <span id="span_mensaje_ubicacion_ch" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Tipo de Grabado:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('tipo_grabado_ch',null,['id'=>'tipo_grabado_ch', 'class'=>'form-control','placeholder'=>'Ingrese el tipo de grabado','required'=>'' ])!!}
                                  <span id="span_tipograbado_ch"></span>
                                  <span id="span_mensaje_tipo_grabado_ch" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Alineacion:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('alineacion_ch',null,['id'=>'alineacion_ch', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_alineacion_ch"></span>
                                  <span id="span_mensaje_alineacion_ch" style="display: block;color: red;"></span>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Simetria:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('simetria_ch',null,['id'=>'simetria_ch', 'class'=>'form-control','placeholder'=>'Ingrese una Simetria','required'=>'' ])!!}
                                  <span id="span_simetria_ch"></span>
                                  <span id="span_mensaje_simetria_ch" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Cantidad digitos:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('cantidad_digitos_ch',null,['id'=>'cantidad_digitos_ch', 'class'=>'form-control','placeholder'=>'Ingrese Cantidad Digitos','required'=>'' ])!!}
                                  <span id="span_cantidad_digitos_ch"></span>
                                  <span id="span_mensaje_cantidad_digitos_ch" style="display: block;color: red;"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              {!!Form::label('Espacidad:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('espacidad_ch',null,['id'=>'espacidad_ch', 'class'=>'form-control','placeholder'=>'Ingrese espacidad','required'=>'' ])!!}
                                  <span id="span_espacidad_ch"></span>
                                  <span id="span_mensaje_espacidad_ch" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Densidad:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('densidad_ch',null,['id'=>'densidad_ch', 'class'=>'form-control','placeholder'=>'Ingrese Densidad','required'=>'' ])!!}
                                  <span id="span_densidad_ch"></span>
                                  <span id="span_mensaje_densidad_ch" style="display: block;color: red;"></span>
                            </div>
                          </div>
                            <div class="form-group">
                              {!!Form::label('Superficie:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('superficie_ch',null,['id'=>'superficie_ch', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_superficie_ch"></span>
                                  <span id="span_mensaje_superficie_ch" style="display: block;color: red;"></span>
                            </div>
                            <div class="form-group">
                              {!!Form::label('Observacion:')!!}<span class="obligatorio">*</span>
                              {!!Form::text('observacion_chasis',null,['id'=>'observacion_chasis', 'class'=>'form-control','placeholder'=>'Ingrese una alineacion','required'=>'' ])!!}
                                  <span id="span_observacion_chasis"></span>
                                  <span id="span_mensaje_observacion_chasis" style="display: block;color: red;"></span>
                                </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                Foto del Chasis <br>
                                  <span class="btn btn-success btn-file">
                                <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_chasis" id="foto_chasis">
                             </span>
                            <output id="chasis" class="thumber_chasis"></output>
                              </div>
                           </div>
                        </div> <!--FIN DEL TAB 3-->

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <p>Formulario Serie Secreta</p>
                           <div class="col-md-6">
                             <div class="form-group">
                                {!!Form::label('Ubicación:')!!}<span class="obligatorio">*</span>
                                {!!Form::text('ubicacion_serie',null,['id'=>'ubicacion_serie', 'class'=>'form-control','placeholder'=>'Ingrese la ubicacion de la serie','required'=>'' ])!!}
                                  <span id="span_ubicacion_serie"></span>
                                  <span id="span_mensaje_ubicacion_serie" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('Tipo Grabado:')!!}<span class="obligatorio">*</span>
                                {!!Form::text('tipoGrabado_serie',null,['id'=>'tipoGrabado_serie', 'class'=>'form-control','placeholder'=>'Ingrese tipo de grabado','required'=>'' ])!!}
                                  <span id="span_tipoGrabado_serie"></span>
                                  <span id="span_mensaje_tipoGrabado_serie" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('cantidad de digitos:')!!}<span class="obligatorio">*</span>
                                {!!Form::text('cantidad_digitos_Serie',null,['id'=>'cantidad_digitos_Serie', 'class'=>'form-control','placeholder'=>'Ingrese la cantidad de digitos','required'=>'' ])!!}
                                  <span id="span_cantidad_digitos_Serie"></span>
                                  <span id="span_mensaje_cantidad_digitos_Serie" style="display: block;color: red;"></span>
                              </div>
                              <div class="form-group">
                                {!!Form::label('Observación:')!!}<span class="obligatorio">*</span>
                                {!!Form::text('observacion_serie',null,['id'=>'observacion_serie', 'class'=>'form-control','placeholder'=>'Ingrese una observación','required'=>'' ])!!}
                                  <span id="span_observacion_serie"></span>
                                  <span id="span_mensaje_observacion_serie" style="display: block;color: red;"></span>
                                </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                        Foto de la serie Secreta: <br>
                                          <span class="btn btn-success btn-file">
                                    <i class="fa fa-camera" aria-hidden="true"></i> Seleccionar fotografia <input type="file" name="foto_serieS" id="foto_serieS">
                                 </span>
                                <output id="serieS" class="thumber_serieS"></output>
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
{!!Form::close()!!}
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
   
function fotoMotor(evt){
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
                document.getElementById("motor").innerHTML = ['<img class="thumb"  id="image3" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}  

function fotoPlaqueta(evt){
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
                document.getElementById("plaqueta").innerHTML = ['<img class="thumb"  id="image4" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}   


function fotoChasis(evt){
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
                document.getElementById("chasis").innerHTML = ['<img class="thumb"  id="image5" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}   

function fotoSerie(evt){
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
                document.getElementById("serieS").innerHTML = ['<img class="thumb"  id="image6" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
              };
           })(f);
           reader.readAsDataURL(f);
       } 
}   


//document.getElementById('files').addEventListener('change', archivo, false);
document.getElementById('foto_vehiculo').addEventListener('change', fotoVehiculo, false);
document.getElementById('foto_motor').addEventListener('change', fotoMotor, false);
document.getElementById('foto_plaqueta').addEventListener('change', fotoPlaqueta, false);
document.getElementById('foto_chasis').addEventListener('change', fotoChasis, false);
document.getElementById('foto_serieS').addEventListener('change', fotoSerie, false);

</script>

<!--  FIN Modal para Ingresar Modelos -->
   
