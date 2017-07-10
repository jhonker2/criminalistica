<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Chasis</th>
                          <th>Version</th>
                          <th>Plaqueta</th>
                          <th>Motor</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($Marcas as $ma) 
                        <tr>
                          <td>{{$ma->id}}</td>
                          <td>{{$ma->marca_descripcion}}</td>
                          <td>{{$ma->logo}}</td>
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