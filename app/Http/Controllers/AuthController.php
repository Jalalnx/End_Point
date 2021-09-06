<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Response;

class AuthController extends Controller
{

  public function register(RegisterRequest $request){

    $user = User::create($request->only("first_name","last_name","nataional_number","email","phone_number")+
       [
    "password" => \Hash::make($request->input('password') ),
    "is_admin" => 1
      ]);

 return  response()->json($user, 201);
 
  }

  function login(Request $request)
{
    if(!\Auth::attempt($request->only('email','password'))){
        return response([
            'error' => 'invalid credentials'
        ],401);
    }

    $user = \Auth::user();

    return response()->json($user,202);
  }
}
