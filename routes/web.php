<?php

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
use App\Http\Controllers\PagesController;

Route::redirect('/', '/questionarios');

# handling answers pages
Route::get('/questionarios',  [PagesController::class, 'surveyList'])->name('questionarios');
Route::get('/questionarios/{id}', [PagesController::class, 'specificSurvey']);

# handling survey creation pages
Route::get('/criacao/questionario', [PagesController::class, 'surveyCreation'])->name('criacao');
