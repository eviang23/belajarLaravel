@extends ('layout.halutama')
@section('content')
    <h3 class="text-primary">Detail Tutor : {{ $id }}</h3>
    <x-button-link url="/tutor/edit/{{ $id }}" text="Edit" btnColor="warning" textColor="black" />
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
    </button>

    {{--    {{ $data['nama']}}   --}}
    {{-- @dd($datator) --}}
    <div class=" mt-2 card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Nama Tutor : {{ $datator['nama_tutor'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id Tutor : {{ $datator['id_tutor'] }}</li>
                <li class="list-group-item">Gender : {{ $datator['gender'] === 1 ? 'Perempuan' : 'Laki-laki' }}</li>
                <li class="list-group-item">Usia : {{ $datator['usia'] }}</li>
                <li class="list-group-item">Email : {{ $datator['email'] }}</li>
                <li class="list-group-item">Bidang Keahlian : {{ $datator['bidang_keahlian'] }}</li>
                <li class="list-group-item">Periode Mengajar : {{ $datator['periode_mengajar'] }}</li>

                <li class="list-group-item">Matakuliah :
                    @foreach ($datator->mataKuliahs as $data)
                        <x-button-link btnColor="warning" textColor="black" url="/mata-kuliah/detail/{{ $data->id }}"
                            text="{{ $data->nama_matakul }}" />
                    @endforeach

                </li>

            </ul>
        </div>
    </div>
    <div class="mt-2 card-footer">
        <x-button-link url="/dataTtr" btnColor="primary" text="Kembali" />
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data Tutor?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                    <form action="/tutor/delete/{{ $id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
