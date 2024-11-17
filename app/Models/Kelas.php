<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_kelas',
        'nama_kelas',
        'nama_ruangan',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_kelas');
    }
}
