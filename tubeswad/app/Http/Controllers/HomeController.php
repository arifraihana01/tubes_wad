<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $datadata = $data->flatten(1);
        return view('user.home', [
            'users' => User::where('id', auth()->user()->id)->get(),
            'data' => $datadata
        ]);
    }
}
