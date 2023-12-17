<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PopController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\ProcessControler;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceSliderController;
use App\Http\Controllers\Admin\StrategyController;
use App\Http\Controllers\Admin\TestimonialController;
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

     //{{ Strategy }}
    Route::get('/show_strategy', [StrategyController::class, 'show_strategy']);
    Route::post('/add_strategy', [StrategyController::class, 'add_strategy']);
    Route::post('/update_strategy/{id}', [StrategyController::class, 'update_strategy']);
    Route::get('/delete_strategy/{id}', [StrategyController::class, 'delete_strategy']);

    //{{ Category }}
    Route::get('/show_category', [CategoryController::class, 'show_category']);
    Route::post('/add_category', [CategoryController::class, 'add_category']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);


     //{{ Info }}
    Route::get('/show_info',[InfoController::class,'show_info']);
    Route::post('/add_info',[InfoController::class,'add_info']);
    Route::post('update_info/{id}',[InfoController::class,'update_info']);
    Route::get('/delete_info/{id}', [InfoController::class, 'delete_info']);


      //{{ Description }}
    Route::get('/show_description',[DescriptionController::class,'show_description']);
    Route::post('/add_description',[DescriptionController::class,'add_description']);
    Route::get('update_description/{id}',[DescriptionController::class,'update_description']);
    Route::post('update_description_confirm/{id}',[DescriptionController::class,'update_description_confirm']);
    Route::get('/delete_description/{id}', [DescriptionController::class, 'delete_description']);

     //{{ Testimonial }}
    Route::get('/show_testimonial',[TestimonialController::class,'show_testimonial']);
    Route::post('/add_testimonial',[TestimonialController::class,'add_testimonial']);
    Route::post('update_testimonial/{id}',[TestimonialController::class,'update_testimonial']);
    Route::get('/delete_testimonial/{id}', [TestimonialController::class, 'delete_testimonial']);


    //{{ Project }}
    Route::get('/show_project',[ProjectController::class,'show_project']);
    Route::post('/add_project',[ProjectController::class,'add_project']);
    Route::get('update_project/{id}',[ProjectController::class,'update_project']);
    Route::post('update_project_confirm/{id}',[ProjectController::class,'update_project_confirm']);
    Route::get('/delete_project/{id}', [ProjectController::class, 'delete_project']);



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
