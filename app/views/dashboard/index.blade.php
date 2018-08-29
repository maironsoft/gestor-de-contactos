@extends('layouts.master')

  @section('title')
    @parent
    Dashboard
  @stop

  @section('styles')
    @parent

    @stop


  @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Últimos Posibles Clientes</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th class="escritorio">Teléfono</th>
                        <th class="escritorio"></th>
                      </tr>
                    @foreach($posibles_clientes as $contacto)
                      <tr>
                        <td><a href="/contacts/profile/{{ $contacto->id }}"><img class="img-circle img-responsive" @if($contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif style="width: 30px; height: 30px;"></a></td>
                        <td><a href="/contacts/profile/{{ $contacto->id }}">{{ $contacto->name }}</a></td>
                        <td class="escritorio"><a href="tel:{{ $contacto->phones()->first()->phone }}">{{ $contacto->phones()->first()->phone }}</a></td>
                        <td class="escritorio"><a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}">Ver</a> <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}">Editar</a></td>
                      </tr>
                    @endforeach
                    </table>

                    
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Posible Cliente</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Ver Posibles Clientes</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Últimos Posibles Proveedores</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th class="escritorio">Teléfono</th>
                        <th class="escritorio"></th>
                      </tr>
                    @foreach($posibles_proveedores as $contacto)
                      <tr>
                        <td><a href="/contacts/profile/{{ $contacto->id }}"><img class="img-circle img-responsive" @if($contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif style="width: 30px; height: 30px;"></a></td>
                        <td><a href="/contacts/profile/{{ $contacto->id }}">{{ $contacto->name }}</a></td>
                        <td class="escritorio"><a href="tel:{{ $contacto->phones()->first()->phone }}">{{ $contacto->phones()->first()->phone }}</a></td>
                        <td class="escritorio"><a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}">Ver</a> <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}">Editar</a></td>
                      </tr>
                    @endforeach
                    </table>

                    
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Posible Proveedor</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Ver Posibles Proveedores</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Últimos Clientes</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th class="escritorio">Teléfono</th>
                        <th class="escritorio"></th>
                      </tr>
                    @foreach($clientes as $contacto)
                      <tr>
                        <td><a href="/contacts/profile/{{ $contacto->id }}"><img class="img-circle img-responsive" @if($contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif style="width: 30px; height: 30px;"></a></td>
                        <td><a href="/contacts/profile/{{ $contacto->id }}">{{ $contacto->name }}</a></td>
                        <td class="escritorio"><a href="tel:{{ $contacto->phones()->first()->phone }}">{{ $contacto->phones()->first()->phone }}</a></td>
                        <td class="escritorio"><a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}">Ver</a> <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}">Editar</a></td>
                      </tr>
                    @endforeach
                    </table>

                    
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Cliente</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Ver Clientes</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Últimos Proveedores</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th class="escritorio">Teléfono</th>
                        <th class="escritorio"></th>
                      </tr>
                    @foreach($proveedores as $contacto)
                      <tr>
                        <td><a href="/contacts/profile/{{ $contacto->id }}"><img class="img-circle img-responsive" @if($contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif style="width: 30px; height: 30px;"></a></td>
                        <td><a href="/contacts/profile/{{ $contacto->id }}">{{ $contacto->name }}</a></td>
                        <td class="escritorio"><a href="tel:{{ $contacto->phones()->first()->phone }}">{{ $contacto->phones()->first()->phone }}</a></td>
                        <td class="escritorio"><a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}">Ver</a> <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}">Editar</a></td>
                      </tr>
                    @endforeach
                    </table>
                    
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Proveedor</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Ver proveedores</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->

        </section><!-- /.content -->
      @stop


  @section('scripts')
  @parent
  <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard2.js"></script>

  @stop