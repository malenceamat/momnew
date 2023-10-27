<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function edit($id)
    {
        return view('slider', ['slider' => sliders::find($id)])->with('status', 'Изображение было загружено');

    }
}

/*    public function formedit ($id, Photo $req)
    {
        $data = sliders::find($id);
        $data['name'] = $req->input('name');
        $data['body'] = $req->input('body');
        $data['head'] = $req->input('head');
        $data['support'] = $req->input('support');
        $data['buttons'] = $req->input('buttons');
        $data['mama'] = $req->input('mama');

    }
}*/


