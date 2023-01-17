@extends('main.layout')
@section('content')
<center>
    <h1>TAMBAH DATA GURU</h1>
    <form method="post" action="/guru/store">
        @csrf
        <table width="50%">
            <tr>
            <td width="25%">NIP</td>
                    <td widht="25%"><input type="text" name="nip"></td>
            </tr>   

            <tr>
            <td width="25%">Nama Guru</td>
                    <td widht="25%"><input type="text" name="nama_guru"></td>
            </tr>  
            
    
            <tr>
            <td width="25%">Jenis Kelamin</td>
                <td width="25%">   
                    <input type="radio" name="jk" value="L">Laki Laki 
                    <input type="radio" name="jk" value="P">Prempuan
                </td>
            </tr>

            <tr>
            <td width="25%">Alamat</td>
                    <td widht="25%"><input type="text" name="alamat"></td>
            </tr>  

            <tr>
            <td width="25%">Password</td>
             <td widht="25%"><input type="text" name="password"></td>
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

    