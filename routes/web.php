<?php

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

Route::get('/', 'ChatListController')->middleware('chat');
Route::get('/chat/{rid?}', 'ChatListController')->middleware('chat');
Route::post('/chat/post', 'ChatListController@post')->middleware('post')->middleware('chat');
Route::get('/login/', 'LoginController');
Route::post('/login/action', 'LoginController@action')->middleware('login');
