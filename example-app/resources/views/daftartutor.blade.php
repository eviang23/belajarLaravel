@extends ('layout.halutama')
@section('content')
    <h3 class="text-center text-primary">Data Tutor UT Yogyakarta</h3>


    <table class="table table-bordered table table-striped">
        <thead class="table-info ">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tutor</th>
                <th scope="col">Bidang Keahlian</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dt_tutor as $item)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $item['nama_tutor'] }}</td>
                    <td>{{ $item['bidang_keahlian'] }}</td>
                    <td>
                        <x-button-link text="Detail " url="/tutor/{{ $item['id'] }}" btnColor="info" />
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
