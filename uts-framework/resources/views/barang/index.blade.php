@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h2>{{ $pageTitle }}</h2>

        <div class="card">
            <div class="card-header">
                <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Satuan Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->harga_barang }}</td>
                                    <td>{{ $barang->deskripsi_barang }}</td>
                                    <td>{{ $barang->satuan->nama_satuan }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('barang.show', ['barang' => $barang->id]) }}"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-person-lines-fill"></i></a>
                                            <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-pencil-square"></i></a>

                                            <div>
                                                <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"
                                                        onclick="return confirm('Apakah anda yakin mengahpus data ini?')"><i
                                                            class="bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
