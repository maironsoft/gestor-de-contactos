<table class="table table-responsive">
  <tr>
    <th></th>
    <th>Nombre</th>
    <th class="escritorio">Telefono</th>
    <th class="escritorio">Email</th>
    <th class="escritorio"></th>
  </tr>
@foreach($contactos as $contacto)
  <tr>
    <td><a href="/contacts/profile/{{ $contacto->id }}"><img class="img-circle img-responsive" src="/dist/img/contacts/{{ $contacto->picture }}" style="width: 30px; height: 30px;"></a></td>
    <td><a href="/contacts/profile/{{ $contacto->id }}">{{ $contacto->name }}</a></td>
    <td class="escritorio"><a href="tel:{{ $contacto->phones()->first()->phone }}">{{ $contacto->phones()->first()->phone }}</a></td>
    <td class="escritorio"><a href="mailto:{{ $contacto->email }}">{{ $contacto->email }}</a></td>
    <td class="escritorio"><a class="btn btn-info" href="/contacts/profile/{{ $contacto->id }}">Ver</a> <a class="btn btn-info" href="/contacts/update/{{ $contacto->id }}">Editar</a></td>
  </tr>
@endforeach
</table>


<div class="pull-right">{{ $contactos->links() }}</div>