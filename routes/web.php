<?php

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
})->name('index');
Route::get('/home', function () {
    if (Auth::check()) {
        if (Auth::user()->hasAnyRole(['administrator', 'writer', 'postman'])) {
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('index');
        }
    }
})->middleware('auth');
Route::middleware(['auth', 'role:administrator|writer|postman'])->name('dashboard.')->prefix('dashboard')->group(function () {

    // Pages
    Route::get('/', [PageController::class, 'dashboard'])->name('index');

    // Users
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('permission:users read');
        Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show')->middleware('permission:users read');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update')->middleware('permission:users update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('permission:users delete');
    });

    // products
    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index')->middleware('permission:products read');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create')->middleware('permission:products create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store')->middleware('permission:products create');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show')->middleware('permission:products read');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('permission:products update');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('permission:products update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('permission:products delete');
    });


    Route::middleware(['auth', 'role:administrator'])->group(function () {
    });
    Route::middleware(['auth', 'role:writer'])->group(function () {

    });
    Route::middleware(['auth', 'role:postman'])->group(function () {

    });
    Route::get('/profile/{id}', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [UserController::class, 'update'])->name('profile.update');
    Route::post('/upload', [\App\Http\Controllers\UploadController::class, 'store']);
});







// auth
Route::get('/dashboard/login', function () {
    return view('auth.dash-login');
})->middleware(['guest'])
    ->name('dashboard.login');
// Route::get('/dashboard/register', function () {
//     return view('auth.login');
// })->middleware(['guest'])
//     ->name('register');





Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest']);

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);
// end auth