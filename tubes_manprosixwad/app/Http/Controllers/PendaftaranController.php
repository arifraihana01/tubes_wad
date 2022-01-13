<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:255',
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'time' => 'required|max:255',
            'status' => 'required|max:255',
            'ktp' => 'image|file|max:3072',
            'kk' => 'image|file|max:3072'
        ]);

        // $validatedData['tanggal'] = format;

        // return dd($validatedData);
        $validatedData['user_id'] = auth()->user()->id;

        // $validatedData['ktp'] = $request->file('ktp')->store('post-images.warga');
        // $validatedData['kk'] = $request->file('kk')->store('post-images.warga');
        Pendaftaran::create($validatedData);
        User::updated([
            'status' => 'konfirmasi'
        ]);

        $request->session()->flash('success', 'Registration successfull!');

        return redirect('userdaftarvaksin');
    }

    public function update(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->NIK = $request->NIK;
        $data->tanggallahir = $request->tanggallahir;
        $data->alamat = $request->alamat;
        $data->status = 'konfirmasi';
        $data->save();
        return redirect('/home');
    }
    public function updatekonfirmasi(Request $request)
    {
        $data = User::find($request->id);
        $data->tanggal = $request->tanggal;
        $data->time = $request->time;
        $data->status = 'terkonfirmasi';
        $data->save();

        return redirect('/dashboard');
    }
    public function updateterkonfirmasi(Request $request)
    {

        $data = User::find($request->id);
        $validatedData = $request->validate([
            'sertif1' => 'image|file|max:3072',
        ]);
        $validatedData['sertif1'] = $request->file('sertif1')->store('post-images');
        $data->tanggal = $request->tanggal;
        $data->time = $request->time;
        $data->sertif1 = $validatedData['sertif1'];
        $data->status = 'vaccinated1';
        $data->save();



        return redirect('/dashboard');
    }
    public function updatevaccinated1(Request $request)
    {
        $data = User::find($request->id);
        $validatedData = $request->validate([
            'sertif2' => 'image|file|max:3072',
        ]);
        $validatedData['sertif2'] = $request->file('sertif2')->store('post-images');
        $data->tanggal = null;
        $data->time = null;
        $data->sertif2 = $validatedData['sertif2'];
        $data->status = 'vaccinated2';
        $data->save();



        return redirect('/dashboard');
    }

    public function daftarlagi(Request $request)
    {
        $data = User::find($request->id);
        $data->status = null;
        $data->save();

        return redirect('/pendaftaran');
    }

    public function updateakun(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->NIK = $request->NIK;
        $data->tanggallahir = $request->tanggallahir;
        $data->hp = $request->hp;
        $data->alamat = $request->alamat;
        $data->email = $request->email;

        $data->save();

        return redirect('/akun');
    }

    public function cancel(Request $request)
    {
        $data = User::find($request->id);
        $data->status = 'cancel';
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/dashboard');
    }
    public function canceladmin(Request $request)
    {
        $data = User::find($request->id);
        $data->status = 'cancel';
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/dashboard');
    }

    public function cancel1(Request $request)
    {
        $data = User::find($request->id);
        $data->status = 'cancel';
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/pendaftaran');
    }

    public function cancel2(Request $request)
    {
        $data = User::find($request->id);
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/home');
    }
    public function cancel3(Request $request)
    {
        $data = User::find($request->id);
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/dashboard');
    }
    public function canceladmin1(Request $request)
    {
        $data = User::find($request->id);
        $data->tanggal = null;
        $data->time = null;
        $data->save();

        return redirect('/dashboard');
    }

    public function sertif(Request $request)
    {
        $validatedData = $request->validate([
            'ktp' => 'image|file|max:3072',
        ]);

        $validatedData['ktp'] = $request->file('ktp')->store('post-images');

        User::create($validatedData);

        $request->session()->flash('success', 'New Vaccine Added Successfully!');

        return redirect('/daftarvaksin');
    }
}
