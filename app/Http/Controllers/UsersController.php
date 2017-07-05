<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function show_profile(User $user)
    {
    	$user = new User;
    	return view('profile')->with(['user' => $user]);
    }	
}
