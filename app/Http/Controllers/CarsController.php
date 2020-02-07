<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function showcar($id)
    {
        $car = Car::find($id);
        return view('showcar', compact('car'));
    }

    public function fetchcar($id)
    {
        $car = Car::find($id);
        return $car;
    }

    public function fetchimages(){
        $images = Image::orderBy('id', 'desc')->get();
        return $images;
    }
}
