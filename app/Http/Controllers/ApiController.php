<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function test()
    {
        return response()->json(['message' => 'Hello, API!']);
    }

    public function users(){

        $users = User::all();

        return response()->json(["message"=>"users fetched succufely ",'users' => $users]);
    }

    public function user($id){

        $user = User::find($id);

        if($user){
            return response()->json(["message"=>"user fetched succufely ",'user' => $user]);
        }else{
            return response()->json(["message"=>"user not found "]);
        }
    }
}
