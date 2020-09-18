<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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
    logger('welcome route.');
    return view('welcome');
});

// Laravel 8.x での書き方
Route::get('/hello', [HelloController::class, 'index']);
// // 上記と同じ結果
// Route::get('/hello', 'App\Http\Controllers\HelloController@index');

// // Laravel 7.x までの書き方(この書き方をしたい場合は、`RouteServiceProvider`の`$namespace`プロパティに'App\Http\Controllers'を追加すればいい、とリファレンスに書いてあったが、上手くいかなかった)
// Route::get('/hello', 'HelloController@index');
