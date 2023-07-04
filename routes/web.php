<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Feature;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login-proses', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('registrasi', [AuthController::class, 'registrasi'])->name('registrasi')->middleware('guest');
Route::post('registrasi-proses', [AuthController::class, 'postRegistrasi'])->name('postRegistrasi');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


/*
|--------------------------------------------------------------------------
| Akun Admin
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('token', function (Request $request) {
        $token = $request->user()->createToken(Str::random(10));
 
        return ['token' => $token->plainTextToken];
    })->name('token');

    Route::resource('testimonial', TestimonialController::class);

    Route::resource('service', ServiceController::class);

});

