<?php

use App\Http\Controllers\ActivityController;
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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/hobby', function () {
    return view('hobby');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/activity', [ActivityController::class, 'index']);

Route::get('/activitydetail/{judul}', [ActivityController::class, 'index1']);

Route::redirect('/', '/profile');
