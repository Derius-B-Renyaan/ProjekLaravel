<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
    {
    use HasFactory;
    protected $table = 'siswas';
    // protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nisn',
        'username',
        'kelas',
        'jurusan',
        'alamat',
        'no_telp',
        'email',
        'foto',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas', 'id_kelas');
    }

}
