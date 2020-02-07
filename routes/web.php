<?php

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

use App\Car;
use App\Carmodel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', 'AdminController@profile');
    Route::get('/admin/profile', 'AdminController@profile');
    Route::get('/admin/searchuser', function (Request $request) {
        if ($request->gender == 'all') {
            $users = User::query()
                ->where('name', 'LIKE', "%{$request->fname}%")
                ->where('sname', 'LIKE', "%{$request->sname}%")
                ->where('usertype', 'LIKE', "%{$request->usertype}%")
                ->get();
            return view('admin.searchuser', [
                'users' => $users]);
        } else {
            $users = User::query()
                ->where('name', 'LIKE', "%{$request->fname}%")
                ->where('sname', 'LIKE', "%{$request->sname}%")
                ->where('usertype', 'LIKE', "%{$request->usertype}%")
                ->where('gender', '=', $request->gender)
                ->get();
            return view('admin.searchuser', [
                'users' => $users]);
        }
    });
    Route::get('/admin/searchmodel', function (Request $request) {
        $models = Carmodel::query()
            ->where('name', 'LIKE', "%{$request->model}%")
            ->get();
        return view('admin.searchmodel', [
            'models' => $models]);
    });
    Route::get('/admin/filtercars', function (Request $request) {
        if ($request->parking == '') {
            $carsquery = Car::query();
            if (!empty($request->name)) {
                $carsquery->where('name', $request->name);
            }
            if (!empty($request->body)) {
                $carsquery->where('bodyId', $request->body);
            }
            if (!empty($request->parking)) {
                $carsquery->where('parkingId', $request->parking);
            }
            if (!empty($request->auctioncat)) {
                $carsquery->where('categorId', $request->auctioncat);
            }
            if (!empty($request->state)) {
                $carsquery->where('stateId', $request->state);
            }
            if (!empty($request->model)) {
                $carsquery->where('modelId', $request->model);
            }
            $cars = $carsquery->paginate(10);
            return view('admin.filtercars', [
                'cars' => $cars]);
        };
    });
    Route::get('/admin/searchcar', function (Request $request) {
        $cars = Car::query()
            ->where('name', 'LIKE', "%{$request->name}%")
            ->get();
        return view('admin.searchcars', [
            'cars' => $cars]);
    });
    Route::get('/admin/verified', 'AdminController@verified');
    Route::get('/admin/unverified', 'AdminController@unverified');
    Route::get('/admin/users', 'AdminController@users');
    Route::get('/admin/users/{user}', 'AdminController@user');
    Route::get('/admin/cars/{car}', 'AdminController@car');
    Route::get('/admin/carbody', 'AdminController@carbody');
    Route::post('/admin/delbody', 'AdminController@delbody');
    Route::post('/admin/addbody', 'AdminController@addbody');
    Route::post('/admin/addmodel', 'AdminController@addmodel')->name('upload.image');
    Route::post('/admin/delmodel', 'AdminController@delmodel');
    Route::post('/admin/addstate', 'AdminController@addstate');
    Route::post('/admin/delstate', 'AdminController@delstate');
    Route::post('/admin/addparking', 'AdminController@addparking');
    Route::post('/admin/delparking', 'AdminController@delparking');
    Route::post('/admin/addauctioncat', 'AdminController@addauctioncat');
    Route::post('/admin/delauctioncat', 'AdminController@delauctioncat');
    Route::post('/admin/completed', 'AdminController@completed');
    Route::get('/admin/models', 'AdminController@models');
    Route::get('/admin/states', 'AdminController@states');
    Route::get('/admin/parkings', 'AdminController@parkings');
    Route::get('/admin/auctioncategories', 'AdminController@auctioncategories');
    Route::get('/admin/cars', 'AdminController@cars');
});

Route::get('/auctions', 'AuctionController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contacts', 'ContactsController@index');
Route::get('/rules', 'RulesController@index');
Route::get('/faq', 'FaqController@index');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'UserController@showme');
});
Route::get('/images', 'CarsController@fetchimages');
Route::get('/fetchauctions', 'AuctionController@fetchauctions');
Route::get('/fetchslider', 'AuctionController@fetchslider');
Route::get('/fetchbodies', 'AuctionController@fetchbodies');
Route::get('/fetchmodels', 'AuctionController@fetchmodels');
Route::get('/fetchparkings', 'AuctionController@fetchparkings');
Route::get('/fetchstates', 'AuctionController@fetchstates');
Route::get('/fetchcars', 'AuctionController@fetchcars');
Route::get('/fetchcarsall', 'AuctionController@fetchcarsall');
Route::get('/fetchUser', 'UserController@fetchUser');
Route::get('/fetchusers', 'AdminController@fetchAllUsers');
Route::get('/cars/{id}', 'CarsController@showcar');
Route::get('/auctions/{id}', 'AuctionController@index');
Route::get('/auction/{id}', 'AuctionController@fetchcar');
Route::get('/auctionall/{id}', 'AuctionController@auctionall');
Route::get('/car/{id}', 'CarsController@fetchcar');
Route::get('/errors', 'RegisterController@validator');
Route::post('changepassword', 'ChangePasswordController@store');
Route::get('/searchcar', function (Request $request) {
    $carssearch = Car::query()
        ->where('name', 'LIKE', "%{$request->name}%")
        ->get();
    return view('layouts.app', [
        'carssearch' => $carssearch]);
});
Route::get('/filtercar', function (Request $request) {
    $carssel = Car::query();
    if (!empty($request->bodyval)) {
        $carssel->where('bodyId', '=', $request->bodyval);
    }
    if (!empty($request->modelval)) {
        $carssel->where('modelId', '=', $request->modelval);
    }
    if (!empty($request->stateval)) {
        $carssel->where('stateId', '=', $request->stateval);
    }
    if (!empty($request->parkingval)) {
        $carssel->where('parkingId', '=', $request->parkingval);
    }
    if (!empty($request->startval)) {
        $carssel->where('auctionStart', '>=', $request->startval);
    }
    if (!empty($request->endval)) {
        $carssel->where('endOfAuction', '<=', $request->endval);
    }
    $carsfilter = $carssel->get();
    return view('layouts.app', [
        'carsfilter' => $carsfilter]);
});
Route::get('/filtercarau', function (Request $request) {
    $carsauctions = Car::query();
    if (!empty($request->categorval)) {
        $carsauctions->where('categorId', '=', $request->categorval);
    }
    if (!empty($request->bodyval)) {
        $carsauctions->where('bodyId', '=', $request->bodyval);
    }
    if (!empty($request->modelval)) {
        $carsauctions->where('modelId', '=', $request->modelval);
    }
    if (!empty($request->stateval)) {
        $carsauctions->where('stateId', '=', $request->stateval);
    }
    if (!empty($request->parkingval)) {
        $carsauctions->where('parkingId', '=', $request->parkingval);
    }
    if (!empty($request->startval)) {
        $carsauctions->where('auctionStart', '>=', $request->startval);
    }
    if (!empty($request->endval)) {
        $carsauctions->where('endOfAuction', '<=', $request->endval);
    }
    $carsau = $carsauctions->get();
    return view('filtercars', [
        'cars' => $carsau]);
});
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
