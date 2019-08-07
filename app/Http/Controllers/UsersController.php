<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{
    //

    public function show($id){

        $data = [];

        $user = User::find($id);
        $data['user'] = $user;
        $podcast = $user->podcast;

        
        dd($user);// NULL !!
          
        return view('users.show',$data);
    }
}
