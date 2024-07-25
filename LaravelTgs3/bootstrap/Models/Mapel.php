<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $primaryKey = 'id_mata_pelajaran';
    protected $fillable = [
        'nama_pelajaran',
    ];

    public function guru(){
        return $this->belongsTo(Guru::class, 'id_guru', 'id_guru');
    }

    public function tugas(){
        return $this->hasMany(Tugas::class, 'id_mata_pelajaran', 'id_mata_pelajaran');
    }
}
