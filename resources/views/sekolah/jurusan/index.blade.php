@extends('layouts.app')

@section('title-page', 'Data Jurusan')

@section('content')

@if (auth()->user()->role == 'admin')
<a href="{{ route('sekolah.jurusan.create') }}" class="btn btn-blue col-sm-12 col-lg-3" style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Data Jurusan
</a>
@endif

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Jurusan</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Jurusan</th>
                        <th>Keterangan</th>
                        @if (auth()->user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jurusans as $data)
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['nama_jurusan'] }}</td>
                        <td>{{ $data['keterangan'] }}</td>

                        @if (auth()->user()->role == 'admin')
                        <td>
                            <a href='{{ route('sekolah.jurusan.edit', $data['id']) }}' class='btn btn-sm btn-blue' style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <form action="{{ route('sekolah.jurusan.destroy', $data['id']) }}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class='btn btn-sm btn-danger' style='margin: 5px'>
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
