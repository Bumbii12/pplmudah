<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenDosen extends Model
{
    use HasFactory;

    protected $table = 'asisten_dosen';
    protected $primaryKey = 'id_asdos';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_asdos',
        'username',
        'password',
        'npm',
        'nama',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_asdos');
    }
}