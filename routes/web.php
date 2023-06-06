<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Fontend\FontendController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('backend.dashboard');
// });

Auth::routes();
Route::controller(DashboardController::class)->group(function(){
    Route::get('admin/dashboard','index');
    Route::get('admin/category','category');
    Route::post('admin/category/store','store');
});
Route::controller(FontendController::class)->group(function(){
    Route::get('/','index');
    Route::get('/about','about');
    Route::get('/services','services');
    Route::get('/protfolio','protfolio');
    Route::get('/blog','blog');
    Route::get('/contact','contact');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
