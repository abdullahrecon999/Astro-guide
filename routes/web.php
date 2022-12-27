<?php

use App\Http\Controllers\PostController;
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
    return view('landing');
});

Route::get('/home', function () {
    return view('landing');
});

Route::get('/gallery', function () {
    return view('/Gallery/gallery');
});

Route::get('/assignment', function () {
    return view('/Assign3/Assignment3');
});

Route::get('/api', function () {
    return view('/API_Keys/APIview');
});

Route::get('/sat', function () {
    return view('/SatelliteView/Satellite');
});

Route::get('/sat/review', [PostController::class, 'viewSatReview']);

Route::post('/posts/add', [PostController::class, 'addSat']);
Route::post('/posts/del', [PostController::class, 'removeSat']);
Route::post('/posts/update', [PostController::class, 'updateSat']);
Route::get('/sat', [PostController::class, 'viewSat']);

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'addVal']);
Route::post('/posts/del', [PostController::class, 'deleteData']);

Route::post('/getmsg','App\Http\Controllers\LandingPageController@index');
Route::post('/getimg','App\Http\Controllers\LandingPageController@images');
Route::post('/getmoon','App\Http\Controllers\DashboardController@moonphase');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
