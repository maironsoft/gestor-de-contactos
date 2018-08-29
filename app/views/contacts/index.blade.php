@extends('layouts.master')

@if(isset($type_contact->name))
  {{--*/ $type_contact_name=$type_contact->name /*--}}
@else
  {{--*/ $type_contact_name="contactos" /*--}}
@endif
  @section('title')
    @parent
    {{ $type_contact_name }}
  @stop

  @section('styles')
    @parent

    @stop


  @section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span style="text-decoration: uppercase;">Contactos</span>
        <small>Visualiza tus {{ $type_contact_name }}</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $type_contact_name }}</h3>
              <div class="pull-right form-inline header-botones">
              	<a class="btn btn-info" href="/contacts/new"> Nuevo {{ $type_contact_name }} </a>
              	<input type="text" class="buscar form-control" placeholder="Busca tus {{ $type_contact_name }}" value=""/>
		      </div>
            </div><!-- /.box-header -->
            <div class="box-body no-padding  listado">

              @include('includes.tablas.tabla-contactos')

              @if($contactos->count()==0)
              <h4 class="text-center">Aun no tienes {{ $type_contact_name }} registrados</h4>
              <p class="text-center">Añade tus {{ $type_contact_name }} para tener sus datos a tu alcance y usarlos en facturas y cotizaciones.</p>
              @endif
            </div><!-- /.box-body -->
        </div>
      </div>
	</section>

  @stop


  @section('scripts')
  @parent
  <!-- JS para Paginado ajax -->
  <script src="/dist/js/paginado-ajax.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".menu-facturas-compra>a").trigger('click');
    });
  </script>

  @stop