<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;

class TambahVaksinController extends Controller
{
    public function index()
    {
        return view('admin.tambahvaksin');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'stock' => 'required|max:255',
            'image' => 'image|file|max:3072',
        ]);

        $validatedData['image'] = $request->file('image')->store('post-images');

        Vaksin::create($validatedData);

        $request->session()->flash('success', 'New Vaccine Added Successfully!');

        return redirect('/daftarvaksin');
    }
}
