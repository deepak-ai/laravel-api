<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Employees Routes
Route::post('add-employee',[EmployeeController::class, 'createEmployee']);
Route::get('list-employees',[EmployeeController::class, 'listEmployees']);
Route::get('employee/{id}',[EmployeeController::class, 'getSingleEmployee']);
Route::put('update-employee/{id}',[EmployeeController::class, 'updateEmployee']);
Route::delete('delete-employee/{id}',[EmployeeController::class, 'deleteEmployee']);

//Department Routes
Route::post('add-department',[DepartmentController::class, 'createDepartment']);
Route::get('list-departments',[DepartmentController::class, 'listDepartments']);
Route::get('department/{id}',[DepartmentController::class, 'getSingleDepartment']);
Route::put('update-department/{id}',[DepartmentController::class, 'updateDepartment']);
Route::delete('delete-department/{id}',[DepartmentController::class, 'deleteDepartment']);