<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function fetchUser(){
        return Auth::user();
    }

    public function showme(){
    	return view('profile');
    }
}
