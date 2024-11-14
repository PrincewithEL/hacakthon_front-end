<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){


        if (Auth::id()) {
        if (Auth::user()->user_type=='user') {
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();                    
                        return view('user.home', compact('userdetails'));
                    }    
        
        else{
                   return view('users.home');
        }

    }
}
        public function index(){
        return view('users.home');
    }

            public function register(){
        return view('users.register');
    }
    
}