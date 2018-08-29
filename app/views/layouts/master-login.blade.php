
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@section('title') CMYM Asesores | @show</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.css?v=1.1">

    <link rel="stylesheet" href="/dist/css/sian.css?v=1.1">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page dark" style="margin-top: -20px; padding-top: 20px;">
    
    <div class="login-box">
      <div class="login-logo">
        <a href="/" ><img width="200" src="/dist/img/logos/logo-md.png?v=1" alt="Logo CMYMY Asesores"></a>
      </div><!-- /.login-logo -->
      @yield('content')
    </div><!-- /.login-box -->

    <footer class="main-footer text-right transparent">
      <button class="nosotros btn-info btn" style="margin:0 5px; display: none"  data-toggle="modal" data-target="#mensaje-sugerencia"><i class="fa fa-envelope-o text-white"></i> ¿Necesitas ayuda?</button>
    </footer> 
    
    @include("includes.modales.modal-sugerencia-guest")

    @section('scripts')
    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#form-sugerencia").submit(function(e){
          e.preventDefault();
          $("#enviar-sugerencia").html('Enviando...');
          $("#enviar-sugerencia").attr('disabled', true);
          var nombre=$("#nombre").val();
          var correo=$("#correo").val();
          var ciudad="";
          var pais="";
        $.ajax({url:"/hacer-sugerencia", cache:false, data: { mensaje: $("#mensaje").val(), nombre: nombre, ciudad: ciudad, pais: pais, correo: correo },  type:"POST",success:function(resp)
            {
              $("#mensaje-respuesta span").html(resp);
              $("#mensaje-respuesta").show(function(){
                    setTimeout( function(){
                      $("#mensaje-respuesta").hide();
                    }, 5000 );
                  });
              $("#mensaje").val("");
              $("#nombre").val("");
              $("#correo").val("");
              $("#enviar-sugerencia").html('Enviar');
              $("#enviar-sugerencia").attr('disabled', false);
            }
          });
        });

      });
    </script>
    @show
  </body>
</html>

