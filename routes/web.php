<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;

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

Route::get('/', function () {
    // return view('auth.login');
    // return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // users 
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/edit/{user}', [UserController::class, 'update']);

    // agencies 
    Route::get('/agency', [AgencyController::class, 'index'])->name('agency');
    Route::get('/agency/create', [AgencyController::class, 'create'])->name('agency.create');
    Route::post('/agency/create', [AgencyController::class, 'store']);
    Route::get('/agency/edit/{agency}', [AgencyController::class, 'edit'])->name('agency.edit');
    Route::post('/agency/edit/{agency}', [AgencyController::class, 'update']);
    // Route::post('/agency/edit/{agency}', [AgencyController::class, 'delete']);
    Route::get('/agency/view/{agency}', [AgencyController::class, 'show'])->name('agency.view');





});
