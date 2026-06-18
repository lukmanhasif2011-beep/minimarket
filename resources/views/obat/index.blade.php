@extends('templet.master')
@section('conten')

<div class="container content">

    <div class="card">

@if (@session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif


        <div class="card-header d-flex justify-content-between align-items-center">

            <div>
                <h4 class="mb-1">Data Produk</h4>
                <small class="text-muted">
                    Daftar data produk
                </small>
            </div>

            <a href="{{ route('obat.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                Tambah Data
            </a>

        </div>

        <div class="card-body">

            <div class="mb-3">
                <span class="badge-modern">
                    Total Data : {{ $count }}
                </span>
            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th width="80">No</th>
                            <th>Nama_obat</th>
                            <th>Merk</th>
                            <th>supplayer</th>
                            <th>Jumlah</th>
                            <th>tanggal_exp</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                            <td>{{ $item->nama_obat }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->supplayer }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->tanggal_exp }}</td>
                            <td>
                                <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </a>

                                <form action="{{ route('obat.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>

                </table>
{{ $data->links() }}
            </div>

        </div>

    </div>

</div>
@endsection
