@extends ('layout.halutama')
@section('content')
    <h5 class="  text-primary fs-4 ms-1 fw-bold">FORM EDIT DATA TUTOR</h5>

    <div class="container">
        <form action="/tutor/edit/{{ $datator['id'] }}" method="POST">
            @csrf
            @method('PUT')
            {{-- generated --}}
            {{-- <input type="hidden" name="_token" value={{ csrf_token() }}> --}}
            {{-- Nama --}}
            <div class="mb-2 row ">
                <label for="nama_tutor" class=" col-sm-2 form-label">Nama Tutor</label>
                <div class="col-sm-5">
                    <input type="text" class=" form-control @error('nama_tutor') is-invalid @enderror" id="nama_tutor"
                        placeholder="Masukkan nama tutor ..." name="nama_tutor"
                        value="{{ old('nama_tutor', $datator['nama_tutor']) }}">
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
                        placeholder="Masukkan Nomor Induk Mahasiswa ..." name="id_tutor"
                        value="{{ old('id_tutor', $datator['id_tutor']) }}" readonly>
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
                        <option value="{{ $datator['gender'] }}" disabled selected>
                            {{ $datator['gender'] === 0 ? 'Perempuan' : 'Laki-laki' }}
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
                        placeholder="Masukkan Usia Mahasiswa ..." name="usia"
                        value="{{ old('usia', $datator['usia']) }}">
                    @error('usia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- EMAIL --}}
            <div class="mb-2 row ">
                <label for="email" class="form-label col-sm-2 fw-bold">Email address</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukkan email Anda ..." name="email" value="{{ old('email', $datator['email']) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>

            {{-- Bidang keahlian --}}
            {{-- <div class="mb-2 row ">
                <label for="bidang_keahlian" class=" col-sm-2 form-label">bidang_keahlian</label>
                <div class="col-sm-5">
                    <textarea class=" form-control" id="bidang_keahlian" rows="3" placeholder="Masukkan Bidang Keahlian Mahasiswa ..."
                        name="bidang_keahlian"> {{ old('bidang_keahlian', $datator['bidang_keahlian']) }} </textarea>
                    @error('bidang_keahlian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}

            {{-- Periode Mengajar --}}
            <div class="mb-2 row ">
                <label for="periode_mengajar" class=" col-sm-2 form-label">Periode Mengajar</label>
                <div class="col-sm-5">
                    <input type="number" class=" form-control @error('periode_mengajar') is-invalid @enderror" id="periode_mengajar"
                        placeholder="Masukkan Nilai Mahasiswa ..." name="periode_mengajar"
                        value="{{ old('periode_mengajar', $datator['periode_mengajar']) }}">
                    @error('periode_mengajar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


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
                <x-button type="submit" text="Edit" color="outline-primary" />
            </div>
    
        </form>
        </div>
@endsection
