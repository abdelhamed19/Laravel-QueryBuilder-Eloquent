<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(PostController::class)->group(function ()
    {
    Route::get('/','index')->name('index');
    Route::get("tocreate","tocreate")->name("tocreate");
    Route::post('create','create')->name('create');
    Route::get("edit/{id}","edit")->name("edit");
    Route::put('edit/{id}','edit')->name('edit');
    Route::put("update/{id}","update")->name("update");
    }
);


