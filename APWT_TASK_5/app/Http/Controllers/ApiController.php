<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class ApiController extends Controller

{
    public function APIList(){
        $users = users::where('accountType', 'user')->get();
        return $users;
    }
    public function APIReg(Request $request){
        $user = new users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phonenumber = $request->phonenumber;
        $user->accountType = "user";
        if($user->save()) return "Saved";
    }

}