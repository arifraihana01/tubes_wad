<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Vaccinated2Controller extends Controller
{
    public function index($id)
    {
        return view('admin.vaccinated2', [
            'users' => User::where('id', $id)->get()
        ]);
    }
}
