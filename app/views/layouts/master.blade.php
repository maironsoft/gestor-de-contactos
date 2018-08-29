<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('title') CMYM Contacts| @show</title>
    <!-- Tell the browser to be responsive to screen width -->

    @section('styles')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.css?v=1">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="/dist/css/sian.css?v=14">

    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo 
        <a href="index2.html" class="logo">-->
          <!-- mini logo for sidebar mini 50x50 pixels 
          <span class="logo-mini"><img height="40" src="/dist/img/logos/ico-white.png" /></span>-->
          <!-- logo for regular state and mobile devices 
          <span class="logo-lg"><img width="200px" src="/dist/img/logos/logo-hz-white.png" /></span>-->
        <!--</a>

         Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a class="logo-sian" href="/">
            <img src="/dist/img/logos/ico-white.png"/>
          </a>
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="empresa-header">CMYM Contacts</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      <small>
                        @if(Auth::user()->name!="")
                          {{ Auth::user()->name }}
                        @else
                          <a href="/users/user">Ingresar tu nombre</a>
                        @endif
                      </small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-6 text-center no-padding">
                      Plan: Ilimitado
                    </div>
                    <div class="col-xs-6 text-center">
                      <a href="#" class="text-blue">Actualizar</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Configuración</a>
                    </div>
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <a href="#"><img title="logo cmym" src="/dist/img/logos/logo-color.png" class="img-responsive" /></a>
              <p></p>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="/">
                <i class="fa fa-dashboard"></i> <span>Inicio</span> 
              </a>
            </li>
            <li>
              <a href="/contacts/new">
                <i class="fa fa-pie-chart"></i>  <span>Nuevo Contacto</span>
              </a>
            </li>
            <li>
              <a href="/contacts/type/possible-clients">
                <i class="fa fa-pie-chart"></i>  <span>Posibles Clientes</span>
              </a>
            </li>
            <li>
              <a href="/contacts/type/possible-providers">
                <i class="fa fa-pie-chart"></i>  <span>Posibles Proveedores</span>
              </a>
            </li>
            <li>
              <a href="/contacts/type/clients">
                <i class="fa fa-pie-chart"></i>  <span>Clientes</span>
              </a>
            </li>
            <li>
              <a href="/contacts/type/providers">
                <i class="fa fa-pie-chart"></i>  <span>Proveedores</span>
              </a>
            </li>
            <li>
              <a href="/contacts">
                <i class="fa fa-pie-chart"></i>  <span>Todos</span>
              </a>
            </li>
            <li>
              <a href="/logout">
                <i class="fa fa-sign-out"></i> <span>Cerrar sesión</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="https://www.cmymasesores.com/">CMYM</a>.</strong> All rights reserved.
      </footer>

      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    @include('includes.modales.modal-sugerencia')

    @section('scripts')
    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    
    <script src="/plugins/select2/select2.full.min.js"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/sian.js"></script>
    @show
  </body>
</html>
