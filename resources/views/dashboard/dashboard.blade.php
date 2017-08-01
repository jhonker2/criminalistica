<div id="content">
  <div class="right_col no_margin" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
              @foreach($totalUsuarios as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Total de Vehiculos</span>

              @foreach($totalVehiculos as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Total Marcas</span>
              @foreach($totalMarcas as $tu)
              <div class="count">{{$tu->total}}</div>
              @endforeach
            </div>
          </div>
  </div>
</div>
