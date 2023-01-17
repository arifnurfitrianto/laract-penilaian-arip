<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mapel;
use App\Models\Mengajar;

class mapelController extends Controller
{
    public function index()
    {
        return view('mapel.index', [
            'mapel' => mapel::all()
        ]);
    }
    
    public function create()
    {
        return view('mapel.create');
    }
    
    public function store(request $request)
    {
        $data_mapel = $request->validate([
            'nama_mapel' => ['required']
        ]);
        mapel::create($data_mapel);
        return redirect('/mapel/index')->with('success','Data mapel Berhasil di Tambah');
    }

    public function edit(mapel $mapel)
    {
        return view('mapel,edit',[
            'mapel' => $mapel
        ]);
    }
    public function update(Request $request, mapel $mapel)
    {
        $data_mapel =$request->validate([
            'nama_mapel' => ['required']
        ]);

        mapel->update($data_mapel);
        return redirect('mapel/index')->with('success', "Data mapel Berhasil di Ubah");
    }
    public function destroy(mapel $mapel)
    {
        $kelas = Kelas::where('mapel_id', $mapel->id)->first();
        if($kelas) {
            return back()->with('error', "$mapel->nama_mapel Masih di Gunakan di Menu Kelas");
    }
    $mapel->delete();
    return back()-with('success', "Data mapel Berhasil di Apus");
}
}

