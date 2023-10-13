<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'role:admin|writer|postman'])->name('admin.')->prefix('admin')->group(function(){
    Route::middleware(['auth', 'role:admin'])->group(function(){

    });
    Route::middleware(['auth', 'role:writer'])->group(function(){

    });
    Route::middleware(['auth', 'role:postman'])->group(function(){

    });
    Route::get('/',[DashboardController::class,'index'])->name('index');

});
