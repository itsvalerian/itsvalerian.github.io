<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    protected $table = 'service';

    protected $fillable = ['nama','gender', 'email','alamat','produk', 'status'];
}
