<?php

use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);

//create
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees/create', [EmployeeController::class, 'store']);

//upadate
Route::get('/employees/update/{id}/{employeeId}', [EmployeeController::class, 'edit']);
Route::post('/employees/update/{id}/{employeeId}', [EmployeeController::class, 'update']);

// detail
Route::get('/employees/detail/{id}/{employeeId}', [EmployeeController::class, 'detail']);

//delete
Route::get('/employees/delete/{id}/{employeeId}', [EmployeeController::class, 'delete']);
Route::post('/employees/delete/{id}/{employeeId}', [EmployeeController::class, 'destroy']);
