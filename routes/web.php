<?php
//  table name student 

//   GET|HEAD        users ............ users.index › StudentController@index
//   POST            users ............ users.store › StudentController@store
//   GET|HEAD        users/create ... users.create › StudentController@create
//   GET|HEAD        users/{user} ....... users.show › StudentController@show
//   PUT|PATCH       users/{user} ... users.update › StudentController@update
//   DELETE          users/{user} . users.destroy › StudentController@destroy
//   GET|HEAD        users/{user}/edit .. users.edit › StudentController@edit

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('hello');
});

// Route::resource('users', StudentController::class);
Route::resource('users', StudentController::class)
     ->parameters(['users' => 'student']);





