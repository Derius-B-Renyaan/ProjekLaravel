<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'username',
        'nip',
        'mata_pelajaran',
        'alamat',
        'email',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelas(){
        return $this->hasMany(Kelas::class, 'id_guru');
    }

    public function mataPelajaran(){
        return $this->belongsTo(Mapel::class, 'id_guru');
    }
}
