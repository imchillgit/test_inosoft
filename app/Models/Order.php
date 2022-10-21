<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'idkendaraan', 'jumlah_penjualan','harga','harga_total'
    ];
    use HasFactory;
}
