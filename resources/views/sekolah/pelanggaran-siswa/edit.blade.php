@extends('layouts.app')

@section('title-page', 'Tambah Akun Pengguna')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('sekolah.pelanggaran-siswa.update', $pelanggaranSiswa->id) }}">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>NIS</label>
                    <select name="nis" class="form-control" required>
                        @foreach ($siswa as $data)
                        <option value="{{ $data['NIS'] }}" @if ($data['NIS'] == $pelanggaranSiswa->NIS) selected @endif>
                            {{ $data['NIS'] }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <select name="nama_siswa" class="form-control" required>
                        @foreach ($siswa as $data)
                        <option value="{{ $data['nama_siswa'] }}" @if ($data['nama_siswa'] == $pelanggaranSiswa->nama_siswa) selected @endif>
                            {{ $data['nama_siswa'] }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pelanggaran</label>
                    <select name="jenis_pelanggaran" class="form-control" required>
                        @foreach ($jenisPelanggaran as $data)
                        <option value="{{ $data['jenis_pelanggaran'] }}" @if ($data['jenis_pelanggaran'] == $pelanggaranSiswa->jenis_pelanggaran) selected @endif>
                            {{ $data['jenis_pelanggaran'] }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Poin</label>
                    <input type="number" class="form-control" value="{{ $pelanggaranSiswa->poin }}" name="poin" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan"
                    tabindex="1" required>{{ $pelanggaranSiswa->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="{{ $pelanggaranSiswa->tanggal->format('Y-m-d') }}" tabindex="1" required>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue" tabindex="1">
                        <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
