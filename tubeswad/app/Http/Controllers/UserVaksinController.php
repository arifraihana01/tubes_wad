<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class UserVaksinController extends Controller
{
    public function index()
    {
        // return Pendaftaran::where('user_id', auth()->user()->id)->get();
        return view('user.userdaftarvaksin', [
            'pendaftarans' => Pendaftaran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function sudahvaksin()
    {

        return redirect('/dashboard');
    }
    public function batalvaksin()
    {
        return redirect('/dashboard');
    }
}
