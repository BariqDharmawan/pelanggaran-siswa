@extends('layouts.app')

@section('title-page', 'Tambah pelanggaran siswa')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('sekolah.pelanggaran-siswa.store') }}">
                @csrf
                <div class="form-group">
                    <label>NIS</label>
                    <select name="nis" class="form-control" required>
                        @foreach ($siswa as $data)
                        <option value="{{ $data['NIS'] }}">{{ $data['NIS'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <select name="nama_siswa" class="form-control" required>
                        @foreach ($siswa as $data)
                        <option value="{{ $data['nama_siswa'] }}">{{ $data['nama_siswa'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pelanggaran</label>
                    <select name="jenis_pelanggaran" class="form-control" required>
                        @foreach ($jenisPelanggaran as $data)
                        <option value="{{ $data['jenis_pelanggaran'] }}">{{ $data['jenis_pelanggaran'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Poin</label>
                    <input type="number" class="form-control" name="poin" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" tabindex="1" required></textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" tabindex="1" required>
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
