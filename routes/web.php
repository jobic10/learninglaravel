<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentController;
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
})->name('login');
Route::view('profile', 'profile');
Route::post('login/process', [FirstController::class, 'login']);
Route::get('logout', [FirstController::class, 'logout']);
Route::match(['get', 'post'], '/memberform', [FirstController::class, 'member']);
Route::view('welcome', 'welcome');
Route::get('students', [FirstController::class, 'fetchStudent']);
Route::get('delete/{id}', [FirstController::class, 'delStudent']);
Route::match(['GET', 'POST'], 'update/{id}', [FirstController::class, 'updateStudent']);

Route::get('student/{id}', [StudentController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
