<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DependentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;

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
// Get Home Page
Route::get('/', [HomeController::class, 'index']);


// Get all employees
Route::get('/employee/', [EmployeeController::class, 'index']);

// Create Form
Route::get('/employee/create', [EmployeeController::class, 'create']);

// Get on using id
Route::get('/employee/{employee}', [EmployeeController::class, 'show']);

// Show Edit Form
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);

// Update employee
Route::put('/employee/{employee}', [EmployeeController::class, 'update']);

// Delete employee
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);

// Show Create Form
Route::get('/employee/create', [EmployeeController::class, 'create']);
//Add employee
Route::post('/employee', [EmployeeController::class, 'store']);




// Get all departments
Route::get('/department/', [DepartmentController::class, 'index']);

// Show Create Form
Route::get('/department/create/', [DepartmentController::class, 'create']);

//Add employee
Route::post('/department', [DepartmentController::class, 'store']);

// Delete department
Route::delete('/department/{department}', [DepartmentController::class, 'destroy']);

// Get on using id
Route::get('/department/{department}', [DepartmentController::class, 'show']);

// Show Edit Form
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit']);

// Update department
Route::put('/department/{department}', [DepartmentController::class, 'update']);

//Add department
Route::post('/department', [DepartmentController::class, 'store']);



// Get all dependents
Route::get('/dependent/', [DependentController::class, 'index']);

// Show Create Form
Route::get('/dependent/create/', [DependentController::class, 'create']);

//Add employee
Route::post('/dependent', [DependentController::class, 'store']);

// Delete department
Route::delete('/dependent/{dependent}', [DependentController::class, 'destroy']);

// Get on using id
Route::get('/dependent/{dependent}', [DependentController::class, 'show']);

// Show Edit Form
Route::get('/dependent/{dependent}/edit', [DependentController::class, 'edit']);

// Update department
Route::put('/dependent/{dependent}', [DependentController::class, 'update']);

//Add department
Route::post('/dependent', [DependentController::class, 'store']);

// Route::get('/', function () {
//     return view('index', ['employees' => Employee::all()]);
// });
