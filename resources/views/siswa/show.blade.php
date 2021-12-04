@extends('layouts.app')

@section('title-page', 'Data Siswa')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('siswa.update', $siswa->NIS) }}">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>NIS</label>
                    <input type="number" class="form-control" name="NIS" tabindex="1" value="{{ $siswa->NIS }}" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" tabindex="1"
                    value="{{ $siswa->nama_siswa }}" readonly>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" tabindex="1"
                    value="{{ $siswa->nama_kelas }}" readonly>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" tabindex="1"
                    value="{{ $siswa->nama_jurusan }}" readonly>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" tabindex="1"
                    value="{{ $siswa->jenis_kelamin }}" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" tabindex="1" readonly>{{ $siswa->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="tel" class="form-control" name="no_telepon"
                    value="{{ $siswa->no_telepon }}" tabindex="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-blue" tabindex="1">
                        <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
