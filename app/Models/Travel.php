<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Travel;
use App\Models\City;
use App\Models\Category;

class Travel extends Model
{
	use SoftDeletes;
    protected $table = 'travels';
    protected $fillable = ['nama','alamat','aksesKendaraan','jamBuka','gambar','deskripsi','harga','category_id','city_id'];

    public function categories(){
    	return $this->belongsTo('App\Models\Category','category_id');
    }
    public function cities(){
    	return $this->belongsTo('App\Models\City','city_id');
    }
}
