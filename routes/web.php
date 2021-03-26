<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', function () {return view('welcome');});



Route::get('/home', [NavController::class, 'showHome']);


Route::get('/list', [NavController::class, 'showList']);

Route::get('/character/{id}', [NavController::class, 'showCharacter']);

Route::get('/addCharacter', [NavController::class, 'showAddCharacter']);

Route::post('/addCharacter', [ActionController::class, 'addCharacter']);

Route::post('/deleteCharacter', [ActionController::class, 'deleteCharacter']);

Route::get('/updateCharacter/{id}', [NavController::class, 'showUpdateCharacter']);

Route::post('/updateCharacter', [ActionController::class, 'updateCharacter']);

Route::get('/listDesigners', [NavController::class, 'showListDesigners']);


Route::get('/addDesigner', [NavController::class, 'showAddDesigner']);

Route::post('/addDesigner', [ActionController::class, 'addDesigner']);

Route::post('/deleteDesigner', [ActionController::class, 'deleteDesigner']);

Route::get('/updateDesigner/{id}', [NavController::class, 'showUpdateDesigner']);

Route::post('/updateDesigner', [ActionController::class, 'updateDesigner']);