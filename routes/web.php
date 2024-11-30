<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CousreController;
use App\Http\Controllers\frontend\EventController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\TrainerController;
use App\Http\Controllers\RegisterController;

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
*/Route::get('/', [RegisterController::class, 'index']);

// Route::get('/', [RegisterController::class, 'index']);

 Route::get('/register', [RegisterController::class, 'Showregister']);
 Route::post('/do-register', [RegisterController::class, 'doRegister']);
 Route::get('/register-list', [RegisterController::class, 'registerList']);
 //Route::get('/conform-delete', [RegisterController::class, 'confirmDelete']);
 //Route::get('/delete-user', [RegisterController::class, 'deleteUser']);
 //Route::get('/get-edit', [RegisterController::class, 'getEdit']);
 //Route::post('/do-edit', [RegisterController::class, 'doEdit']);
 Route::get('/get-edit/{id}', [RegisterController::class, 'getEdit']); // Show edit form
 Route::put('/edit-user/{id}', [RegisterController::class, 'doEdit']); // Handle edit submission
 Route::get('/conform-delete/{id}', [RegisterController::class, 'confirmDelete']); // Show delete confirmation
 Route::delete('/delete-user/{id}', [RegisterController::class, 'deleteUser']); // Handle delete action


////Frontend Block


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
});
Route::controller(AboutController::class)->group(function(){
    Route::get('/about','index');
});
Route::controller(CousreController::class)->group(function(){
    Route::get('/course','index');
});
Route::controller(TrainerController::class)->group(function(){
    Route::get('/trainer','index');

});Route::controller(EventController::class)->group(function(){
    Route::get('/event','index');

});
Route::controller(PricingController::class)->group(function(){
    Route::get('/pricing','index');
});
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','index');
});
