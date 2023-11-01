<?php

namespace App\Http\Controllers;


use App\Models\Slider;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DeleteController extends Controller
{

   public function delete(Request $req, $id)
   {
       $delete = sliders::find($id);

       Storage::disk('public')->delete('image', $delete['body']);
       $delete->delete();

       return redirect('/tablica');


   }
    public function table()
    {
        $tablica = sliders::get();

        return view('tablica', ['tablica' => $tablica]);

    }



}


/*public function deleteForm($id, Request $request)
{

    $delete =        Slider::find($id);
    Storage::disk('public')->delete('/images', $delete['photo']);
    $delete->delete();


    return Redirect::to('/slider');


}*/
