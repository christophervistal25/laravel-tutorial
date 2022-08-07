<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeImportController;

Route::get('import', [EmployeeImportController::class, 'import']);
Route::post('process-import', [EmployeeImportController::class, 'processImport'])->name('employee.process.import');

Route::get('employees', [EmployeeController::class, 'index']);

Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/create', [EmployeeController::class, 'store'])->name('employee.store');