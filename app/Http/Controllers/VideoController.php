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

        /*$video = DB::table('video')->orderBy('video')->first();
        dd($video);
        return view('video', ['video' => $video]);*/


        $video =Video::all();
        return view('video', ['video' => $video]);
    }




 public function insert(Request $req)
 {
     $req->validate([
         'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
     ]);

     /*$file = $request->file('video');
     $file->move('upload/tmp',$file->getClientOriginalExtension());
     $file_name=$file->getClientOriginalName();*/


     $path = Storage::put('public/upload', $req->file('video'));  // cохраняет наш файл(фотку) в папку image
     $name = $req->file('video')->getClientOriginalName();  // позволяет работать с локальными данными в нашем проекте и отправить туда файл
     $path = $req->file('video')->store('upload');
     $video = video::all();


     $Text = $req->Text;
     $SmallText = $req->SmallText;

     video::create([
         'Text' => $Text,
         'SmallText' => $SmallText,
         'video' => $path
     ]);


     return view('video', [
         'video' => $video,


     ]);
 }
    public function back()
    {

        return view('video');
}













}
