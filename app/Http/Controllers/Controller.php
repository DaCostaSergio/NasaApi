<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


//Controller to get API Mars
// class apiController extends Controller {
//
//         public function __construct()
//         {
//           $this -> client()
//         }
//
//
//         public function getAllImages()
//         {
//           $data = $this->client->get('/rovers/curiosity/photos', {
//             // params: {
//             //   sol: '1000',
//             //   api_key: import.meta.env.VITE_APP_KEY
//             }
//
//         }
//
// }
