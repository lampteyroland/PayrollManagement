<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TaxController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Employees Routes -----------------------------------------------------------------------------------------
Route::group(['prefix' => 'employees'], function () {
    // Get register employee form
    Route::get('/create', [EmployeeController::class, 'create'])->name('CreateEmployee');

    // Store employee information
    Route::post('/', [EmployeeController::class, 'store']);

    // Show all employees
    Route::get('/', [EmployeeController::class, 'index'])->name('AllEmployees');

    // Get edit employee form
    Route::get('/{employee}/edit', [EmployeeController::class, 'edit']);

    // Update employee information
    Route::put('/{employee}', [EmployeeController::class, 'update']);

    // Delete employee record
    Route::delete('/{employee}', [EmployeeController::class, 'destroy']);

    // Show a single employee
    Route::get('/{employee}', [EmployeeController::class, 'show']);
});



// Salary Routes --------------------------------------------------------------------------------------------
Route::group(['prefix' => '/salaries'], function () {
    Route::get('/', [SalaryController::class, 'index'])->name('AllSalaries');
    Route::get('/create', [SalaryController::class, 'create'])->name('CreateSalaries');
    Route::post('/',  [SalaryController::class, 'store']);
    Route::get('/{salary}/edit', [SalaryController::class, 'edit']);
    Route::put('/{salary}', [SalaryController::class, 'update']);
    Route::delete('/{salary}', [SalaryController::class, 'destroy']);
    Route::get('/{salary}', [SalaryController::class, 'show']);
});


// Allowance Routes

Route::group(['prefix' => 'taxes'], function (){
    Route::get('/', [TaxController::class, 'index'])->name('AllTaxes');
    Route::get('/create', [TaxController::class, 'create'])->name('AddTaxes');
    Route::post('/',  [TaxController::class, 'store']);

});





require __DIR__.'/auth.php';
