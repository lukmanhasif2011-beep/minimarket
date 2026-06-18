
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-person-plus"></i>
                Tambah Obat
            </h4>
            <small class="text-muted">
                Silakan isi data obat di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('obat.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama Obat
                    </label>

                    <input
                        type="text"
                        name="nama_obat"
                        class="form-control @error('nama_obat') is-invalid @enderror"
                        value="{{ old('nama_obat') }}"
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
                        Supplayer
                    </label>

                    <input
                        type="text"
                        name="supplayer"
                        class="form-control @error('supplayer') is-invalid @enderror"
                        value="{{ old('supplayer') }}"
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
                        type="int"
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

                 <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Tanggal Exp
                    </label>

                    <input
                        type="date"
                        name="tanggal_exp"
                        class="form-control @error('tanggal_exp') is-invalid @enderror"
                        value="{{ old('tanggal_exp') }}"
                        placeholder="Masukkan tanggal expired">

                    @error('tanggal_exp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Simpan
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
