<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function submit(PostRequest $req)
    {

        $validatedData = $req->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $path = Storage::put('image', $req->file('image'));
        $name = $req->file('image')->getClientOriginalName();

        $path = $req->file('image')->store('image');
        /*dd($request->file('image'));*/

        $save = new Photo;
        /*Photo::where('path', 'value')->first();*/
        $save->name = $name;
        $save->path = $path;
        $save->body = $path;
        $save->image = $path;
        $save->save();


        $photos = Photo::all();
        $body = $req->body;
        $text = $req->text;
        $button = $req->buttons;
         DB::table('posts')->insert(['text' => $body, 'body' =>$text, 'buttons' =>$button]);


        return view('slider', ['photos' => $photos])->with('status', 'Изображение было загружено');
    }

}




/*     public function index()
    {
        $post = Db::table('post')->get();
        return view('image', ['post' => $post]);
    }*/




