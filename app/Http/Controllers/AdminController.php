<?php

namespace App\Http\Controllers;

use App\Auctioncat;
use App\Body;
use App\Car;
use App\Carmodel;
//use App\Image;
use App\Parking;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('admin.profile');
    }

    public function verified()
    {
        $cars = Car::orderBy('id', 'desc')->
        where('completed', '1')
            ->paginate(10);
        return view('admin.verified', ['cars' => $cars]);
    }

    public function unverified()
    {
        $cars = Car::orderBy('id', 'desc')->
        where('completed', '0')
            ->paginate(10);
        return view('admin.unverified', ['cars' => $cars]);
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.users', ['users' => $users]);
    }
    public function fetchAllUsers()
    {
        $users = User::orderBy('id', 'desc')->get();
        return $users;
    }
    public function user($id)
    {
        $user = User::find($id);
        return view('admin.userprofile', compact('user'));
    }

    public function car($id)
    {
        $car = Car::find($id);
        $images = Image::where('carID', $id)->get();
        return view('admin.carshow', ['car' => $car, 'images' => $images]);
    }

    public function addbody(Request $request)
    {
        Body::insert([['name' => $request->body, 'icons' => $request->icon]]);
    }

    public function delbody(Request $request)
    {
        Body::where('id', $request->id)->delete();
    }

    public function addmodel(Request $request)
    {
        $image = $request->file('modelicon');
        $resize_img = Image::make($image->getRealPath());
        $image_name = time() .'.'. $image->getClientOriginalExtension();
        $destin = public_path('img/design_img');
        $resize_img->resize(100, 100, function($constrain){
            $constrain->aspectRatio();
        })->save($destin .'/'. $image_name);
        Carmodel::insert([['name' => $request->model, 'icons' => 'design_img/'.$image_name]]);
        return redirect('/admin/models');
    }

    public function delmodel(Request $request)
    {
        Carmodel::where('id', $request->modelid)->delete();
    }

    public function carousel()
    {
        return view('admin.carousel');
    }

    public function carbody()
    {
        $bodies = Body::orderBy('id', 'desc')->get();
        return view('admin.carbody', ['bodies' => $bodies]);
    }

    public function models()
    {
        $models = Carmodel::orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.models', ['models' => $models]);
    }

    public function addstate(Request $request)
    {
        State::insert([['name' => $request->state]]);
    }

    public function delstate(Request $request)
    {
        State::where('id', $request->stateid)->delete();
    }

    public function states()
    {
        $states = State::orderBy('id', 'desc')->get();
        return view('admin.states', ['states' => $states]);
    }

    public function addparking(Request $request)
    {
        Parking::insert([['address' => $request->parking]]);
    }

    public function delparking(Request $request)
    {
        Parking::where('id', $request->parkingid)->delete();
    }

    public function parkings()
    {
        $parkings = Parking::orderBy('id', 'desc')->get();
        return view('admin.parkings', ['parkings' => $parkings]);
    }

    public function addauctioncat(Request $request)
    {
        Auctioncat::insert([['name' => $request->auctioncat]]);
    }

    public function delauctioncat(Request $request)
    {
        Auctioncat::where('id', $request->auctioncatid)->delete();
    }

    public function auctioncategories()
    {
        $auctioncats = Auctioncat::orderBy('id', 'desc')->get();
        return view('admin.auctioncategories', ['auctioncats' => $auctioncats]);
    }

    public function cars()
    {
        $cars = Car::orderBy('id', 'desc')->paginate(10);
        $parkings = Parking::orderBy('created_at', 'desc')->get();
        $auctioncats = Auctioncat::orderBy('created_at', 'desc')->get();
        $bodies = Body::orderBy('id', 'desc')->get();
        $models = Carmodel::orderBy('id', 'desc')->get();
        $states = State::orderBy('id', 'desc')->get();
        return view('admin.cars', ['cars' => $cars, 'parkings' => $parkings, 'auctioncats' => $auctioncats, 'bodies' => $bodies, 'models' => $models, 'states' => $states]);
    }

    public function completed(Request $request)
    {
        $cars = Car::where('id', $request->id)
            ->update(['completed' => $request->verif]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//
    }
}
