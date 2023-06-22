<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\ContactController;

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


Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::get('/contacts', [ContactController::class, 'store']);
Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/management', [ContactController::class, 'add']);
Route::post('/management', [ContactController::class, 'add']);

Route::post('/management', [ContactController::class, 'create']);
Route::get('/management/search', [ContactController::class, 'search']);






