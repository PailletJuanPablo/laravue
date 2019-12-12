<?php

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

Route::get('/components', 'VueTutorialComponent@components')->name('components');
Route::get('/dataBinding', 'VueTutorialComponent@dataBinding')->name('dataBinding');
Route::get('/conditional', 'VueTutorialComponent@conditional')->name('conditional');

