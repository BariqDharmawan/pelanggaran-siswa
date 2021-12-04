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
                    <input type="number" class="form-control" name="NIS" tabindex="1" value="{{ $siswa->NIS }}" required>
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" tabindex="1"
                    value="{{ $siswa->nama_siswa }}" required>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="nama_kelas" class="form-control" required>
                        @forelse ($listKelas as $kelas)
                        <option @if($kelas->nama_kelas == $siswa->nama_kelas) selected @endif>
                            {{ $kelas->nama_kelas }}
                        </option>
                        @empty
                        <option disabled selected>Tidak ada kelas</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="nama_jurusan" class="form-control" required>
                        @forelse ($listJurusan as $jurusan)
                        <option @if($kelas->nama_jurusan == $siswa->nama_jurusan) selected @endif>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                        @empty
                        <option disabled selected>Tidak ada jurusan</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>
                            Perempuan
                        </option>
                        <option value="Laki-laki" @if($siswa->jenis_kelamin == 'Laki-laki') selected @endif>
                            Laki-laki
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" tabindex="1" required>{{ $siswa->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="tel" class="form-control" name="no_telepon"
                    value="{{ $siswa->no_telepon }}" tabindex="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <label>ID Akun</label>
                    <input type="text" class="form-control" name="id_akun"
                    value="{{ $siswa->id_akun }}" tabindex="1" disabled required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username"
                    value="{{ $username }}" tabindex="1" disabled required>
                </div>
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
