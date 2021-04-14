<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    protected $fillable = [
        'name'
    ];

    public function state() {
        return $this->belongsTo('App\State');
    }
}
