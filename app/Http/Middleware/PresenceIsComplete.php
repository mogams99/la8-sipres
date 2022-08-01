<?php

namespace App\Http\Middleware;

use App\Models\Presence;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresenceIsComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        // Fungsi dari middleware dibawah agar supaya user tidak bisa melakukan presensi masuk apabila user sudah mengisi sebelumnya,
        // dan user juga tidak melakukan presensi keluar apabila user tidak belum mengisi presensi masuk.
        if ($request->get('BtnIn') == 'in' && !empty(Presence::where('users_id', Auth::user()->id)->where('date', date('Y-m-d'))->first())) {
            return redirect()->back()->with('danger', 'Anda sudah mengisi prensensi masuk!');
        } elseif ($request->get('BtnOut') == 'out' && empty(Presence::where('users_id', Auth::user()->id)->where('date', date('Y-m-d'))->first())) {
            return redirect()->back()->with('danger', 'Anda harus mengisi presensi masuk terlebih dahulu!');
        } elseif ($request->get('BtnOut') == 'out' && !empty(Presence::where('users_id', Auth::user()->id)->where('date', date('Y-m-d'))->where('time_out', '!=', null)->first())) {
            return redirect()->back()->with('danger', 'Anda sudah mengisi prensensi keluar!');
        }

        return $next($request);
    }
}
