<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pulangCepat = Presence::where('status', 'Pulang Cepat')->count();
        $Terlambat = Presence::where('status', 'Terlambat')->count();
        $masukPagi = Presence::where('status', 'Masuk Pagi')->count();
        $Lembur = Presence::where('status', 'Lembur')->count();

        return view('welcome', [
            'pL' => $pulangCepat,
            'T' => $Terlambat,
            'mP' => $masukPagi,
            'L' => $Lembur,
        ]);
    }
}
