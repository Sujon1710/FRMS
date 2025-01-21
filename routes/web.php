<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrisisCategoryController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\VolunteerController;                                                                                                                                    
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CrisisController;
use App\Http\Controllers\Frontend\CrisisController as FrontendCrisisController;
use App\Http\Controllers\Frontend\DonarController as FrontendDonarController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ShelterController as FrontendShelterController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\VolunteerController as FrontendVolunteerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\SslCommerzPaymentController;

// frontend route

   
    Route::get('/',[FrontendHomeController::class,'home'])->name('frontend.home');
    Route::get('/donar-form/{crisis_id}',[FrontendDonarController::class,'create'])->name('donar.form');
    Route::post('/donar-store',[FrontendDonarController::class,'store'])->name('donar.store');


     Route::get('/volunteer-form',[FrontendVolunteerController::class,'create'])->name('create');
     Route::get('/volunteer-details',[FrontendVolunteerController::class,'details'])->name('volunteer.details');
     Route::get('/details/{id}',[FrontendVolunteerController::class,'viewdetails'])->name('view.details');
     Route::post('/create-store',[FrontendVolunteerController::class,'createstore'])->name('create.store');


    //  login route     
    Route::post('/volunteer/login',[FrontendVolunteerController::class,'login'])->name('volunteer.login');
    Route::get('/volunteer/log_out',[FrontendVolunteerController::class,'log_out'])->name('volunteer.log_out');

    //  crisis routes
    Route::get('/ongoing-crisis',[FrontendCrisisController::class,'crisis'])->name('crisis');
    Route::get('/ongoing-crisis/show/{id}',[FrontendCrisisController::class,'crisisview'])->name('crisis.show');

    // shelter management route
    Route::get('/shelter-info',[FrontendShelterController::class,'shelter'])->name('shelter.info');
    Route::get('/shelter/deatils/{id}',[FrontendShelterController::class,'viewdetails'])->name('shelter.details');



    //ssl commerz
    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END


// Admin Route Group with prefix "Admin"
Route::group(["prefix" => "Admin"], function() {

    // Admin login routes (no authentication required)
    Route::get('/adminLogin', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/do_login', [AdminLoginController::class, 'do_login'])->name('sign_up');
    
    // Routes that require authentication
    Route::group(["middleware" => "auth"], function() {
        
    // Admin logout route
    Route::get('/sign_out', [AdminLoginController::class, 'sign_out'])->name('logout');
    
    // Admin home route (could be a dashboard or home page)
    Route::get('/', [HomeController::class, 'home'])->name('home');
    
    // Crisis Category Routes
    Route::get('/crisis_category', [CrisisCategoryController::class, 'crisis_category'])->name('category');
    Route::get('/create_crisis_category', [CrisisCategoryController::class, 'create_crisis_category'])->name('create.category');
    Route::post('/crisis_category_store', [CrisisCategoryController::class, 'crisis_category_store'])->name('category.store');
    Route::get('/crisis-category/delete/{id}',[CrisisCategoryController::class,'delete'])->name('crisis.category.delete');

    // Crisis Routes
    Route::get('/crisis-list',[CrisisController::class,'crisislist'])->name('crisis.list');
    Route::get('/crisis-form',[CrisisController::class,'crisisform'])->name('crisis.form');
    Route::post('/crises', [CrisisController::class, 'store'])->name('crises.store');
    Route::get('/crisis/delete/{id}',[CrisisController::class,'delete'])->name('crisis.delete');

    // Donar Routes
    Route::get('/donar', [DonarController::class, 'donar'])->name('donar');
    

    // Volunteer Routes
    Route::get('/volunteer', [VolunteerController::class, 'volunteer'])->name('volunteer');


    // location route
Route::get('/locations', [LocationController::class, 'list'])->name('locations.list'); 
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create'); 
Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/locations/edit/{id}', [LocationController::class, 'edit'])->name('locations.edit');
Route::post('/locations/update/{id}', [LocationController::class, 'update'])->name('locations.update');
Route::get('/locations/delete/{id}', [LocationController::class, 'delete'])->name('locations.delete');

    
// shelters route
Route::get('/shelter-list',[ShelterController::class,'list'])->name('shelter.list');
Route::get('/shelter-form',[ShelterController::class,'create'])->name('shelter.create');
Route::post('/shelter-store',[ShelterController::class,'store'])->name('shelter.store');
Route::get('/shelter/delete/{id}',[ShelterController::class,'delete'])->name('shelter.delete');
Route::get('/shelter/edit/{id}',[ShelterController::class,'edit'])->name('shelter.edit');
Route::put('/shelter/update/{id}',[ShelterController::class,'delete'])->name('shelter.update');



// medical assistance route
Route::get('/medical-list',[MedicalController::class,'list'])->name('assistance.list');
Route::get('/medical-form',[MedicalController::class,'create'])->name('assistance.create');
Route::post('/medical-store',[MedicalController::class,'store'])->name('assistance.store');
Route::get('/medical/delete/{id}',[MedicalController::class,'delete'])->name('assistance.delete');
Route::get('/medical/edit/{id}',[MedicalController::class,'edit'])->name('assistance.edit');
Route::put('/medical/update/{id}',[MedicalController::class,'update'])->name('assistance.update');


// resource management route
Route::get('/resource-list',[ResourceController::class,'list'])->name('resource.list'); 
Route::get('/resource-form',[ResourceController::class,'create'])->name('resource.create'); 
Route::post('/resource-store',[ResourceController::class,'store'])->name('resource.store'); 
Route::get('/resource/delete/{id}',[ResourceController::class,'delete'])->name('resource.delete'); 
Route::get('/resource/edit/{id}',[ResourceController::class,'edit'])->name('resource.edit'); 
Route::put('/resource/update/{id}',[ResourceController::class,'update'])->name('resource.update'); 

});

});




