<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

Route::view('no', 'no');

Route::get('/contact', [FirstController::class, 'index']);

Route::get('/about', function () {
    return view('about');
})->middleware('ageCheck');

Route::get('login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('login');
});
Route::view('profile', 'profile');
Route::post('login/process', [FirstController::class, 'login']);
Route::get('logout', [FirstController::class, 'logout']);
Route::match(['get', 'post'], '/memberform', [FirstController::class, 'member']);
Route::view('welcome', 'welcome');
Route::get('students', [FirstController::class, 'fetchStudent']);
Route::get('delete/{id}', [FirstController::class, 'delStudent']);