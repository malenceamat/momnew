<?php

namespace App\Http\Controllers;
use \Illuminate\Http\RedirectResponse;
use App\Http\Requests\PostRequest;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use App\Models\sliders;

class PostController extends Controller
{

    public function submit(PostRequest $req)
    {

        $validatedData = $req->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);                               //валидация

        $path = Storage::put('image', $req->file('image'));  // cохраняет наш файл(фотку) в папку image
        $name = $req->file('image')->getClientOriginalName();  // позволяет работать с локальными данными в нашем проекте и отправить туда файл
        $path = $req->file('image')->store('image');  // отправляет наш файл(фотку) в папку image
        $photos = sliders::all();  //показывает все фотки

        $body = $req->body;
        $text = $req->text;
        $button = $req->buttons;
        Photo::create([
            'head' => $body,
            'support' =>$text,
            'buttons' =>$button,
            'body' => $path,
            'name' => $name
        ]);

                //сохранение текста из формы в бд
        return view('slider', [
            'photos' => $photos,


        ])->with('status', 'Изображение было загружено');
    }

}










