

@extends('layouts.app')

@section('content')

	<div class="panel-body">
		<!-- Current Tasks -->
		@if (count($tasks) > 0)
			<div class="panel panel-default">
				<div class="panel-heading">
					Current Tasks
				</div>

				<div class="panel-body">
					<table class="table table-striped task-table">
						<thead>
							<th>Task</th>
							<th>Description</th>
							<th>Publish Date</th>
							<th>&nbsp;</th>
						</thead>
						<tbody>
							@foreach ($tasks as $task)
								<tr>
									<td class="table-text"><div><a href='/learn/public/task/{{$task->id}}/edit'>{{ $task->name }}</a></div></td>
									<td class="table-text"><div>{{ $task->description }}</div></td>
									<td class="table-text"><div>{{ $task->publish_date }}</div></td>

									<!-- Task Delete Button -->
									<td>
										{!! Form::open(['method'=>'delete','url'=>'task/'.$task->id,'class'=>'form-horizontal']) !!}
											<button type="submit" class="btn btn-danger">
												<i class="fa fa-trash"></i>Delete
											</button>
										{!! Form::close() !!}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		@endif
	</div>

    <!-- TODO: Current Tasks -->
@endsection
