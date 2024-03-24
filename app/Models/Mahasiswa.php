<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    public $time_stamps = false;
    protected $fillable =
    [
        'nama',
        'nim',
        'jurusan',
        'alamat'
    ];

    public function ktm()
    {
        return $this->hasOne(ktm :: class , 'id_mahasiswa');
    }
}
