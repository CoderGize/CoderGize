<?php

use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PopController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\ProcessControler;
use App\Http\Controllers\Admin\ServiceSliderController;
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



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/', [CmsController::class, 'dash']);

    // {{ User }}
    Route::get('/show_user', [UserController::class, 'show_user']);
    Route::get('/update_user/{id}', [UserController::class, 'update_user']);
    Route::post('/update_user_confirm/{id}', [UserController::class, 'update_user_confirm']);
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);

    // {{ Social }}
    Route::get('/show_social',[SocialController::class,'show_social']);
    Route::post('/update_social_confirm/{id}',[SocialController::class,'update_social_confirm']);
    Route::get('/update_social/{id}',[SocialController::class,'update_social']);

     //{{ Partner }}
     Route::get('/show_partner', [PartnerController::class, 'show_partner']);
     Route::post('/add_partner', [PartnerController::class, 'add_partner']);
     Route::get('/delete_partner/{id}', [PartnerController::class, 'delete_partner']);

     //{{ Service }}
     Route::get('/show_service', [ServiceController::class, 'show_service']);
     Route::post('/add_service', [ServiceController::class, 'add_service']);
     Route::post('/update_service/{id}', [ServiceController::class, 'update_service_confirm']);
     Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service']);

     //{{ Hero }}
     Route::get('/show_hero',[HeroController::class,'show_hero']);
     Route::post('/add_hero',[HeroController::class,'add_hero']);
     Route::get('update_hero/{id}',[HeroController::class,'update_hero']);
     Route::get('/delete_hero/{id}', [HeroController::class, 'delete_hero']);

     //{{ Process }}
     Route::get('/show_process',[ProcessControler::class,'show_process']);
     Route::post('/add_process',[ProcessControler::class,'add_process']);
     Route::post('/update_process/{id}', [ProcessControler::class, 'update_process']);
     Route::get('/delete_process/{id}', [ProcessControler::class, 'delete_process']);

    //{{ Service Slider }}
    Route::get('/show_service_slider',[ServiceSliderController::class,'show_service_slider']);
    Route::post('/add_service_slider',[ServiceSliderController::class,'add_service_slider']);
    Route::post('/update_service_slider/{id}',[ServiceSliderController::class,'update_service_slider']);
    Route::get('/delete_service_slider/{id}',[ServiceSliderController::class,'delete_service_slider']);

    //{{ Customer }}
     Route::get('/show_customer', [CustomerController::class, 'show_customer']);
     Route::post('/add_customer', [CustomerController::class, 'add_customer']);
     Route::get('/delete_customer/{id}', [CustomerController::class, 'delete_customer']);


     //{{ Pop }}
     Route::get('/show_pop', [PopController::class, 'show_pop']);
     Route::post('/add_pop', [PopController::class, 'add_pop']);
     Route::post('/update_pop/{id}', [PopController::class, 'update_pop']);
     Route::get('/delete_pop/{id}', [PopController::class, 'delete_pop']);

    



});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
