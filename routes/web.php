<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PassengersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('adminCheck')->group(function(){
    Route::get('/',function(){
        return view('admin.index');
    })->name('ad');
    Route::get('/car', [CarController::class, 'index'])->name('car.index');
    Route::get('/passengers', [PassengersController::class, 'index'])->name('passengers.index');

});

Route::prefix('admin')->middleware('adminRole')->group(function(){

    Route::get('/car/add', [CarController::class, 'add'])->name('car.add');
    Route::post('/car/add', [CarController::class, 'saveAdd']);
    Route::get('/car/edit/{id}', [CarController::class, 'edit'])->name('car.edit');
    Route::post('/car/edit/{id}', [CarController::class, 'saveEdit']);
    Route::get('/car/remove/{id}', [CarController::class, 'remove'])->name('car.remove');
    Route::get('/passengers/add', [PassengersController::class, 'add'])->name('passengers.add');
    Route::post('/passengers/add', [PassengersController::class, 'saveAdd']);
    Route::get('/passengers/edit/{id}', [PassengersController::class, 'edit'])->name('passengers.edit');
    Route::post('/passengers/edit/{id}', [PassengersController::class, 'saveEdit']);
    Route::get('/passengers/remove/{id}', [PassengersController::class, 'remove'])->name('passengers.remove');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/user/edit/{id}',[UserController::class,'saveEdit']);
    Route::get('/user/remove/{id}',[UserController::class,'remove'])->name('user.remove');
    Route::get('/user/add',[UserController::class,'add'])->name('user.add');
    Route::post('/user/add',[UserController::class,'saveAdd']);



});
    Route::prefix('dang_nhap')->group(function(){
        Route::get('/',[LoginController::class,'index'])->name('dang_nhap');
        Route::post('/',[LoginController::class,'login']);
    });
    Route::prefix('logout')->group(function(){
        Route::get('/',[LoginController::class,'logout'])->name('logout');
    });
    Route::prefix('dang_ky')->group(function(){
        Route::get('/',[LoginController::class,'dang_ky'])->name('dang_ky');
        Route::post('/',[LoginController::class,'save_dang_ky']);
    });
    Route::any('role', function(){
     return view('admin.403');
    })->name('403');

    Route::any('logout', function(){
        Auth::logout();
        return redirect(Route('dang_nhap'));   
       });