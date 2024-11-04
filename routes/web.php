<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\AgendaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\WelcomeSliderController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('agenda', AgendaController::class, ['names' => 'dashboard.agenda']);
    Route::resource('slider', WelcomeSliderController::class, ['names'=> 'dashboard.sliders']);


    // Prefix for Datatable
    Route::group(['prefix' => 'datas'], function () {
        Route::get('sliders', [WelcomeSliderController::class, 'data_table'])->name('sliders.data_table');
        Route::get('agendas', [AgendaController::class, 'data_table'])->name('agenda.data_table');
    });

    Route::group(['prefix' => 'pengaturan'], function () {
        Route::resource('roles', RoleController::class, ['names' => 'dashboard.roles']);
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


//
