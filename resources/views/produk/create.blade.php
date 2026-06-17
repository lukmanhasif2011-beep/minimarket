
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-person-plus"></i>
                Tambah produk
            </h4>
            <small class="text-muted">
                Silakan isi data produk di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('produk.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama
                    </label>

                    <input
                        type="text"
                        name="nama_produk"
                        class="form-control @error('nama_produk') is-invalid @enderror"
                        value="{{ old('nama_produk') }}"
                        placeholder="Masukkan nama produk">

                    @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        merk
                    </label>

                    <input
                        type="text"
                        name="merk"
                        class="form-control @error('merk') is-invalid @enderror"
                        value="{{ old('merk') }}"
                        placeholder="Masukkan merk">

                    @error('merk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

               <div class="mb-3">
                    <label class="form-label fw-semibold">
                        jumlah
                    </label>

                    <input
                        type="integer"
                        name="jumlah"
                        class="form-control @error('jumlah') is-invalid @enderror"
                        value="{{ old('jumlah') }}"
                        placeholder="Masukkan jumlah">

                    @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Simpan
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
