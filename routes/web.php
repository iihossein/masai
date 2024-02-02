<?php

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('das', function () {
    return view('admin.profile.profile');
});
Route::middleware(['auth', 'role:administrator|writer|postman'])->name('admin.')->prefix('admin')->group(function(){
    Route::middleware(['auth', 'role:administrator'])->group(function(){

    });
    Route::middleware(['auth', 'role:writer'])->group(function(){

    });
    Route::middleware(['auth', 'role:postman'])->group(function(){

    });
    // Route::get('/',[DashboardController::class,'index'])->name('index');
    Route::get('/profile',[UserController::class,'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileInformationController::class,'update'])->name('profile.update');

});


// Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//     ->middleware(['guest'])
//     ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest']);

// Route::get('/register', [RegisteredUserController::class, 'create'])
//     ->middleware(['guest'])
//     ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);
