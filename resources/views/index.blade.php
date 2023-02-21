@extends('template')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <a class="btn btn-primary" href="http://localhost:8000/buku/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
                    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
                    <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $b)
                        <tr>
                            <td>{{ $b->kodebuku }}</td>
                            <td>{{ $b->judul }}</td>
                            <td><img height="200" width="130" src="/user/img/buku/{{ $b->gambar }}"></td>
                            <td>{{ $b->pengarang }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ $b->stok }}</td>
                            <td>
                                <a class="btn btn-primary" href="/buku/edit/{{ $b->id }}" role="button"><i class="fas fa-fw fa-edit">edit</i></a>
                                |
                                <a class="btn btn-danger" href="/buku/hapus/{{ $b->id }}" role="button"><i class="fas fa-fw fa-trash">delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
