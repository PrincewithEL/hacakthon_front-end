<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Csv;

class AdminController extends Controller
{

    public function logout(){
        session()->forget('adminLogin');
        return redirect('/login');
    }
    
     public function registerUser(Request $request){
        $user = new user;
        $file = \Request::file('image');
        $destination = 'user_images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        // $user_type = $request->input('user_type');
        $user_type = 'user';
        $email = $request->input('email');
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        // return redirect()->back();
        return redirect('/login');        
    }

             public function saveCSV(Request $request){
        $id = auth()->id();
        $csv =  new Csv;
        $file = \Request::file('csv');
        $destination = 'csv';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);
        $description = $request->input('description');

        $csv->csv=$mainFilename;
        $csv->description=$description;
        $csv->user_id=$id;

        $csv->save();

        return redirect()->back();
    }


}
