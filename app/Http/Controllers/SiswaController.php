<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\PelanggaranSiswa;
use App\Models\Sanksi;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanksi = Sanksi::all();
        $topSiswa = Siswa::orderBy('total_poin', 'desc')->take(5)->get();
        $profile = Siswa::where('nama_siswa', auth()->user()->nama)->first();

        $totalPelanggaran = PelanggaranSiswa::where('NIS', $profile->NIS)->count();

        return view('siswa.index', compact('sanksi', 'topSiswa', 'profile', 'totalPelanggaran'));
    }

    public function manage()
    {
        $siswas = Siswa::all();
        return view('siswa.manage', compact('siswas'));
    }

    public function show(Siswa $siswa)
    {
        $username = User::where('nama', $siswa->nama_siswa)->first()->username;
        $profile = Siswa::where('nama_siswa', auth()->user()->nama)->first();

        return view('siswa.show', compact('siswa', 'username', 'profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listKelas = Kelas::select('nama_kelas')->get();
        $listJurusan = Jurusan::select('nama_jurusan')->get();
        return view('siswa.add', compact('listKelas', 'listJurusan'));
    }

    public function pelanggaran()
    {
        $profile = Siswa::where('nama_siswa', auth()->user()->nama)->first();
        $pelanggaran = PelanggaranSiswa::where('NIS', $profile->NIS)->orderBy('tanggal', 'desc')->get();

        return view('siswa.pelanggaran', compact('pelanggaran', 'profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'NIS' => $request->NIS,
            'nama_siswa' => $request->nama_siswa,
            'nama_kelas' => $request->nama_kelas,
            'nama_jurusan' => $request->nama_jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'id_akun' => $request->id_akun
        ]);

        User::create([
            'id_akun' => $request->id_akun,
            'nama' => $request->nama_siswa,
            'username' => $request->username,
            'password' => $request->password,
            'role' => 'siswa',
        ]);

        return redirect()->route('siswa.data')->with('success', 'Berhasil menambah siswa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        // dd($siswa);
        $listKelas = Kelas::select('nama_kelas')->get();
        $listJurusan = Jurusan::select('nama_jurusan')->get();

        $username = User::where('nama', $siswa->nama_siswa)->first()->username;

        return view('siswa.edit', compact('siswa', 'listKelas', 'listJurusan', 'username'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->NIS = $request->NIS;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nama_kelas = $request->nama_kelas;
        $siswa->nama_jurusan = $request->nama_jurusan;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->no_telepon = $request->no_telepon;

        $siswa->save();

        $prevUrl = str_replace(url('/'), '', url()->previous());
        $routeRedirect = $prevUrl == '/siswa/' . $siswa->NIS ? 'siswa.index' : 'siswa.data';


        return redirect()->route($routeRedirect)->with('success', "Berhasil mengubah data siswa $siswa->nama_siswa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.data')->with('success', "Berhasil menghapus data siswa");
    }
}
