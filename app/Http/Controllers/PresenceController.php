<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePresenceRequest;
use App\Models\Presence;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $presences = Presence::get();
            
            foreach ($presences as $key => $presence) {
                $presences[$key]['users'] = $presence->users;
            }
            
            return DataTables::of($presences)
            ->addIndexColumn()
            ->toJson();
        }

        return view('presences.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('presences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePresenceRequest $request)
    {
        // Mengambil hasil validasi dari StorePresenceRequest
        $data = $request->validated();

        // Melakukan proses add atau create
        Presence::create($data);

        // Melakukan redirect ke dashboard, dan memberikan pesan berhasil
        return redirect()->back()->with('success', 'Presensi berhasil di isi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
