<?php
use App\Http\Controllers\praktikum1;
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
    return view('Home0167');
});
Route::get('/Home0167', [praktikum1::class, 'home']);
Route::get('/Artikel0167', [praktikum1::class, 'artikel']);
Route::get('/ContacUs0167', [praktikum1::class, 'contact']);