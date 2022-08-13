<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::redirect('/', 'employees');

Route::get('employees', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('employee/{employeeID}', [EmployeeController::class, 'show'])->name('employee.show');

Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/create', [EmployeeController::class, 'store'])->name('employee.store');

Route::get('employee/{employeeID}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{employeeID}/edit', [EmployeeController::class, 'update'])->name('employee.update');

