<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isStaff;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('Admin')->group(function () {
    Route::middleware([isAdmin::class])->group(function () {
        Route::controller(StaffController::class)->group(function (){
            Route::get('Diplay/Details','displayDetails')->name('DisplayDetails');
            Route::get('View/Details/{id}','viewDetails')->name('ViewDetails');
        });
        Route::controller(AdminController::class)->group(function (){

            Route::get('View/Details/{id}','viewDetails')->name('ViewDetails');
        });
    });
});

Route::prefix('Staff')->group(function () {
    Route::middleware([isStaff::class])->group(function () {
        Route::controller(StaffController::class)->group(function (){
            Route::get('Baptism/create','baptismCreate')->name('baptismCreate');
            Route::post('Baptism/AddData','insertData')->name('insertData');
//            Route::get('Diplay/Details','displayDetails')->name('DisplayDetails');
        });
    });
});
