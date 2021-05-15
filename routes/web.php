<?php

use App\Http\Controllers\ApplicantsController;
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

Route::get('/', [ApplicantsController::class, 'index']);

Route::get('/change-hiring/{id}', [ApplicantsController::class, 'changeHiring']);
Route::get('/delete-applicant/{id}', [ApplicantsController::class, 'remove']);
Route::get('/edit-applicant/{id}', [ApplicantsController::class, 'showEditForm']);
Route::post('/edit-applicant/{id}', [ApplicantsController::class, 'edit']);
