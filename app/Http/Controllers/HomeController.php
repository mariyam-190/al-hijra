<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Http\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype == '0')
        {
            return view('Farm-management.home');
        }
        elseif($usertype == '1'){
            return view('Site-admins.home');
        }
        elseif($usertype == '2'){
            return view('Public-Administration.home');
        }
    }

    public function index(){
        return view('home');
    }

    public function dataEntry(){
        return view('dataentry');
    }
};
