
@extends('templet.master')

@section('conten')

<div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-1">
                <i class="bi bi-person-plus"></i>
                Tambah Biodata
            </h4>
            <small class="text-muted">
                Silakan isi data biodata di bawah ini
            </small>
        </div>

        <div class="card-body">

            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        placeholder="Masukkan name">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                        >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

               <div class="mb-3">
                    <label class="form-label fw-semibold">
                        password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        value="{{ old('password') }}"
                        placeholder="Masukkan password">

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Simpan
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
