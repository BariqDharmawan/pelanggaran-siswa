@extends('layouts.app')

@section('title-page', 'Jenis Pelanggaran')

@section('content')

@if (auth()->user()->role == 'admin')
<a href="{{ route('sekolah.jenis-pelanggaran.create') }}" class="btn btn-blue col-sm-12 col-lg-3" style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Jenis Pelanggaran
</a>
@endif

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Jenis Pelanggaran</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jenis Pelanggaran</th>
                        <th>Poin</th>
                        @if (auth()->user()->role == 'admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenisPelanggaran as $data)
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['jenis_pelanggaran'] }}</td>
                        <td>{{ $data['poin'] }}</td>

                        @if (auth()->user()->role == 'admin')
                        <td>
                            <a href='{{ route('sekolah.jenis-pelanggaran.edit', $data->id) }}' class='btn btn-sm btn-blue'
                                style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <form action="{{ route('sekolah.jenis-pelanggaran.destroy', $data->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class='btn btn-sm btn-danger'
                                    style='margin: 5px'>
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
