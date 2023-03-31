@extends ('layout.halutama')
@section('content')
    <h5 class="  text-primary fs-4 ms-1 fw-bold">FORM EDIT DATA MAHASISWA</h5>

    <div class="container">
        <form action="/mahasiswa/edit/{{ $data['id'] }}" method="POST">
            @csrf
            @method('PUT')
            {{-- generated --}}
            {{-- <input type="hidden" name="_token" value={{ csrf_token() }}> --}}
            {{-- Nama --}}
            <div class="mb-2 row ">
                <label for="name" class=" col-sm-2 form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Masukkan nama mahasiswa ..." name="nama" value="{{ old('name', $data['nama']) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- No Induk --}}
            <div class="mb-2 row ">
                <label for="No_induk" class=" col-sm-2 form-label">No Induk</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('No_induk') is-invalid @enderror" id="No_induk"
                        placeholder="Masukkan Nomor Induk Mahasiswa ..." name="No_induk" 
                        value="{{ old('No_induk', $data['No_induk']) }}" readonly>
                    @error('No_induk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Nilai --}}
            <div class="mb-2 row ">
                <label for="nilai" class=" col-sm-2 form-label">Nilai</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('nilai') is-invalid @enderror" id="nilai"
                        placeholder="Masukkan Nilai Mahasiswa ..." name="nilai"
                        value="{{ old('nilai', $data['nilai']) }}">
                    @error('nilai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Alamat --}}
            <div class="mb-2 row ">
                <label for="alamat" class=" col-sm-2 form-label">Alamat</label>
                <div class="col-sm-5">
                    <textarea class=" form-control" id="alamat" rows="3" placeholder="Masukkan Alamat Mahasiswa ..." 
                    name="alamat"> {{ old('alamat', $data['alamat']) }} </textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Gender --}}
            <div class="mb-2 row ">
                <label for="gender" class=" col-sm-2 form-label">Jenis kelamin</label>
                <div class="col-sm-5">
                    <select class=" form-select @error('gender') is-invalid @enderror" name="gender">
                        {{--  required (untuk validasi ganda) --}}
                        <option value="{{ $data['gender'] }}" disabled selected>
                            {{ $data['gender'] === 0 ? 'Perempuan' : 'Laki-laki' }}
                        </option>
                        <option value="0">Perempuan </option>
                        <option value="1">Laki-laki </option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- Usia --}}
            <div class="mb-2 row">
                <label for="usia" class=" col-sm-2 form-label"> Usia</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('usia') is-invalid @enderror" id="usia"
                        placeholder="Masukkan Usia Mahasiswa ..." name="usia" value="{{ old('usia', $data['usia']) }}">
                    @error('usia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="d-grid mt-2 col-sm-7">
                <x-button  type="submit" text="Edit" color="outline-primary" />
            </div>
    </div>
@endsection
