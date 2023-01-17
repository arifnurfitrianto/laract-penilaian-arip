@extends('main.layout')
@section('content')
<center>
    <h1>UBAH DATA GURU</h1>
    <from method="post" action="/guru/store">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">NIP</td>
                <td widht="25%"><input type="text" name="nip" value="{{ $guru->id}}"></td>
            </tr>   

            <tr>
            <td widht="25%">Nama Guru</td>
            <td widht="25%"><input type="text" name="nama_guru" value="{{ $guru->nama_guru}"></td>
            </tr>  
            
    
            <tr>
            <td widht="25%">Jenis Kelamin</td>
                <td widht="25%">   
                    <input type="radio" nama="jk" value="L">Laki Laki 
                    <input type="radio" nama="jk" value="P">Prempuan
                </td>
            </tr>

            <tr>
            <td widht="25%">Alamat</td>
            <td widht="25%"><input type="text" name="Alamat" value="{{ $guru->Alamat}}"></td>

            </tr>  

            <tr>
            <td widht="25%">Password</td>
            <td widht="25%"><input type="text" name="Password" value="{{ $guru->Password}}"></td>

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

    