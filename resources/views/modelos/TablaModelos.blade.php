<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($Modelos as $mo) 
                        <tr>
                          <td>{{$mo->id}}</td>
                          <td>{{$mo->id_marca}}</td>
                          <td>{{$mo->modelo_descripcion}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                   <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$mo->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarVersiones" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarVersion({{$mo->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>