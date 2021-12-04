@extends('layouts.app')

@section('title-page', 'Manajemen Akun')

@section('content')
<a href="{{ route('sekolah.akun.create') }}" class="btn btn-blue col-sm-12 col-lg-3" style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Akun Pengguna
</a>

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Akun Pengguna</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akun as $data)
                    <tr>
                        <td>{{ $data['id_akun'] }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['username'] }}</td>
                        <td>{{ $data['role'] }}</td>
                        <td>
                            <a href='{{ route('sekolah.akun.edit', $data['id_akun']) }}' class='btn btn-sm btn-blue' style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <a href='{{ route('sekolah.akun.destroy', $data['id_akun']) }}' class='btn btn-sm btn-danger'
                                style='margin: 5px'>
                                <span class='ion-trash-a' aria-hidden='true'></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
