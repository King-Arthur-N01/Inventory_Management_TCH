<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsergetController extends Controller
{
    public function pullindex(){
        return view('userpull');
    }
}
