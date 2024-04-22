<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen2 extends Model
{
    use HasFactory;
    protected $table = 'dosen2';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable =
    [
        'nama',
        'nip',
        'email',
        'alamat',
        'jurusan',
        'no_hp'
    ];
}
