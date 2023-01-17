@extends('main.layout')
@section('content')
<center>
    <h1>TAMBAH DATA JURUSAN</h1>
    <form method="post" action="/jurusan/store">
        @csrf
        <table width="50%">
            <tr>
            <td width="25%">Jurusan</td>
                    <td width="25%"><input type="text" name="jurusan"></td>
            </tr>   
            <tr>    
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center></td>
                </tr>
        </table>
    </form>
</center>
@endsection