<?php

use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TaxController;
use App\Http\Livewire\Allowance\Edit;
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
    Route::get('/create', [EmployeeController::class, 'create'])->name('CreateEmployee')->middleware('auth');

    // Store employee information
    Route::post('/', [EmployeeController::class, 'store'])->middleware('auth');

    // Show all employees
    Route::get('/', [EmployeeController::class, 'index'])->name('AllEmployees')->middleware('auth');

    // Get edit employee form
    Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');

    // Update employee information
    Route::put('/{employee}', [EmployeeController::class, 'update'])->middleware('auth');

    // Delete employee record
    Route::delete('/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth');

    // Show a single employee
    Route::get('/{employee}', [EmployeeController::class, 'show'])->middleware('auth');
});



// Salary Routes --------------------------------------------------------------------------------------------
Route::group(['prefix' => '/salaries', 'middleware' => 'auth'], function () {
    Route::get('/', [SalaryController::class, 'index'])->name('AllSalaries');
    Route::get('/create', [SalaryController::class, 'create'])->name('CreateSalaries');
    Route::post('/',  [SalaryController::class, 'store']);
    Route::get('/{salary}/edit', [SalaryController::class, 'edit']);
    Route::put('/{salary}', [SalaryController::class, 'update']);
    Route::delete('/{salary}', [SalaryController::class, 'destroy']);
    Route::get('/{salary}', [SalaryController::class, 'show']);
});


// Allowances Routes

Route::group(['prefix' => 'taxes', 'middleware' => 'auth'], function (){
    Route::get('/', [TaxController::class, 'index'])->name('AllTaxes')->middleware('auth');
    Route::get('/create', [TaxController::class, 'create'])->name('AddTaxes')->middleware('auth');
    Route::post('/',  [TaxController::class, 'store'])->middleware('auth');
    Route::get('/{tax}/edit', [TaxController::class, 'edit'])->middleware('auth');
    Route::put('/{tax}', [TaxController::class, 'update'])->middleware('auth');
    Route::delete('/{tax}', [TaxController::class, 'destroy'])->middleware('auth');
    Route::get('/{tax}', [TaxController::class, 'show'])->middleware('auth');


});

Route::group(['prefix' => 'allowances', 'middleware' => 'auth'], function (){
    Route::get('/', [AllowanceController::class, 'index'])->name('AllAllowance');
    Route::get('/create', [AllowanceController::class, 'create'])->name('AddAllowance');
    Route::post('/',  [AllowanceController::class, 'store']);
    Route::get('/{allowance}/edit', [AllowanceController::class, 'edit']);
    Route::put('/{allowance}', [AllowanceController::class, 'update']);
    Route::delete('/{allowance}', [AllowanceController::class, 'destroy']);
    Route::get('/{allowance}', [AllowanceController::class, 'show']);


});





require __DIR__.'/auth.php';
