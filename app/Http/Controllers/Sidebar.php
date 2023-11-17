<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sidebar extends Controller
{
    public function close(Request $request)
    {
        return response()->json(['status' => 'success']);
    }
}
