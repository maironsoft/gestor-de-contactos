@extends('layouts.master')

  @section('title')
    @parent
    Nuevo item de venta
  @stop

  @section('styles')
    @parent
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="/plugins/iCheck/all.css">

    @stop


  @section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if(isset($contacto)) Actualice @else Nuevo @endif Contacto
        <small>Registre sus contáctos, así estarán listos para sus llamadas y demás</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="pull-right form-inline header-botones">
                @if(isset($contacto))
                <a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}"> Ver Perfil </a>
                @endif
                <a class="btn btn-info" href="/contacts"> Ir al listado </a>
              </div>
            </div><!-- /.box-header -->
            <!-- form start -->
            @if(Session::has('save_ok'))       
              <div class="alert alert-default alert-dismissable text-center">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4 class="text-center text-light-blue"><i class="fa fa-check-circle "></i> Contacto @if(isset($contacto)) actualizado @else creado @endif.</h4> El contacto fue  @if(isset($contacto)) actualizado @else creado @endif satisfactoriamente 
              </div>
            @endif

            <form id="form-new-producto" role="form" method="post"@if(isset($contacto)) action="/contacts/save/{{ $contacto->id }}" @else action="/contacts/save" @endif enctype="multipart/form-data" >
              <div class="box-body">
                <div class="col-md-12">
                    <input class="input-up" id="up-image" name="picture" type="file">
                    <img class="img-circle img-responsive img-profile-user change-img-profile" role="button" @if(isset($contacto) && $contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif width="160" height="160" alt="User profile picture" style="margin: auto; height: 160px" title="Cambie la foto del contacto">
                  <br><br>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span class="obligatorio">*</span>
                    <label for="nombre">Nombre Completo</label>
                    <input type="texto" class="form-control" id="nombre" name="nombre" placeholder="Nombre del contacto" required @if(isset($contacto)) value="{{ $contacto->name }}" @endif>
                  </div>
                  <div class="form-group">
                    <span class="obligatorio">*</span>
                    <label for="select-categoria" >Telefono</label>
                    <div class="input-group">
                      <input type="texto" class="form-control" id="telefono1" name="telefono1" placeholder="Ingrese el número telefonico" required @if(isset($contacto)) value="{{ $contacto->phones()->first()->phone }}" @endif>
                      <input type="hidden" class="form-control" id="cantidad-telefonos" name="cantidad-telefonos" value="1">
                      <span class="input-group-btn">
                        <button class="btn btn-info" title="añadir otro número de teléfono" type="button" id="add-phone"> + </button>
                      </span>
                    </div>
                    <div id="panel-phones" style="margin-top: 20px;">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <span class="obligatorio">*</span>
                    <label for="select-categoria" >Tipo de Contacto</label>
                    <div class="input-group">
                      
                      <select class="form-control select-categoria select2" name="categoria_producto_id" id="categoria_producto_id" style="width: 100%;" required>
                          <option @if(!isset($contacto)) selected @endif value="">Seleccione un Tipo de Contácto</option>
                          @foreach($tipos_contacto as $categoria)
                            <option @if(isset($contacto)) @if($contacto->type_contact_id==$categoria->id) selected @endif @endif value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                          @endforeach>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modal-categorias"  title="añadir otro número de contácto"> + </button>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <span class="obligatorio">*</span>
                    <label for="referencia">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email del contacto" @if(isset($contacto)) value="{{ $contacto->email }}" @endif>
                  </div>
                </div>

                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label for="descripcion">Dirección</label>
                    <textarea class="form-control" id="descripcion" name="direccion" placeholder="Escriba la dirección del contacto">@if(isset($contacto)){{ $contacto->address }}@endif</textarea>
                  </div>
                  <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <input type="texto" class="form-control" id="departamento" name="departamento" placeholder="Departamento del contacto" @if(isset($contacto)) value="{{ $contacto->state }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="texto" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad del contacto" @if(isset($contacto)) value="{{ $contacto->city }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="pais">País</label>
                    <input type="texto" class="form-control" id="pais" name="pais" placeholder="País del contacto" @if(isset($contacto)) value="{{ $contacto->country }}" @endif>
                  </div>
                </div>

              </div><!-- /.box-body -->

              <div class="box-footer text-right">
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="/contacts" class="btn btn-default">Cancelar</a>
                
              </div>
            </form>
          </div><!-- /.box -->
        </div>
      </div>
	  </section>

    @include('includes.modales.modal-categorias')

  @stop


  @section('scripts')
  @parent
  <!-- iCheck 1.0.1 -->
  <script src="/plugins/iCheck/icheck.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $(".menu-productos>a").trigger('click');

      $('input[type="checkbox"].flat').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
      
    });



    $("#form-categoria").submit(function(e){
      e.preventDefault();
      $("#crear-categoria").html('Creando Categoríaa...');
      $("#crear-categoria").attr('disabled', true);

      $.ajax({url:"/categories/create", cache:false, data: { nombre: $("#nombre-categoria").val()},  type:"POST",success:function(resp)
        {
          $("#mensaje-respuesta span").html(resp);
          $("#mensaje-respuesta").show(function(){
            setTimeout( function(){
              $("#mensaje-respuesta").hide();
            }, 5000 );
          });
          $("#descripcion-categoria").val("");
          $("#nombre-categoria").val("");
          $("#crear-categoria").html('Crear Categoría');
          $("#crear-categoria").attr('disabled', false);
          if(!error)
          {
            $(".select-categoria").append('<option val="'+id_categoria+'"">'+nombre_categoria+'</option>');
            //$example.val("CA").trigger("change");
            $('.select-categoria').val(id_categoria).trigger("change");
          }
        }
      });
    });

    $(".change-img-profile").on("click",function(e)
    {
      e.preventDefault();
      $("#up-image").trigger("click");
    });

    $("#up-image").on("change", function(e){
      if($(this).val()!=""){
        var file = e.target.files[0],
        imageType = /image.*/;
      
        if (!file.type.match(imageType))
         return;
    
        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);
        //$(".change-img-profile").attr("src", $(this).val());
      }
      else{
        $(".change-img-profile").attr("src", "/dist/img/sin-foto.jpg");
      }
    });

    function fileOnload(e) {
      var result=e.target.result;
      $('.change-img-profile').attr("src", result);
    }

    $("body").on("click", "#add-phone", function(){
      var cantidad=$("#cantidad-telefonos").val();
      cantidad++;
      $("#panel-phones").append('<input type="texto" class="form-control" id="telefono'+cantidad+'" name="telefono'+cantidad+'" placeholder="Ingrese el número telefonico #'+cantidad+'" style="margin-bottom: 10px">');
      $("#cantidad-telefonos").val(cantidad);
    })

    
      
  </script>

  @stop