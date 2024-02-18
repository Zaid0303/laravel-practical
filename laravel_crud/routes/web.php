<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'home'])->name('home');
Route::post('/', [StudentController::class, 'homeform']);
Route::get('/viewdata', [StudentController::class, 'std_view'])->name('view');
Route::get('/update/{id}', [StudentController::class, 'std_update']);
// Route::get('/update/{id}', [StudentController::class, 'std_update_data']);
Route::get('/del/{id}', [StudentController::class, 'std_del']);

