<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProfileController;
use App\Models\EmployeeInformation;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Employees Routes

Route::get('/employees/create', [EmployeeController::class, 'create']);
// Store product information
Route::post('/employees',  [EmployeeController::class, 'store']);



require __DIR__.'/auth.php';
