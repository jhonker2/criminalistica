 <!-- jQuery -->
   
    @section('estilos')
     {!!Html::script('js/admin-js/vehiculo.js')!!}
      {!!Html::style('admin/css/Taller-empleado.css')!!} 
      {!!Html::style('admin/js/bootstrapToogle/bootstrap2-toggle.css')!!} 
      {!!Html::script('admin/js/bootstrapToogle/bootstrap2-toggle.js')!!}
    @endsection
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administración de Vehiculo</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarVersiones"><i class="fa fa-plus-circle fa-3x"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                   <table id="tablee" align="center" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Version</th>
                          <th>Cilindraje</th>
                          <th>Transmision</th>
                          <th>Combustible</th>
                          <th>Pais Origen</th>
                          <th>Fotografia</th>
                          <th>Año</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($Vehiculo as $ma) 
                        <tr>
                          <td align="center">{{$ma->id_version}}</td>
                          <td align="center">{{$ma->cilindraje}}</td>
                          <td align="center">{{$ma->transmision}}</td>
                          <td align="center">{{$ma->combustible}}</td>
                          <td align="center">{{$ma->pais_origen}}</td>
                          <td align="center" style="text-align: center;"><img src="{{asset($ma->fotografia)}}" style="width: 64px;" alt=""></td>
                          <td align="center">{{$ma->anio}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                   <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$ma->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarModelos" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarModelo({{$ma->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>


