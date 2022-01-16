<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KonfirmasiController extends Controller
{
    public function index($id)
    {
        return view('admin.konfirmasi', [
            'users' => User::where('id', $id)->get()
        ]);
    }
}
