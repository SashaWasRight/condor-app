<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AllEmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function(){
Route::get('employees/create',[AllEmployeeController::class,'create']);
Route::post('employees/create',[AllEmployeeController::class,'store']);
Route::get('employees',[AllEmployeeController::class,'index'])->name('employees');

Route::patch('employees/edit/{employee}',[EmployeeController::class,'update']);
Route::get('employees/edit/{employee}',[EmployeeController::class,'edit']);
Route::delete('employees/{employee}',[EmployeeController::class,'delete']);

Route::get('managers/edit/{manager}',[ManagerController::class,'edit']);
Route::patch('managers/edit/{manager}',[ManagerController::class,'update']);
Route::delete('managers/{manager}',[ManagerController::class,'delete']);
});



Route::middleware('guest')->group(function() {
    Route::get('register', [RegisterController::class ,'create']);
    Route::post('register', [RegisterController::class ,'store']);

    Route::get('login',[SessionsController::class, 'create']);
    Route::post('login',[SessionsController::class, 'store']);
});


Route::post('logout',[SessionsController::class, 'destroy'])->middleware('auth');
