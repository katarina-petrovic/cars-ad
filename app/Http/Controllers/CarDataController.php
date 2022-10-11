<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarDataController extends Controller
{
    // get data from json file
    function index()
    {
        $url = "https://www.classic-trader.com/api/vehicle-ad/266625.json";
        $car = Http::get($url);
        $objectCar = json_decode($car);
        if ($objectCar->success) {
            return view('car', ['car' => $objectCar]);
        }

    }
}