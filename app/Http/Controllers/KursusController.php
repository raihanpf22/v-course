<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kursus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'kursus_nama' => "required",
            'kursus_keterangan' => "required",
            'kursus_durasi' => "required"
        ]);
        $kursus = new Kursus;
        $kursus->kursus_nama = $request ->input('kursus_nama');
        $kursus->kursus_keterangan = $request->input('kursus_keterangan');;
        $kursus->kursus_durasi = $request->input('kursus_durasi');

        $kursus -> save();
        return redirect() ->intended('dashboard');
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
        $kursus = Kursus::find($id);
        return view('kursus.edit', compact('kursus'));
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
        $kursus = Kursus::find($id);

        $kursus ->kursus_nama = $request->input('kursus_nama');
        $kursus ->kursus_keterangan = $request->input('kursus_keterangan');
        $kursus ->kursus_durasi = $request->input('kursus_durasi');
        $kursus ->update();
        return redirect() ->intended('dashboard');
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
        $kursus = Kursus::find($id);
        $kursus ->delete();
        return redirect() ->intended('dashboard');
    }
}
