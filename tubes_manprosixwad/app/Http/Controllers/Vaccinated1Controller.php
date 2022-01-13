<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Vaccinated1Controller extends Controller
{
    public function index($id)
    {
        return view('admin.vaccinated1', [
            'users' => User::where('id', $id)->get()
        ]);
    }
}
