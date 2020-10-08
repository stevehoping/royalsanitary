<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('todos', [TodosController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::get('/dashboard',function(){
//         return view('dashboard');
//     });
//     Route::get('/rock',function(){
//         echo "rock";
//     });
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/about-us', [HomeController::class,'about_us']);


