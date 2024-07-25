<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'nama_kelas',
        ];

    public function guru(){
        return $this->hasMany(Guru::class, 'id_guru', 'id_guru');
    }

    public function siswa(){
        return $this->hasMany(Siswa::class, 'id_kelas', 'id_kelas');
    }

    public function tugas(){
        return $this->hasMany(Tugas::class, 'id_kelas', 'id_kelas');
    }

}
