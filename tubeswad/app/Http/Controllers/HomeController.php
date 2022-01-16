<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $datadata = $data->flatten(1);
        $chart = new CovidChart;
        $chart->labels(['positif', 'sembuh', 'meninggal']);
        $chart->dataset('Data Kasus Positif di Indonesia', 'bar', ['positif', 'sembuh', 'meninggal']);
        return view('user.home', [
            'users' => User::where('id', auth()->user()->id)->get(),
            'chart' => $chart,
            'data' => $datadata
        ]);
    }

    public function chart()
    {
    }
}
