@extends ('layout.halutama')
@section('content')
    <h5 class="  text-success fs-4 ms-1 fw-bold">FORM TAMBAH TUTOR</h5>

    <div class="container">
        <form action="/tutor/tambah" method="POST">

            @csrf
            {{-- generated --}}
            {{-- <input type="hidden" name="_token" value={{ csrf_token() }}> --}}
            {{-- Nama Tutor --}}
            <div class="mb-2 row ">
                <label for="nama_tutor" class=" col-sm-2 form-label">Nama Tutor</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('nama_tutor') is-invalid @enderror" id="nama_tutor"
                        placeholder="Masukkan nama Tutor ..." name="nama_tutor" {{--  required (untuk validasi ganda) --}}
                        value="{{ old('nama_tutor') }}">

                    @error('nama_tutor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- Id Tutor --}}
            <div class="mb-2 row ">
                <label for="id_tutor" class=" col-sm-2 form-label">Id Tutor</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('id_tutor') is-invalid @enderror" id="id_tutor"
                        placeholder="Masukkan Id Tutor ..." name="id_tutor" {{--  required (untuk validasi ganda) --}}
                        value="{{ old('id_tutor') }}">
                    @error('id_tutor')
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

            {{-- Email --}}
            <div class="mb-2 row ">
                <label for="email" class="form-label col-sm-2 fw-bold">Email address</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukkan email Anda ..." name="email" value="{{ old('email') }}">

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- Bidang Keahlian --}}
            {{-- <div class="mb-2 row ">
                <label for="bidang_keahlian" class=" col-sm-2 form-label">bidang keahlian</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('bidang_keahlian') is-invalid @enderror"
                        id="bidang_keahlian" placeholder="Masukkan nama Bidang Keahlian ..." name="bidang_keahlian"
                        value="{{ old('bidang_keahlian') }}">

                    @error('bidang_keahlian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}

            {{-- <div class="mb-2 row ">
                <label for="bidang_keahlian" class=" col-sm-2 form-label">Bidang Keahlian</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control" id="bidang_keahlian" @error('bidang_keahlian') is-invalid @enderror" placeholder="Masukkan Bidang Keahlian ..."
                        name="bidang_keahlian"> 

                    @error('bidang_keahlian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}

            {{-- periode Mengajar --}}
            <div class="mb-2 row">
                <label for="periode_mengajar" class=" col-sm-2 form-label"> Periode mengajar</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('periode_mengajar') is-invalid @enderror"
                        id="periode_mengajar" placeholder="Masukan periode_mengajar ..." name="periode_mengajar"
                        value="{{ old('periode_mengajar') }}">

                    @error('periode_mengajar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- <div class="mb-2 row ">
                <label for="periode_mengajar" class=" col-sm-2 form-label">Tahun Mengajar</label>
                <div class="col-sm-5">

                    <select class=" form-select @error('periode_mengajar') is-invalid @enderror" name="periode_mengajar">
                       
                        <option disabled selected>Pilih Tahun </option>
                        <option>2020 </option>
                        <option>2021 </option>
                        <option>2022 </option>
                        <option>2023 </option>
                    </select>
                    @error('periode_mengajar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}

            {{-- Matakuliah  --}}
            <div class="mb-2 row">
                <label for="matakuliah" class=" col-sm-2 form-label"> matakuliah</label>
                <div class="col-sm-5">

                    {{-- Mengirim multiple value matakuliah --}}
                    <select class="form-select @error('matakuliah') is-invalid  @enderror" 
                        name="matakuliah[]"
                        id="matakuliah" multiple >

                        {{-- Looping Data Mata Kuliah --}}
                        @foreach ($matakuliah as $item)
                            <option value="{{ $item->id }}"> {{ $item->nama_matakul }} </option> 
                       @endforeach

                    </select>

                        @error('matakuliah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        </div>
                </div>

                <div class="d-grid mt-2 col-sm-7">
                    <x-button type="submit" text="Tambah" color="outline-primary" />
                </div>

        </form>
    </div>
@endsection
