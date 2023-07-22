<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('index', [usercontroller::class,"index"])->name('index');
//Route::get('posts', [usercontroller::class,"create"]);
//Route::post("posts/insert",[usercontroller::class,"insert"])->name("insert");
//Route::get("posts/edit/{id}",[usercontroller::class,"edit"])->name("edit");
//Route::put("posts/update/{id}",[usercontroller::class,"update"])->name("update");
//Route::put("posts/delete/{id}",[usercontroller::class,"delete"])->name("delete");

Route::controller(usercontroller::class)->group(function ()
{
    Route::get('index','index')->name('index');
    Route::get('posts',"create");
    Route::post("posts/insert",'insert')->name("insert");
    Route::get("posts/edit/{id}",'edit')->name("edit");
    Route::put("posts/update/{id}",'update')->name("update");
    Route::put("posts/delete/{id}",'delete')->name("delete");
});


