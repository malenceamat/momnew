<?php

namespace App\Http\Controllers;
use App\Models\Buttons;
use App\Http\Requests\ButtonsRequest;
use Illuminate\Support\Facades\DB;

class ButtonsText extends Controller
{
    public function submit(ButtonsRequest $req)
    {
        $text = $req->text;
        return DB::table('posts')->insert(['text' => $text]);
    }


}

