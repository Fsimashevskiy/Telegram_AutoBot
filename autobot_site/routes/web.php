<?php

use App\Http\Controllers\TelegramUserController;
use App\Models\TelegramUser;
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

Route::apiResource('telegram_user', TelegramUserController::class);

Route::post('telegram_user/update', [TelegramUserController::class, 'update']);
