<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/companies/create', [CompanyController::class, 'create']);

    Route::get('/companies', [CompanyController::class, 'index'])
    ->name('companies.index');

    Route::post('/companies', [CompanyController::class, 'store'])
    ->name('companies.store');
});


require __DIR__ . '/auth.php';
