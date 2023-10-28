<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Photo;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{

    public function edit($id)
    {
        $data= sliders::find($id);
        return view('edit',['data'=>$data]);

    }

public function update(Request $req)
    {

        $data = sliders::find($req->id);
        $data->name = $req->name;
        $data->body = $req->body;
        $data->head = $req->head;
        $data->support = $req->support;
        $data->buttons = $req->buttons;
        $data->mama = $req->mama;
        $data->save();


            return redirect('tablica');
    }


}




/*public function edit($id)
{
    return view('slider', ['slider' => sliders::find($id)]);

}

public function update(PostRequest $request, sliders $sliders)
{
    $sliders->update($request->validated());


    return $sliders;

}*/

