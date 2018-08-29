@extends('layouts.master-login')

@section('title')
  @parent
  Iniciar sesión
@stop

@section('content')

  <div class="login-box-body">
    <p class="login-box-msg">Guarda tus contactos corporativos y mantenlos seguros en la nube</p>

    @if(Session::has('login_errors'))       
      <div class="no-padding alert alert-default alert-dismissable ">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4 class="text-center text-red"><i class="fa fa-times-circle"></i> Datos erroneos.</h4> El correo y la contraseña que ingresaste no coincide con nuestros registros. Por favor revisa e intenta nuevamente
      </div>
    @endif

    @if(Session::has('status'))       
      <div class="no-padding alert alert-default alert-dismissable ">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4 class="text-center text-red">Has creado tu cuenta.</h4> Ahora puedes empezar a salvar el mundo
      </div>
    @endif

    @if(Session::has('repassword_ok'))  
      <div class="no-padding alert alert-default alert-dismissable ">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          Ya puedes ingresar con tu <b> nueva contraseña </b>. 
      </div>
    @endif

    {{--*/ $uri="" /*--}}
    @if(Session::has('uri'))  
     {{--*/ $uri=Session::get('uri') /*--}}
    @endif


      <form action="/users/auth" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Introducir e-mail" required>
          <input type="hidden" name="uri" class="form-control" value="{{ $uri }}" placeholder="Introducir e-mail">
          
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Introducir contraseña" required>

        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-info btn-block btn-flat btn-login">Log In</button>
          </div><!-- /.col -->
        </div>
      </form>
      <div class="otros-links" style="margin-top: 10px;">
        <!--<a  href="password/remind">Olvidé mi contraseña</a><br>
        <a href="register.html" class="text-center">Aun no tengo cuenta</a>-->
      </div>


  </div>
    

  @section('scripts')
    @parent
    <script type="text/javascript">


      $('#menu-login a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });

      setTimeout(function() {
        $(".desvanecer").hide(500)
      }, 10000);
    </script>
  @stop
@stop