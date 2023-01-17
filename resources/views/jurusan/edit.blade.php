@extends('main.layout')
@section('content')
<center>
    <h1>EDIT DATA JURUSAN</h1>
    <from action="/jurusan/update/{{ $jurusan->id }}" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">JURUSAN</td>
                <td widht="25%"><input type="text" name="nama_jurusan" value="{{ $nama_jurusan}}"></td>
            </tr> 
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="Submit">Ubah</button></center>
</td>
</tr>
</table>
</form>
</center>
@endsection 
  