<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;


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
    return view('home');
});

Route::get('/associationship', [viewController::class, 'Associationship'])->name('associationship.view');
Route::get('/webinar', [viewController::class, 'Webinar'])->name('webinar.view');
Route::get('/achievements', [viewController::class, 'Achievements'])->name('achievements.view');
Route::get('/startupmart', [viewController::class, 'Startupmart'])->name('startupmart.view');
Route::get('/resources', [viewController::class, 'Resources'])->name('resources.view');