

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				New Task
			</div>
			<div class="panel-body">
				@include('errors.list')
				<!-- New Task Form -->
				{!! Form::open(['url'=>'task','class'=>'form-horizontal']) !!}  
					{{ csrf_field() }}
					<div class="form-group">
						{!! Form::label('name','Task:', 
								array('required', 
									  'class'=>'col-sm-3 control-label')) !!}
						<div class="col-sm-6">			  
							{!! Form::text('name', null, 
									array('required', 
										  'class'=>'form-control', 
										  'placeholder'=>'Task name')) !!}
						</div>				  
					</div>
					
					<div class="form-group">
						{!! Form::label('description','Description:', 
								array('required', 
									  'class'=>'col-sm-3 control-label')) !!}
						<div class="col-sm-6">			  
							{!! Form::textarea('description', null, 
									array('required', 
										  'class'=>'form-control', 
										  'placeholder'=>'Task description')) !!}
						</div>				  
					</div>
					
					<div class="form-group">
						{!! Form::label('publish_date','Publish At:', 
								array('required', 
									  'class'=>'col-sm-3 control-label')) !!}
						<div class="col-sm-6">			  
							{!! Form::input('date','publish_date', date('Y-m-d'), 
									array('required', 
										  'class'=>'form-control', 
										  'placeholder'=>'Publish Date')) !!}
						</div>				  
					</div>
					
					<div class="form-group" style='margin:15px 0'>
						<div class="col-sm-offset-3 col-sm-6">
							{!! Form::button('<i class="fa fa-plus"></i> Add Task', ['type' => 'submit', 'class' => 'btn btn-default'] )  !!}
						</div>
					</div>
				{!! Form::close() !!}
			   <div style='clear:both;'></div>
			</div>
		</div>
	</div>
	<div style='clear:both;'></div>
	

    <!-- TODO: Current Tasks -->
@endsection
