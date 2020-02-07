<?php

namespace App\Http\Controllers;

use App\Auctioncat;
use App\Body;
use App\Car;
use App\Carmodel;
use App\Parking;
use App\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index($id)
    {
//        $cars = Car::orderBy('id', 'asc')
//            ->where('categorId', '=', $id)
//            ->offset(0)
//            ->limit(6)
//            ->get();
        return view('auctions');
    }

    public function fetchcar($id)
    {
        $cars = Car::orderBy('id', 'desc')
            ->where('categorId', '=', $id)
            ->paginate(6);
        return $cars;
    }

    public function auctionall($id)
    {
        $auctionallis = Car::orderBy('id', 'desc')
            ->where('categorId', '=', $id)
            ->get();
        return $auctionallis;
    }

    public function fetchauctions()
    {
        $auctions = Auctioncat::orderBy('id', 'asc')->get();
        return $auctions;
    }

    public function fetchslider()
    {
        $slider = Car::orderBy('id', 'desc')->get();
        return $slider;
    }

    public function fetchbodies()
    {
        $bodies = Body::orderBy('id', 'asc')->get();
        return $bodies;
    }

    public function fetchmodels()
    {
        $models = Carmodel::orderBy('id', 'asc')->get();
        return $models;
    }

    public function fetchparkings()
    {
        $parkings = Parking::orderBy('id', 'asc')->get();
        return $parkings;
    }

    public function fetchstates()
    {
        $states = State::orderBy('id', 'asc')->get();
        return $states;
    }

    public function fetchcars()
    {
        $cars = Car::orderBy('id', 'desc')->where('completed', '1')
            ->paginate(6);
        return ($cars);
    }

    public function fetchcarsall()
    {
        $carsall = Car::orderBy('id', 'desc')->where('completed', '1')
            ->get();
        return $carsall;
    }
}
