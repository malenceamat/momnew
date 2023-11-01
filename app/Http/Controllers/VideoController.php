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

        $video = DB::table('video')->orderBy('video')->first();
dd($video);

        return view('video', ['video' => $video]);


    }




 public function insert(Request $request)
{
    $request->validate([
        'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
    ]);

$file = $request->file('video');
$file->move('upload',$file->getClientOriginalName());
$file_name=$file->getClientOriginalName();

$insert = Video::create([
    'Text' =>$request->Text,
    'SmallText' =>$request->SmallText
]);
$insert ->video = $file_name;


$insert->save();
return redirect('/video');
}










}
