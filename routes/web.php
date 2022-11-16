<?php

use App\Http\Controllers\PresencaController;
use App\Http\Controllers\QrCodeController;
use App\Http\Livewire\InscricaoController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/inscricao', InscricaoController::class)->name('inscricao');
    Route::get('/qrcode', [QrCodeController::class, 'index'])->name('qrcode');
    Route::get('/presenca', [PresencaController::class, 'index'])->name('presenca');
});
