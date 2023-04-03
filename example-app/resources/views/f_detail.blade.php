@extends ('layout.halutama')
@section('content')
    <h3 class="text-primary">Detail Mahasiswa : {{ $id }}</h3>
    <x-button-link url="/mahasiswa/edit/{{ $id }}" text="Edit" btnColor="warning" textColor="black" />
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
    </button>


    <div class=" mt-2 card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Nama : {{ $data['nama'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">No Induk : {{ $data['No_induk'] }}</li>
                <li class="list-group-item">Nilai : {{ $data['nilai'] }}</li>
                <li class="list-group-item">Gender : {{ $data['gender'] === 1 ? 'Perempuan' : 'Laki-laki' }}</li>
                <li class="list-group-item">Alamat : {{ $data['alamat'] }}</li>
                <li class="list-group-item">Usia : {{ $data['usia'] }}</li>
            </ul>
        </div>
    </div>
    <div class="mt-2 card-footer">
        <x-button-link url="/datamhs" btnColor="primary" text="Kembali" />
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
                    Apakah Anda Yakin Ingin Menghapus Data ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                    <form action="/mahasiswa/delete/{{ $id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
