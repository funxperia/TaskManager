{!! Form::open(['route' => ['tasks.destroy', $task -> id], 'method' => 'DELETE']) !!}
     <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-close"></i></button>
{!! Form::close() !!}