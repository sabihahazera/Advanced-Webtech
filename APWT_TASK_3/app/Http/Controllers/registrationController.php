<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class registrationController extends Controller
{
    public function registration(){
        return view('registration');
    }
    public function registrationsubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required',

            
        ],
        [
            'name.required'=>'Enter Your Name',
            'password.required'=>'Enter Your Password'
        ]
    );
        $user = new users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phonenumber = $request->phone;
        $user->accountType = "user";
        $user->save();

        return view('home');
    }

}
