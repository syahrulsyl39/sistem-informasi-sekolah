<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function userUI(){
        return view('user.UserHome');
    }
}
