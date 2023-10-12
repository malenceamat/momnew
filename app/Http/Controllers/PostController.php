<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function submit(PostRequest $req)
    {

        $body = $req -> body;

        return DB::table('post')->insert(['body'=>$body]);
    }
}


