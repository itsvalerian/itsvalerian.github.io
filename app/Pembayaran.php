<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'kode_pemesanan',
        'status',
        'total_harga',
        'kode_unik',
        'user_id',
    ];
}
