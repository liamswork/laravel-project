<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;



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

Route::get('/employees', [EmployeeController::class,'displayEmployees']);
Route::get('/companies', [CompanyController::class,'displayCompanies']);
Route::get('/companies/{company}', [CompanyController::class, 'displayCompany']);




//Deprecated routes, keeping for testing purposes.

// Route::get('/companies/{company}', function($slug){
//     try {
//         $company = Company::where('slug', $slug)->firstOrFail();
//         return view('company', ['company' => $company]);

//     } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
//         return view('company404');
//     }
// });

//Quick test to get all slugs of all companies.
// Route::get('/company-slugs', function () {
//     $companySlugs = \App\Models\Company::pluck('slug')->toArray();
//     return implode("<br>", $companySlugs);
// });
