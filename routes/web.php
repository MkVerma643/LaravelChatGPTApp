<?php

use App\Actions\ChatPrompt;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function (ChatPrompt $prompt) {
    return $prompt->handle("Hello ! tell me, who is MkVerma643 ?");
 })->name('chatprompt');
