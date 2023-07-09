@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tipe Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Tipe Mobil</li>
            </ol>
            <a href="/tipe_mobil/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipeMobilData as $tipe)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tipe->tipe }}</td>
                                    <td>
                                        <a href="/tipe_mobil/edit/{{ $tipe->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/tipe_mobil/delete/{{ $tipe->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
