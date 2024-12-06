<?php

use Illuminate\Support\Facades\Route;


// front-end
use App\Http\Controllers\Dashboard\PioController;
use App\Http\Controllers\Dashboard\MapsController;

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\FrontEnd\BeritaController;
use App\Http\Controllers\Dashboard\AgendaController;
use App\Http\Controllers\Dashboard\BidangController;
use App\Http\Controllers\FrontEnd\LandingController;
use App\Http\Controllers\Dashboard\PejabatController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SubBidangController;
use App\Http\Controllers\FrontEnd\DataCenterController;
use App\Http\Controllers\Dashboard\AppBappedaController;
use App\Http\Controllers\Dashboard\PenghargaanController;
use App\Http\Controllers\Dashboard\Post\PostNewsController;
use App\Http\Controllers\Dashboard\WelcomeSliderController;
use App\Http\Controllers\Dashboard\Post\CategoryPostController;

// Dashboard
use App\Http\Controllers\Dashboard\CategoryDataCenterController;
use App\Http\Controllers\Dashboard\DataCenterController as DashboardDataCenterController;

// Route::get('/', function () {
//     return view('landing.index');
// });



Route::group(['prefix' => '/'], function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/profile', [LandingController::class, 'profil'])->name('landing.profile');
    Route::get('/tupoksi', [LandingController::class, 'tupoksi'])->name('landing.tupoksi');
    Route::get('/struktur-organisasi', [LandingController::class, 'struktur'])->name('landing.struktur');

    // berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/{slug}/detail', [BeritaController::class, 'show'])->name('berita.show');


    Route::get('data-center', [DataCenterController::class, 'index'])->name('data-center.index');
    // Route::get('data-center', [DataCenterController::class, 'index'])->name('data-center.index');
    Route::get('data-center/category/{slug}', [DataCenterController::class, 'show'])->name('data-center.category.show');
    Route::get('data-center/category/download/{slug}', [DataCenterController::class, 'download'])->name('data-center.category.download');
});


// front-end
// Route::resource('permohonan-informasi-online', PioController::class, ['names' => 'pio']);


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('agenda', AgendaController::class, ['names' => 'dashboard.agenda']);
    Route::resource('slider', WelcomeSliderController::class, ['names'=> 'dashboard.sliders']);
    Route::resource('penghargaan', PenghargaanController::class, ['names' => 'dashboard.penghargaan']);
    Route::resource('category-data-center', CategoryDataCenterController::class, ['names' => 'dashboard.category.data.center']);
    Route::resource('data-center', DashboardDataCenterController::class, ['names'=> 'dashboard.data.center'])->except('show');
    Route::resource('maps', MapsController::class, ['names' => 'dashboard.maps'])->except('show');
    Route::resource('app', AppBappedaController::class, ['names' => 'dashboard.app-bappeda']);
    Route::resource('permohonan-informasi-online', PioController::class, ['names' => 'dashboard.pio']);

    Route::resource('bidang', BidangController::class, ['names' => 'dashboard.bidang']);
    Route::resource('sub-bidang', SubBidangController::class, ['names' => 'dashboard.sub.bidang']);
    Route::resource('pegawai', PejabatController::class, ['names' => 'dashboard.pejabat']);

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
        Route::get('data-center', [DashboardDataCenterController::class, 'data_table'])->name('dashboard.data.center.data_table');
        Route::get('posts', [PostNewsController::class, 'data_table'])->name('dashboard.post.news.data_table');
        Route::get('category-post', [CategoryPostController::class, 'data_table'])->name('dashboard.post.category.data_table');
        Route::get('maps-data', [MapsController::class, 'data_table'])->name('dashboard.maps.data_table');
        Route::get('roles-data', [RoleController::class, 'data_table'])->name('dashboard.settings.roles.data_table');
        Route::get('app-datas', [AppBappedaController::class, 'data_table'])->name('dashboard.app-bappeda.data_table');
        Route::get('bidang-datas', [BidangController::class, 'data_table'])->name('dashboard.bidang.data_table');
        Route::get('sub-bidang-datas', [SubBidangController::class, 'data_table'])->name('dashboard.sub.bidang.data_table');
        Route::get('pejabats-datas', [PejabatController::class, 'data_table'])->name('dashboard.pejabat.data_table');
        Route::get('pios-datas', [PioController::class, 'data_table'])->name('dashboard.pio.data_table');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::resource('roles', RoleController::class, ['names' => 'dashboard.settings.roles']);
        Route::resource('users', UserController::class, ['names' => 'dashboard.settings.users']);
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
