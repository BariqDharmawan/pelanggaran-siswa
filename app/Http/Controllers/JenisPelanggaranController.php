<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggaran;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class JenisPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisPelanggaran = JenisPelanggaran::all();
        return view('sekolah.jenis-pelanggaran.jenis', compact('jenisPelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.jenis-pelanggaran.add');
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

        return redirect()->route('sekolah.jenis-pelanggaran.index')->with('success', "Berhasil menambah jenis pelanggaran");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPelanggaran $jenisPelanggaran)
    {
        return view('sekolah.jenis-pelanggaran.edit', compact('jenisPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $jenisPelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPelanggaran $jenisPelanggaran)
    {
        $jenisPelanggaran->update($request->except('_token'));

        return redirect()->route('sekolah.jenis-pelanggaran.index')->with('success', "Berhasil mengedit jenis pelanggaran");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggaran  $jenisPelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPelanggaran $jenisPelanggaran)
    {
        $jenisPelanggaran->delete();

        return redirect()->route('sekolah.jenis-pelanggaran.index')->with('success', "Berhasil menghapus jenis pelanggaran");
    }
}
