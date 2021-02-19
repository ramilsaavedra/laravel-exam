<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);
        if(isset($user)){
            return view('user', compact('user'));
        } else {
            abort(404);
        }
    }
}
