<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'users' => User::whereNotNull('status')->get()
        ]);
    }
    public function destroy(Pendaftaran $pendaftaran)
    {
        Pendaftaran::destroy($pendaftaran->id);
        return redirect('/dashboard')->with('success', 'Pendaftar Vaksin Dibatalkan');
    }
}
