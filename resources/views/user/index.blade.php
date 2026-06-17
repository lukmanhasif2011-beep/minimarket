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
                <h4 class="mb-1">Data user</h4>
                <small class="text-muted">
                    Daftar data penduduk
                </small>
            </div>

            <a href="{{ route('user.create') }}" class="btn btn-primary">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>password</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </a>

                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
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
