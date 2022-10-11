@extends('layout.main')

@section('container')
<div class="row justify-content-center mt-5 mb-1">
    <div class="col">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
    <div class="row justify-content-center mt-1 mb-5 ">
        <div class="col col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('profile') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim"
                                id="nim" value="{{ auth()->user()->nim }}" autofocus required disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                id="nama" value="{{ auth()->user()->nama }}" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="asalkampus" class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control @error('asalkampus') is-invalid @enderror"
                                name="asalkampus" id="asalkampus" value="{{ auth()->user()->asalkampus }}" required>
                            @error('asalkampus')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Status</label>
                            @php
                            if ( auth()->user()->role == 0) {
                                $role = 'Mahasiswa';
                            } elseif ( auth()->user()->role == 1) {
                                $role = 'Guru';
                            } elseif ( auth()->user()->role == 2) {
                                $role = 'Operator';
                            }
                            @endphp
                            <input type="text" class="form-control"
                                name="role" id="role" value="{{ $role }}" required disabled>
                        </div>

                        <div class="text-end">
                            <a type="submit" href="/beranda" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/show-hide-password.js') }}"></script>
@endsection