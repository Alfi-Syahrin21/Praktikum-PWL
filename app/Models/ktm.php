<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktm extends Model
{
    use HasFactory;
    
    protected $table = 'ktm';
    protected $primaryKey = 'id_ktm';
    public $time_stamps = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa :: class);
    }
}
