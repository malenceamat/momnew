<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class EditController extends Controller
{
   public function delete($id)
   {
       sliders::destroy($id);
       return redirect('/tablica');
   }
}
