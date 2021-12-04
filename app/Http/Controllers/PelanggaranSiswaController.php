<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggaran;
use App\Models\PelanggaranSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PelanggaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sekolah.pelanggaran-siswa.index', ['pelanggaranSiswa' => PelanggaranSiswa::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisPelanggaran = JenisPelanggaran::all();
        $siswa = Siswa::select('NIS', 'nama_siswa')->get();

        return view('sekolah.pelanggaran-siswa.add', compact('jenisPelanggaran', 'siswa'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PelanggaranSiswa::create($request->except('_token'));
        $siswa = Siswa::find($request->nis);
        $totalPoinLama = $siswa->total_poin;

        $siswa->update(['total_poin' => $totalPoinLama + $request->poin]);

        return redirect()->route('sekolah.pelanggaran-siswa.index')->with(
            'success', 'berhasil menambah pelanggaran siswa'
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PelanggaranSiswa  $pelanggaranSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PelanggaranSiswa $pelanggaranSiswa)
    {
        $jenisPelanggaran = JenisPelanggaran::all();
        $siswa = Siswa::select('NIS', 'nama_siswa')->get();

        return view('sekolah.pelanggaran-siswa.edit', compact('pelanggaranSiswa', 'jenisPelanggaran', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PelanggaranSiswa  $pelanggaranSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PelanggaranSiswa $pelanggaranSiswa)
    {
        $pelanggaranSiswa->update($request->except('_token'));

        return redirect()->route('sekolah.pelanggaran-siswa.index')->with(
            'success', 'berhasil mengubah pelanggaran siswa'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PelanggaranSiswa  $pelanggaranSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(PelanggaranSiswa $pelanggaranSiswa)
    {
        $pelanggaranSiswa->delete();

        return redirect()->route('sekolah.pelanggaran-siswa.index')->with(
            'success', 'berhasil menghapus pelanggaran siswa'
        );
    }
}
