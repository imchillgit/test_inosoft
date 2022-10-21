<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    public function mobil(){
        return $this->hasMany(Mobil::class);
    }
    public function motor(){
        return $this->hasMany(Motor::class);
    }
    protected $collection = 'kendaraan';
    protected $fillable = [
        '_id','tahun','warna','harga','stok'
    ];
}
