
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-pencil-square"></i>
                Edit Biodata
            </h4>
            <small class="text-muted">
                Ubah data biodata di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('biodata.update', $biodata->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $biodata->nama) }}"
                        placeholder="Masukkan nama">

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Umur
                    </label>

                    <input
                        type="number"
                        name="umur"
                        class="form-control @error('umur') is-invalid @enderror"
                        value="{{ old('umur', $biodata->umur) }}"
                        placeholder="Masukkan umur">

                    @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Alamat
                    </label>

                    <textarea
                        name="alamat"
                        rows="4"
                        class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan alamat">{{ old('alamat', $biodata->alamat) }}</textarea>

                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">
                    <i class="bi bi-check-circle"></i>
                    Update
                </button>

                <a href="{{ route('biodata.index') }}"
                   class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
