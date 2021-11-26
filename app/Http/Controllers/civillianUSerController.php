<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserResource;
use App\Models\Reports;
use   App\Models\User;

class civillianUSerController extends Controller
{
    public function index(){
        // return User::where('is_admin',0)->get();
        return UserResource::collection(User::Civillian()->get());
    }

    public static function findUser($id){
        return User::whereId($id)->get();
    }


}
