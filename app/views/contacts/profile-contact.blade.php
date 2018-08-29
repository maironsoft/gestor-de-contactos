@extends('layouts.master')

  @section('title')
    @parent
    Nuevo item de venta
  @stop

  @section('styles')
    @parent

    @stop


  @section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil de Contacto
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
                <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}"> Editar </a>
                <a class="btn btn-info" href="/contacts"> Ir al listado </a>
              </div>
            </div><!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="col-md-12 text-center">
                    <img class="img-circle img-responsive img-profile-user change-img-profile" role="button" @if($contacto->picture!="") src="/dist/img/contacts/{{ $contacto->picture }}" @else src="/dist/img/sin-foto.jpg" @endif width="160" height="160" alt="User profile picture" style="margin: auto; height: 160px" title="Cambie la foto del contacto">
                    <h2>
                      {{ $contacto->name }}<br>
                      <small>{{ TypeContact::find($contacto->type_contact_id)->name }}</small>
                    </h2>
                  <br><br>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <h4>Telefonos:
                    @foreach($contacto->phones as $phone)
                      <small>{{ $phone->phone }} - </small>
                    @endforeach
                    </h4>
                  </div>

                  <div class="form-group">
                    <h4>Email: <small>{{ $contacto->email }}</small></h4>
                  </div>

                  <div class="form-group">
                    <h4>Dirección <small>{{ $contacto->address }}</small></h4>
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-group">
                    <h4>Departamento <small>{{ $contacto->state }}</small></h4>
                  </div>
                  <div class="form-group">
                    <h4>Ciudad <small>{{ $contacto->city }}</small></h4>
                  </div>
                  <div class="form-group">
                    <h4>País <small>{{ $contacto->country }}</small> </h4>
                  </div>
                </div>

              </div><!-- /.box-body -->

          </div><!-- /.box -->
        </div>
      </div>
	  </section>

    @include('includes.modales.modal-categorias')

  @stop


  @section('scripts')
  @parent

  @stop