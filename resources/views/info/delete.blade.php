{!! Form::open(['route' => ['info.destroy', $premiere->id], 'method' => 'DELETE', 'id' => 'delete']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
