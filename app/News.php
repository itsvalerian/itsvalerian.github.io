<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title','country_id', 'content'];

    public function country () 
    { 
        return $this->belongsTo('App\Country'); 
    }
}
