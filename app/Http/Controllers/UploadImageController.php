<?php

namespace App\Http\Controllers;


use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class UploadImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function save(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $path = Storage::put('image', $request->file('image'));
        $name = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->store('image');
        /*dd($request->file('image'));*/

        $save = new Photo;
        /*Photo::where('path', 'value')->first();*/
        $save->name = $name;
        $save->path = $path;

        $save->save();

        Photo::create([
            'name' => $name,
            'path' => $path

        ]);

        $data = [
            'name' => $name,
            'path' => $path,
            'age' => $path

        ];

        Photo::create($data);






        $photos = Photo::all();
        return view('slider', ['photos' => $photos])->with('status', 'Изображение было загружено');


    }

    public function slider()

    {


        $photos = Photo::all();
        return view('slider', ['photos' => $photos])->with('status', 'Изображение было загружено');

    }



}
