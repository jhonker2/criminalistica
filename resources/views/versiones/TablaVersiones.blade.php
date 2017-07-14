<table id="tabla" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Modelo</th>
                          <th>Versiones</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($Versiones as $ver) 
                        <tr>
                          <td>{{$ver->id}}</td>
                          <td>{{$ver->modelo_descripcion}}</td>
                          <td>{{$ver->version_descripcion}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                   <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$ver->id}})" href="javascript:void(0)" data-toggle="modal" data-target="#myModal_ModificarVersiones" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarVersion({{$ver->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>