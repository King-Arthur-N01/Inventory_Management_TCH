<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsertableController extends Controller
{
    public function __construct(){
        $this->middleware('permission:view posts', ['only' => ['readusertable']]);
    }
    public function readusertable(){
        $user=User::get();
        return view ('dashboard.account.usertable',['users'=>$user]);
    }
}
