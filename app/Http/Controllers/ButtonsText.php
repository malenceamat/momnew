<?php

namespace App\Http\Controllers;
use App\Http\Requests\ButtonsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
class ButtonsText extends Controller
{
    public function submit(ButtonsRequest $req)
    {
        $text = $req->text;
        return DB::table('ButtonsText')->insert(['text' => $text]);

    }
}

