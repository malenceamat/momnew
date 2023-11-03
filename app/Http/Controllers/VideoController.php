<?php

namespace App\Http\Controllers;



use App\Models\sliders;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

 public function video()
 {
     return view('video');
 }


    public function qwe()
    {

        $video =Video::firstOrCreate();
        return view('video', ['video' => $video]);
    }


 public function insert(Request $req)
 {
     $req->validate([
         'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
     ]);

    Storage::put('public/upload', $req->file('video'));  // cохраняет наш файл(фотку) в папку image
    $path = $req->file('video')->store('upload');

     $video= Video::updateOrCreate(
            ['id' => 1],
         [
         'Text' => $req ->get('Text'),
         'SmallText' => $req ->get ('SmallText'),

         ]);

     Video::updateOrCreate(
         ['id' => 1],
         [
             'video' => $path
         ]
     );



     return view('video',
     [
            'video' => $video,

     ]);
 }

}
