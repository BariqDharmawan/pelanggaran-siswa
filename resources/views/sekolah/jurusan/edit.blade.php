@extends('layouts.app')

@section('title-page', 'Tambah Data Jurusan')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('sekolah.jurusan.update', $jurusan->id) }}">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"
                    tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ $jurusan->keterangan }}"
                    tabindex="1" required>
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
</div>
@endsection
