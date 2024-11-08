<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\AgendaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DataCenterController;
use App\Http\Controllers\Dashboard\PenghargaanController;
use App\Http\Controllers\Dashboard\Post\PostNewsController;
use App\Http\Controllers\Dashboard\WelcomeSliderController;
use App\Http\Controllers\Dashboard\Post\CategoryPostController;
use App\Http\Controllers\Dashboard\CategoryDataCenterController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('agenda', AgendaController::class, ['names' => 'dashboard.agenda']);
    Route::resource('slider', WelcomeSliderController::class, ['names'=> 'dashboard.sliders']);
    Route::resource('penghargaan', PenghargaanController::class, ['names' => 'dashboard.penghargaan']);
    Route::resource('category-data-center', CategoryDataCenterController::class, ['names' => 'dashboard.category.data.center']);
    Route::resource('data-center', DataCenterController::class, ['names'=> 'dashboard.data.center'])->except('show');


    Route::group(['prefix' => 'post'], function () {
        Route::resource('category-post', CategoryPostController::class, ['names' => 'dashboard.post.category']);
        Route::resource('post-news', PostNewsController::class, ['names' => 'dashboard.post.news']);

    });

    // Prefix for Datatable
    Route::group(['prefix' => 'datas'], function () {
        Route::get('sliders', [WelcomeSliderController::class, 'data_table'])->name('dashboard.sliders.data_table');
        Route::get('agendas', [AgendaController::class, 'data_table'])->name('dashboard.agenda.data_table');
        Route::get('penghargaan', [PenghargaanController::class, 'data_table'])->name('dashboard.penghargaan.data_table');
        Route::get('category-data-center', [CategoryDataCenterController::class, 'data_table'])->name('dashboard.category.data.center.data_table');
        Route::get('data-center', [DataCenterController::class, 'data_table'])->name('dashboard.data.center.data_table');
        Route::get('posts', [PostNewsController::class, 'data_table'])->name('dashboard.post.news.data_table');
        Route::get('category-post', [CategoryPostController::class, 'data_table'])->name('dashboard.post.category.data_table');

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
