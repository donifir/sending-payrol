<?php

use App\Http\Controllers\PayrolController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('send-email', [SendEmailController::class, 'index']);
Route::post('import', [PayrolController::class, 'import']);
Route::post('payroll/all', [PayrolController::class, 'showall']);
Route::post('payroll/{token}', [PayrolController::class, 'showdetail']);
