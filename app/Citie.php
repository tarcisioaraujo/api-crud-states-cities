<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    protected $fillable = [
        'name', 'state_id'
    ];

    public function state() {
        return $this->belongsTo('App\State');
    }
}
