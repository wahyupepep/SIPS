<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LetterController,HomeController,MediatorController,ProgressController,TrackController};
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'letter',
    'as' => 'letter',
    'midleware' => 'auth'
], function () {
    Route::get('/', [LetterController::class, 'index']);      
    Route::get('/create', [LetterController::class, 'create'])->name('.create');
    Route::post('/store', [LetterController::class, 'store'])->name('.store');
    Route::get('/detail/{detail:id}', [LetterController::class, 'show'])->name('.detail');
    Route::get('/edit/{edit:id}', [LetterController::class, 'edit'])->name('.edit');
    Route::put('/{id}', [LetterController::class, 'update'])->name('.update');
    Route::get('/{id}', [LetterController::class, 'destroy'])->name('.delete');
});

Route::group([
    'prefix' => 'mediator',
    'as' => 'mediator',
    'midleware' => 'auth'
], function () {
    Route::get('/', [MediatorController::class, 'index']);      
});

Route::group([
    'prefix' => 'progress',
    'as' => 'progress',
    'midleware' => 'auth'
], function () {
    Route::get('/{status:id}', [ProgressController::class, 'show'])->name('.show');
    Route::put('/{status:id}', [ProgressController::class, 'update'])->name('.update');

});

Route::group([
    'prefix' => 'track',
    'as' => 'track',
    'midleware' => 'auth'
], function () {
    Route::get('/', [TrackController::class, 'index']);      
});



