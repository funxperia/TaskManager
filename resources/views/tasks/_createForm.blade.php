@include('errors.createTasksErrors')

{!! Form::open(['route' => ['tasks.store','project'=> $project -> id], 'class' => 'form-inline']) !!}
      <td class="first-cell">
      {!! Form::text('name',null,['placeholder' => '新增任务','class' => 'form-control']) !!}
      </td>
      <td class="icon-cell">
      <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
      </td>
{!! Form::close() !!}