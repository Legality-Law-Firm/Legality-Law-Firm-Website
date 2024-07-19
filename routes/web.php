<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Associate;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Home;
use App\Http\Controllers\Patner;
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

Route::get('/', [Home::class, "index"]);
Route::get('/about', [About::class, 'index']);
Route::get('/patner', [Patner::class, 'index']);
Route::get('/associate', [Associate::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);
Route::get('/storage-link',function(){
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder,$linkFolder);
});
