<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'mengajar';
    protected $guarded = ['id'];

    public function mengajar()
    {
        return $this->belongsTo(mengajar::class,'mengajar_id', 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(siswa::class,'siswa_id', 'id');
    }
 
}
