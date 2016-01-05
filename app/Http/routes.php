<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    /*
    Route::get('/', function () {
        return view('tasks');
    });
	*/
	//Route::post('/task','TaskController@store');
	
	Route::resource('task','TaskController');
	/*
	Route::get('/','TaskController@index');
	Route::get('/{id}','TaskController@show');
	Route::get('/edit/{id}','TaskController@edit');
	Route::delete('delete/{id}','TaskController@delete');
	*/
});

//test git


// test master bla bla bla
/*asdasdasd
 * 
 * 
 * /
