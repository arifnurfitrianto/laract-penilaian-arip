@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Tambah Data mapel</h2>
            <from action="/mapel/store" method="post">
                @csrf
                <table width="50%">
                <tr>
                    <td width="25%">mapel</td>
                    <td widht="25%"><input type="text" name="nama_mapel"></td>
                </tr>   
                <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center>
                </td>
                </tr>
            </table>
    </form>
</center>
@endsection