<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\ListBlog;
use DB;
class HomeController extends Controller
{
    public function getBlog(Request $request){
        $data =  DB::table('posts')->paginate(2);
        return ListBlog::collection($data);

    }

}
