@extends('layouts.app')

@section('title-page', 'Data Siswa')

@section('content')
@if (auth()->user()->role == 'admin')
<a href="{{ route('siswa.create') }}" class="btn btn-blue col-sm-12 col-lg-3" style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Data Siswa
</a>
@endif

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Siswa</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Total Poin</th>
                        @if (auth()->user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data['NIS'] }}</td>
                        <td>{{ $data['nama_siswa'] }}</td>
                        <td>{{ $data['nama_kelas'] }}</td>
                        <td>{{ $data['nama_jurusan'] }}</td>
                        <td>{{ $data['total_poin'] }}</td>
                        @if (auth()->user()->role == 'admin')
                        <td>
                            <a href='{{ route('siswa.edit', $data->NIS) }}' class='btn btn-sm btn-blue' style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <form action="{{ route('siswa.destroy', $data->NIS) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class='btn btn-sm btn-danger'style='margin: 5px'>
                                    <span class='ion-trash-a' aria-hidden='true'></span>
                                </button>
                            </form>
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
