<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['travel_id','gambar'];

    public function travels(){
    	return $this->belongsTo('App\Models\Travel','travel_id');
    }
}
