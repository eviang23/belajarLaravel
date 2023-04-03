@extends ('layout.halutama')
@section('content')
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('deleted'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('deleted') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h3 class="text-info"> Selamat Datang, {{ auth()->user()->name }} ! </h3>
    <div class="form-text">
        <x-button-link text="TAMBAH DATA TUTOR" color="outline-primary" url="/tutor/tambah" />
    </div>

    <h3 class="text-center text-primary">Data Tutor UT Yogyakarta</h3>
    <table class="mt-2 table table-bordered table table-striped">
        <thead class="table-info ">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tutor</th>
                <th scope="col">Id Tutor</th>
                <th scope="col">Mata Kuliah</th>
                {{-- <th scope="col">Usia</th>
                <th scope="col">Gender</th> --}}
                <th scope="col">Email</th>
                <th scope="col">Bidang Keahlian</th>
                <th scope="col">Periode Mengajar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dt_tutor as $item)
                <tr>
                    <th scope="row">{{$loop->iteration + $dt_tutor->firstItem() - 1}}</th>
                    <td>{{ $item['nama_tutor'] }}</td>
                    <td>{{ $item['id_tutor'] }}</td>

                    <td><a href="/mata-kuliah/detail/ {{ $item->mataKuliah->id }}"
                        class="text-decoration-none">{{ $item->mataKuliah->nama_matakul }}</a></td> {{-- mataKuliah =nama functian di modelnya Tutor.php, nama_matakul = field di tabel Matakuliah --}}
                    {{-- <td>{{ $item['usia'] }}</td>
                    <td>{{ $item['gender'] }}</td> --}}
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['bidang_keahlian'] }}</td>
                    <td>{{ $item['periode_mengajar'] }}</td>
                    <td>
                        <x-button-link text="Detail " url="/tutor/detail/{{ $item['id'] }}" btnColor="info" />
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    {{-- pagination --}}
    {{ $dt_tutor->Links() }}
@endsection
