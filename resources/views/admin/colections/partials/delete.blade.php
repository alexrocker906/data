{!! Form::open(['route' => ['admin.colecciones.destroy', $form], 'method' => 'DELETE']) !!}
    <button type="submit" onclick="return confirm('Esta seguro que quiere eliminar?')" class="btn btn-danger">Eliminar formulario</button>
{!! Form::close() !!}