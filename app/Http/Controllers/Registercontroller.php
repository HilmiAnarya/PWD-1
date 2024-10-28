<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function Register() {

        return view('register');
    }



    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = Hash::make($request->password) ;

        $user->save();

        return redirect('/logins')->with('success','Register successfully');


    }


}
