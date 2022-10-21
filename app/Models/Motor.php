<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class);
    }
    protected $fillable = [
        '_id','idkendaraan', 'mesin','tipe_suspensi','tipe_transmisi'
    ];

    use HasFactory;
}
