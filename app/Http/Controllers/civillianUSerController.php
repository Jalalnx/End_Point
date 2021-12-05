<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource;
use App\Models\Reports;
use   App\Models\User;
use Illuminate\Http\Request;


class civillianUSerController extends Controller
{
    public function index( Request $request){
        // return User::where('is_admin',0)->get();
        // \Cache::forget();
        $page =$request->input('page',1);
         /**@var Collection $User */
        $user=  \Cache::remember('users', 30*60, function () {
        return user::all();  });
        $total=$user->count();

      return[
        'data'=>$user->forPage($page,20)->values(),
        'meta' => [
          'total' =>$total,
          'page'=>$page,
          'last_page' => ceil($total/20)
        ]
      ];

        // return UserResource::collection(User::Civillian()->get());
    }

    public static function findUser($id){
        return User::whereId($id)->get();
    }


}
