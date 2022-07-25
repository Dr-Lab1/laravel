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

Route::get('/','App\Http\Controllers\PostController@index') -> name('welcome');
Route::get('/posts/{id}','App\Http\Controllers\PostController@show') -> whereNumber('id');
Route::get('/contactez-nous','App\Http\Controllers\PostController@contact') -> name('contact');

// Route::get('articles', function (){
//     return view('articles');
// });

// Route::get('posts', function(){
//     return response() -> json([
//         'nom'       => 'Kukwabantu',
//         'postnom'   => 'Bahati',
//         'prenom'    => 'Jonathan'
//     ]);
// });