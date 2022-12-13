<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//admin

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
    Route::get('/alumni-list',[App\Http\Controllers\HomeController::class,'list']);
    Route::get('/add-alumni',[App\Http\Controllers\HomeController::class,'addAlumni']);
    Route::post('/save-alumni',[App\Http\Controllers\HomeController::class,'saveAlumni']);
    Route::get('/edit-alumni/{id}',[App\Http\Controllers\HomeController::class,'editAlumni']);
    Route::post('/update-alumni',[App\Http\Controllers\HomeController::class,'updateAlumni']);
    Route::get('delete-alumni/{id}',[App\Http\Controllers\HomeController::class,'deleteAlumni']);
});



//user

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

// Route::view('/frontpage', 'frontpage');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
// Route::get('/occupationalform', [App\Http\Controllers\HomeController::class, 'occupationalform']);




