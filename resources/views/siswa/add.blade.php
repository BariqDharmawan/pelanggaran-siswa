@extends('layouts.app')

@section('title-page', 'Data Siswa')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('siswa.store') }}">
                @csrf
                <div class="form-group">
                    <label>NIS</label>
                    <input type="number" class="form-control" name="NIS" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="nama_kelas" class="form-control">
                        @forelse ($listKelas as $kelas)
                        <option>{{ $kelas->nama_kelas }}</option>
                        @empty
                        <option disabled selected>Tidak ada kelas</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="nama_jurusan" class="form-control">
                        @forelse ($listJurusan as $jurusan)
                        <option>{{ $jurusan->nama_jurusan }}</option>
                        @empty
                        <option disabled selected>Tidak ada jurusan</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="tel" class="form-control" name="no_telepon" tabindex="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <label>ID Akun</label>
                    <input type="text" class="form-control" name="id_akun" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" tabindex="1" required>
                </div><br>
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
