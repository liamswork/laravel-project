<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;



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

Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('employees', 'EmployeeController@displayEmployees');
Route::get('/companies', [App\Http\Controllers\CompanyController::class,'displayCompanies']);
