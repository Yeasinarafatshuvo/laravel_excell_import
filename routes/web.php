<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/excell_import', [EmployeeController::class, 'importForm']);
Route::get('/get_all_employee', [EmployeeController::class, 'show_all_employee']);
Route::post('/store_excell', [EmployeeController::class, 'import_excell'])->name('import.excell');