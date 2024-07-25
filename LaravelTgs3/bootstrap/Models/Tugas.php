<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';
    protected $fillable = [
        'id_siswa',
        'id_mapel',
        'judul',
        'deskripsi',
        'deadline'
    ];

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
