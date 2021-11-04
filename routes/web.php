<?php

use App\Http\Controllers\RelationshipController;
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

Route::get('oneToOne', [RelationshipController::class, 'oneToOne']);

Route::get('inverseOneToOne', [RelationshipController::class, 'inverseOneToOne']);

Route::get('oneToMany', [RelationshipController::class, 'oneToMany']);

Route::get('inverseOneToMany', [RelationshipController::class, 'inverseOneToMany']);

Route::get('manyToMany', [RelationshipController::class, 'manyToMany']);
