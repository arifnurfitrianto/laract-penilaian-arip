@extends('main.layout')
@section('content')
<center>
    <h1>EDIT DATA mapel</h1>
    <from action="/mapel/update/{{ $mapel->id }}" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">mapel</td>
                <td widht="25%"><input type="text" name="nama_mapel" value="{{ $nama_mapel}}"></td>
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