
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-pencil-square"></i>
                Edit Obat
            </h4>
            <small class="text-muted">
                Ubah data obat di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('obat.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama Obat
                    </label>

                    <input
                        type="text"
                        name="nama_obat"
                        class="form-control @error('nama_obat') is-invalid @enderror"
                        value="{{ old('nama_obat', $produk->nama_obat) }}"
                        placeholder="Masukkan nama obat">

                    @error('nama_obat')
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
                        Supplayer
                    </label>

                    <input
                        type="text"
                        name="supplayer"
                        class="form-control @error('supplayer') is-invalid @enderror"
                        value="{{ old('supplayer', $produk->supplayer) }}"
                        placeholder="Masukkan supplayer">

                    @error('supplayer')
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

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Tanggal Exp
                    </label>

                    <input
                        type="date"
                        name="tanggal_exp"
                        class="form-control @error('tanggal_exp') is-invalid @enderror"
                        value="{{ old('tanggal_exp', $produk->tanggal_exp) }}"
                        placeholder="Masukkan tanggal expired">

                    @error('tanggal_exp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">
                    <i class="bi bi-check-circle"></i>
                    Update
                </button>

                <a href="{{ route('obat.index') }}"
                   class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
