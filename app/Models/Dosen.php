<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    public $time_stamps = false;
    protected $fillable =
    [
        'nama',
        'nip',
        'email',
        'jurusan',
        'alamat',
        'jabatan'
    ];

    public function matkul()
    {
        return $this->hasOne(mata_kuliah :: class , 'id_dosen');
    }
}
