<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::middleware('auth')->group(function(){
    Route::resource('/todo', TodoController::class);
    Route::patch('/todos/{todo}/update', [TodoController::class, 'complete'])->name('todo.complete');
    Route::patch('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);
Route::post('/upload', [UserController::class, 'uploadImage']);
    
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
