@extends ('layout.halutama')
@section('content')
    <h5 class="  text-success fs-4 ms-1 fw-bold">FORM TAMBAH MAHASISWA</h5>

    <div class="container">
        <form action="/mahasiswa/tambah" method="POST">
            
            @csrf
            {{-- generated --}}
            {{-- <input type="hidden" name="_token" value={{ csrf_token() }}> --}}
            {{-- Nama --}}
            <div class="mb-2 row ">
                <label for="name" class=" col-sm-2 form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Masukkan nama mahasiswa ..." name="nama" {{--  required (untuk validasi ganda) --}}
                        value="{{ old('name') }}">
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
                        placeholder="Masukkan Nomor Induk Mahasiswa ..." name="No_induk" {{--  required (untuk validasi ganda) --}}
                        value="{{ old('No_induk') }}">
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
                        placeholder="Masukkan Nilai Mahasiswa ..." name="nilai" {{--  required (untuk validasi ganda) --}}
                        value="{{ old('nilai') }}">
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
                        name="alamat"> {{--  required (untuk validasi ganda) --}}
                </textarea>
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
                        <option disabled selected>Pilih Jenis Kelamin </option>
                        <option value='0'>Perempuan </option>
                        <option value='1'>Laki-laki </option>
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
                        placeholder="Masukkan Usia Mahasiswa ..." name="usia">
                    @error('usia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="d-grid mt-2 col-sm-7">
                <x-button type="submit" text="Tambah" color="outline-primary" />
            </div>
    </div>
@endsection
