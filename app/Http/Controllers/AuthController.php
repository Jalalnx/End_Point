<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\updateInfoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    // git push heroku main
    // salty-brushlands-54793
    // thawing-peak-24216
    // Mcfc4YM8ROavO6yL8J68Yy1NfDrHWwXrC/UfqSW4ixU=



   
    protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 2; // Default is 1

  public function register(RegisterRequest $request){
    $user = User::create($request->only("first_name","last_name","nataional_number","img_url","email","phone_number")+
       [
       "password" => bcrypt($request->input('password') ),
       "is_admin" => 1
      ]);
    //   $token= \Auth::login($user);
      return  response()->json($user, 201);
    //   return $this->resdpondWithToken($token);
  }


  function login(Request $request)
{
  $creadentials =$request->only('email','password');
    if(!\Auth::attempt($creadentials)){
        return response([
            'error' => 'Unauthorized'
        ],401);
    }
    $user = \Auth::user();
    $jwt=$user->createToken('token',['admin'])->plainTextToken;
    $cookie= cookie('jwt',$jwt,60*24);
    return
    response(
        [
         'jwt'=>$jwt,
        'message' => 'success'
        ],202)
        ->withCookie($cookie);
  }

  public function user(Request $request){
    // return $request->user();
        //  return response()->json(UserResource::collection(auth()->user()));
        return response()->json(auth()->user());
  }
  public function logout()
  {
      $cookie=\Cookie::forget('jwt');
      return
      response(
          [
          'message' => 'success'
          ],202)
          ->withCookie($cookie);

        }

        public function updateInfo(updateInfoRequest $request){

            $user =$request->user();
            $user->update($request->only('first_name','last_name','email'));
            return response($user,202);
        }
        public function upadtePassword(updateInfoRequest $request){

            $user =$request->user();
            $user->update(
                [
             "password" => bcrypt($request->input('password') )
                ]);
            return response($user,202);
        }

}
