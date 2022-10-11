@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col col-md-6">
        <a class="btn btn-outline-secondary" href="{{ route('list-user.index') }}" />
        <i class="fa-regular fa-chevron-left me-2"></i>
        Kembali
        </a>

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('list-user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{old ('nim',$user->nim)}}" autofocus required>

                        @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old ('nama',$user->nama)}}" required>

                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="asalkampus" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control @error('asalkampus') is-invalid @enderror" name="asalkampus" id="asalkampus" value="{{old ('asalkampus',$user->asalkampus)}}" required>

                        @error('asalkampus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role">
                            <option value="0">Mahasiswa</option>
                            <option value="1">Guru</option>
                            <option value="2">Operator</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
