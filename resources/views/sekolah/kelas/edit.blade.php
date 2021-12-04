@extends('layouts.app')

@section('title-page', 'Tambah Data Kelas')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('sekolah.kelas.update', $kelas->id) }}">
                @csrf @method('PUT')
                <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control" name="nama_kelas" value="{{ $kelas->nama_kelas }}"
                  tabindex="1" required>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <select name="nama_jurusan" class="form-control">
                    @forelse ($listJurusan as $jurusan)
                        <option @if ($jurusan->nama_jurusan == $kelas->nama_jurusan) @endif>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                    @empty
                        <option disabled selected>Tidak ada jurusan</option>
                    @endforelse
                </select>
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
