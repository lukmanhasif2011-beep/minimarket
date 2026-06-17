
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-pencil-square"></i>
                Edit Produk
            </h4>
            <small class="text-muted">
                Ubah data produk di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama
                    </label>

                    <input
                        type="text"
                        name="nama_produk"
                        class="form-control @error('nama_produk') is-invalid @enderror"
                        value="{{ old('nama_produk', $produk->nama_produk) }}"
                        placeholder="Masukkan nama produk">

                    @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Merk
                    </label>

                    <input
                        type="text"
                        name="merk"
                        class="form-control @error('merk') is-invalid @enderror"
                        value="{{ old('merk', $produk->merk) }}"
                        placeholder="Masukkan merk">

                    @error('merk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Jumlah
                    </label>

                    <input
                        type="text"
                        name="jumlah"
                        class="form-control @error('jumlah') is-invalid @enderror"
                        value="{{ old('jumlah', $produk->jumlah) }}"
                        placeholder="Masukkan jumlah">

                    @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">
                    <i class="bi bi-check-circle"></i>
                    Update
                </button>

                <a href="{{ route('produk.index') }}"
                   class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
