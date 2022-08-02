<?php
namespace App\Service;

use Illuminate\Support\Facades\Http;

use App\Http\Resources\Photo;

 class NasaApiService
 {
   public static function getRoverPhotos():array
   {
     $response = Http::get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos',[
       'sol' => 1000,
       'api_key'=> env('API_KEY'),
     ]);


    
     return $response->json()['photos'];
   }
 }
