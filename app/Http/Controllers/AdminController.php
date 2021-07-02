<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Resources\ListBlog;
use App\Http\Resources\ListUser;
use App\Http\Requests\addUserRequest;
use DB;

class AdminController extends Controller
{
    public function getBlog(Request $request){
        $data =  DB::table('posts')->paginate(2);
        return ListBlog::collection($data);

    }
    public function getUser(Request $request){
        $user =  User::get();
        return ListUser::collection($user);

    }
    public function addUser(addUserRequest $request){
       
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name= $request->name;
        $user->save();
       
        $user =  User::get();
        return ListUser::collection($user);

        

    }
    public function deleteUser(Request $request){
       
        $user = User::find($request->id)->delete();
       
       
        $user =  User::get();
        return ListUser::collection($user);


        

    }
}
