<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarDataController extends Controller
{
    // get data from json file
    function index(Request $request)
    {
        $url = "https://www.classic-trader.com/api/vehicle-ad/".$request->id.".json";
        $car = Http::get($url);
        $objectCar =  json_decode($car);
        if ($objectCar->success) {
            return view('car', ['car' => $objectCar ]);
        }

    }
}