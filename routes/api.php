<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('task', 'TaskController');
Route::apiResource('user', 'UserController');

Route::get('stats', function () {
    return [
        'videos' => 180,
        'lessons' => 1400
    ];
});

//tasks
Route::get('tasks', function () {
    $user = User::where('email', 'tclutheram13@latimes.com')->first();

    return $user->tasks->title; //TODO: resource, collection
});
