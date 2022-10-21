<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{    
    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class);
    }
    protected $fillable = [
        '_id','idkendaraan', 'mesin','kapasitas_penampung','tipe'
    ];

    use HasFactory;
}
