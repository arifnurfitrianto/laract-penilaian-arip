@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Data Mata Pelajaran</h2>
            <a href="/mapel/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Action</th>
                </tr>
                @foreach ($mapel as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->nama_mapel }}</td>
                <td>
                    <a href="/mapel/edit/{{ $j->id }}" class="button-warning">Edit</a>
                    <a href="/mapel/destroy/{{ $j->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">Hapus</a>
                </td>
        </tr>
    </table>
    </b>
</center>
@endsection