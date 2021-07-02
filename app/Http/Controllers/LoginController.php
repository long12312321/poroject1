<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use DB;
use App\Models\User;


class LoginController extends Controller
{
    public function postLogin(LoginRequest $request){
        if(Auth::attempt(['email' => $request->email,'password'=> $request->pass])){
            $data = DB::table('users')-> where('email',$request->email)->first();
              return response()-> json($data);
        }
    }
}
