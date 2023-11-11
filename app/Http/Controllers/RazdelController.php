<?php

namespace App\Http\Controllers;




use App\Models\gallery;
use App\Models\sliders;
use Illuminate\Http\Request;
use App\Models\razdel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RazdelController extends Controller
{

    public function create1()
    {
         return view('createrazdel', [
             'name' => [],
             'gallery' => gallery::get()
         ]);

    }




    public function create(Request $req)
    {

        $name = new razdel();
        $name->name = $req->input('textrazdel'); // Присваиваем текст из запроса полю с контентом


        if ($req ->input('gallery')) :
            $name->gallerys()->attach($req->input('gallery'));
        endif;
        $name->save();

        return redirect('createrazdel');







    }






    public function table()
    {
        $names = razdel::get();

        return view('galleryedit', ['names' => $names]);

    }

    public function delete($id)
    {
        $delete = razdel::find($id);
        $delete->delete();

        return redirect('/galleryedit');
    }

    public function edit($id)
    {
        $names = razdel::find($id);
        return view('redrazdel', ['names' => $names]);



    }

    public function update(Request $req)
    {

        $names = razdel::find($req->id);
        $names->name = $req->name;

        $names->save();
        return redirect('redrazdel');
    }




}
