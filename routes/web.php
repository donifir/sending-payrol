<?php

use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\PayrolController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(PayrolController::class)->group(function(){
    Route::get('/', 'importExport');
    Route::post('importpayrol', 'import')->name('importpayrol');
});

Route::controller(ImportExportController::class)->group(function(){
    Route::get('import_export', 'importExport');
    Route::post('import', 'import')->name('import');
    Route::get('export', 'export')->name('export');
});