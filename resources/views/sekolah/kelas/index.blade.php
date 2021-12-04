@extends('layouts.app')

@section('title-page', 'Data Kelas')

@section('content')

@if (auth()->user()->role == 'admin')
<a href="{{ route('sekolah.kelas.create') }}" class="btn btn-blue col-sm-12 col-lg-3" style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Data Kelas
</a>
@endif

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Kelas</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        @if (auth()->user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $data)
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['nama_kelas'] }}</td>
                        <td>{{ $data['nama_jurusan'] }}</td>

                        @if (auth()->user()->role == 'admin')
                        <td>
                            <a href='{{ route('sekolah.kelas.edit', $data['id']) }}' class='btn btn-sm btn-blue' style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <a href='{{ route('sekolah.kelas.destroy', $data['id']) }}' class='btn btn-sm btn-danger'
                            style='margin: 5px'>
                                <span class='ion-trash-a' aria-hidden='true'></span>
                            </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
