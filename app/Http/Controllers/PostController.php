<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostController extends Controller
{
    public function submit(PostRequest $req)
    {

        /*  $body = $req -> body;
          return DB::table('post')->insert(['body'=>$body]);*/

        $post = new Post();
        $post->body = $req->input('body');


        $post->save();

        return redirect()->route('admin');
    }

}






/*class  PostController extends  Model
{
    public function index()
    {
        $post = Db::table('post')->get();
        return view('image', ['post' => $post]);
    }

}*/
