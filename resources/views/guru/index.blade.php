@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>List Data Guru</h2>
        <a href="/guru/create" class="button-primary"> Tambah Data </a>
        <table cellPadding="10">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach ($guru as $g)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $g->nip }}</td>
            <td>{{ $g->nama_guru }}</td>
            <td>{{ $g->jk == 'L' ? 'Laki Laki' : 'Prempuan' }}</td>
            <td>{{ $g->alamat }}</td>
            <td>{{ $g->password }}</td>
            <td>
                <a href="guru/edit/{{ $g->id }}" class="button-warning">Edit</a>
                <a href="/guru/destroy/{{ $g->id }}" class="button-danger" onclick="return confirm ('yakin hapus?')">Hapus</a>
            </td>
</tr>
@endforeach
</table>
</b>
</center>

@endsection



