<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{

    public function signup(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $res = $user->save();

        if($res){
            return back()->with('success', "Registered successfully.");
        }else{
            return back()->with('fail', "Registration failed!");
        }
    }

}
