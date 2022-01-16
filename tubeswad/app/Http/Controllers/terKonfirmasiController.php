<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class terKonfirmasiController extends Controller
{
    public function index($id)
    {
        return view('admin.terkonfirmasi', [
            'users' => User::where('id', $id)->get()
        ]);
    }
}
