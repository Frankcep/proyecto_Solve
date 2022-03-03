<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectControler;

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





Route::get('project/datos', [ProjectControler::class, 'index'])->name('datos.index'); 
Route::get('/project/datos/{id}',[ProjectControler::class, 'show'])->name('datos.show');
//ESTO ES PARA VER MAS PAGUINAS PREGUNTAR A FRNCISCO s {{ $porfolio->link()}}


//Route::get('/portafolios', 'portafoliosController@index')->name('portafolios');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contacto')->name('contacto');