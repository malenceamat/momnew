<?php

namespace App\Http\Controllers;


use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
 public function video($req)
 {
     $path = Storage::put('public/image', $req->file('image'));
     $name = $req->file('image')->getClientOriginalName();
     $path = $req->file('image')->store('image');
     $videos = Video::all();

     Video::create([

         'name' => $name,
         'path' => $path

     ]);
    return view('video', [
        'videos' => $videos,
    ]);
 }
}
