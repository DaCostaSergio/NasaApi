<?php
namespace App\Service;

use Illuminate\Support\Facades\Http;

use App\Http\Resources\Apod;

 class NasaApiApodService
 {
   public static function getApodPhoto():array
   {
     $response = Http::get('https://api.nasa.gov/planetary/apod',[
       'api_key'=> env('API_KEY')
     ]);

     return $response->json();
   }
 }
