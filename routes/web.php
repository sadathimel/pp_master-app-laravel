<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\EstimationController;

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
    Route::post('/agency/delete/{agency}', [AgencyController::class, 'destroy']);
    Route::get('/agency/view/{agency}', [AgencyController::class, 'show'])->name('agency.view');

// job
Route::get('/estimation', [EstimationController::class, 'index'])->name('estimation');

    // Estimation 
    Route::get('/estimation', [EstimationController::class, 'index'])->name('estimation');
    Route::get('/estimation/create', [EstimationController::class, 'create'])->name('estimation.create');
    // Route::post('/estimation/create', [EstimationController::class, 'store']);
    // Route::get('/estimation/edit/{estimation}', [EstimationController::class, 'edit'])->name('estimation.edit');
    // Route::post('/estimation/edit/{estimation}', [EstimationController::class, 'update']);
    // Route::post('/estimation/edit/{estimation}', [EstimationController::class, 'delete']);
    // Route::get('/estimation/view/{estimation}', [EstimationController::class, 'show'])->name('estimation.view'); 
    
    // Bill 
    Route::get('/bill', [BillController::class, 'index'])->name('bill');
    Route::get('/bill/create', [BillController::class, 'create'])->name('bill.create');
    // Route::post('/bill/create', [BillController::class, 'store']);
    // Route::get('/bill/edit/{Bill}', [BillController::class, 'edit'])->name('bill.edit');
    // Route::post('/bill/edit/{Bill}', [BillController::class, 'update']);
    // Route::post('/bill/edit/{Bill}', [BillController::class, 'delete']);
    // Route::get('/bill/view/{Bill}', [BillController::class, 'show'])->name('bill.view'); 



// Report
Route::get('/report', [SellController::class, 'index'])->name('report');
Route::get('/report/create', [SellController::class, 'create'])->name('report.create');

});

Route::get('get-job-heads', [CommonController::class, 'getJobHeads']);
Route::get('get-agencyDetails', [CommonController::class, 'getAgencies']);
