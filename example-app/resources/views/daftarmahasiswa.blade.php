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

    <h1> Selamat Datang, {{ auth()->user()->name }} ! </h1>
    <div class="form-text">
        <x-button-link text="TAMBAH MAHASISWA" color="outline-primary" url="/mahasiswa/tambah" />
    </div>

    <h3 class="text-center text-primary">Daftar Mahasiswa</h3>


    <table class="table table-bordered table table-striped">
        <thead class="table-info ">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Induk</th>
                <th scope="col">Nilai</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtmhs as $item)
                 <tr>                                                                   {{--    {{ $item->id }} --}}
                    <th scope="row">{{$loop->iteration + $dtmhs->firstItem() - 1}}</th> {{-- $loop->index + 1 , nomor di tabel akan mulai dari tiap halaman --}}
                    <td>{{ $item['nama'] }}</td> 
                    <td>{{ $item['No_induk'] }}</td>
                    <td> {{ $item['nilai'] }}</td>
                    @switch($item['nilai'])
                        @case($item['nilai'] >= 90)
                            <td>A</td>
                        @break

                        @case($item['nilai'] >= 80)
                            <td>B</td>
                        @break

                        @case($item['nilai'] >= 70)
                            <td>C</td>
                        @break

                        @case($item['nilai'] >= 60)
                            <td>D</td>
                        @break

                        @default
                            <td>E</td>
                    @endswitch
                    <td>
                        <x-button-link text="Detail" url="/detail/{{ $item['id'] }}" btnColor="info" />

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    {{-- pagination --}}
    {{ $dtmhs->Links() }}
@endsection
