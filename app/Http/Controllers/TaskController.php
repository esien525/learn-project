<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    //
     public function index()
    {
        //
        $tasks = Task::orderBy('publish_date', 'asc')->where('publish_date','>=',Carbon::now())->get();
        return view('task.tasks',['tasks'=>$tasks]);
    }
	
	public function create()
	{
		return view('task.create');
	}
	
	public function store(TaskRequest $request)
	{
		$input	   = $request->all();
		/*
		$validator = Validator::make($input, [
			'name' => 'required|max:255',
		]);

		if ($validator->fails()) {
			return redirect('/')
				->withInput()
				->withErrors($validator);
		}
		*/
		$task = new Task;
		$task->name 		= Request::get('name');
		$task->description 	= Request::get('description');
		$task->publish_date	= Request::get('publish_date');
		$task->save();

		return redirect('task');
		
		//return $input; 
	}
	
	public function edit($id)
	{
		$task = Task::findOrFail($id);
		return view('task.edit',['task'=>$task]);
	}
	
	public function update($id, TaskRequest $request)
	{
		$task = Task::findOrFail($id);
		
		$task->update($request->all());
		return redirect('task');
	}
	
	public function destroy($id)
	{
		$task = Task::findOrFail($id);
		$task->delete();

		return redirect('task');
	}
}
