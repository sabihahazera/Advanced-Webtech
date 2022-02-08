<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function service(){
        $product = array("chocolate", "chips", "juice");
        return view('service')
        ->with('product', $product);
    }
    public function ourteam(){
        $team = array("Name: Sabiha Hazera  Id: 19-39671-1","Name: Habib, Md Amir  Id: 19-41429-3", "Name: Hossan, Md Riyaz  Id: 19-41432-3 ", "Name: Rahman  Nafiur, Id: 19-41457-3");
        return view('ourteam')
        ->with('team', $team);
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function contactus(){
        return view('contactus');
    }
}
