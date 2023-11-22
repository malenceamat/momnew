<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\sliders;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class RegisterUserController extends Controller
{
    public function index($id)
    {

        $data = Registration::find($id);
        return view('client', ['data' => $data]);
    }
    public function delete($id)
    {
        $delete = Registration::find($id);
        $delete->delete();
        return redirect('/reg');
    }
}
