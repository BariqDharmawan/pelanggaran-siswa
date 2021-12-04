<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggaran;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisPelanggaran = JenisPelanggaran::all();
        return view('sekolah.pelanggaran.jenis', compact('jenisPelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.pelanggaran.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisPelanggaran::create($request->except('_token'));

        return redirect()->route('sekolah.pelanggaran.index')->with('success', "Berhasil menambah jenis pelanggaran");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        return view('sekolah.pelanggaran.edit', compact('pelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPelanggaran $pelanggaran)
    {
        $pelanggaran->update($request->except('_token'));

        return redirect()->route('sekolah.pelanggaran.index')->with('success', "Berhasil mengedit jenis pelanggaran");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        $pelanggaran->delete();

        return redirect()->route('siswa.data')->with('success', "Berhasil menghapus jenis pelanggaran");
    }
}
