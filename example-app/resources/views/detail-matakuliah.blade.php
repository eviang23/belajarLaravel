@extends ('layout.halutama')
@section('content')
    <h4 class="text-warning"> DETAIL MATA KULIAH | {{ $data->nama_matakul }} - {{ $data->kode }} </h4>

    {{-- <ul>
        <li> {{ $data->tutor->nama_tutor }} </li>
        <li> {{ $data->tutor->email }} </li>
    </ul> --}}

    <h3 class="text-center text-primary mt-3">List Tutor</h3>
    <table class="mt-2 table table-bordered table table-striped">
        <thead class="table-info ">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tutor</th>
                {{-- <th scope="col">Id Tutor</th>
                <th scope="col">Mata Kuliah</th> --}}
                {{-- <th scope="col">Usia</th>
                <th scope="col">Gender</th> --}}
                <th scope="col">Email</th>
                {{-- <th scope="col">Bidang Keahlian</th>
                <th scope="col">Periode Mengajar</th> --}}
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data ->tutors as $item)
                <tr>
                    <th scope="row">{{ $item->id}}</th>
                    <td>{{ $item['nama_tutor'] }}</td>
                    <td>{{ $item['id_tutor'] }}</td>

                    {{-- <td><a href="/mata-kuliah/detail/ {{ $item->mataKuliah->id }}"
                            class="text-decoration-none">{{ $item->mataKuliah->nama_matakul }}</a></td>
                    {{-- mataKuliah =nama functian di modelnya Tutor.php, nama_matakul = field di tabel Matakuliah --}}
                    {{-- <td>{{ $item['usia'] }}</td>
                    <td>{{ $item['gender'] }}</td> --}}
                    {{--   <td>{{ $item['email'] }}</td>
                    <td>{{ $item['bidang_keahlian'] }}</td>
                    <td>{{ $item['periode_mengajar'] }}</td> --}}
                    <td>
                        <x-button-link text="Detail " url="/tutor/detail/{{ $item['id'] }}" btnColor="info" />
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mt-2 card-footer">
        <x-button-link url="/dataTtr" btnColor="primary" text="Kembali" />
    </div>
    
@endsection
