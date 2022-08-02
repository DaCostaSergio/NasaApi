<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\PhotoCollection;
use App\Http\Resources\Apod;
use App\Service\NasaApiService;
use App\Service\NasaApiApodService;



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

Route::get('/curiosity', function () {
    return new PhotoCollection(NasaApiService::getRoverPhotos());
});

Route::get('/apod', function () {
    return new Apod(NasaApiApodService::getApodPhoto());
});
