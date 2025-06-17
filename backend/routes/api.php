<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompletedController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\EmployeeCompleteController;
use App\Http\Controllers\EmployeePendingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/users',[AuthController::class, 'index']);
    Route::post('logout',[AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/store', [PendingController::class, 'store']);
    Route::get('/complete',[CompletedController::class, 'index']);
    Route::get('/employeecomplete',[EmployeeCompleteController::class, 'index']);
    Route::post('/employee-store', [EmployeePendingController::class, 'store']);
});

Route::get('/student-list', [AuthController::class, 'list']);




