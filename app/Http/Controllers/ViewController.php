<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\City;
use App\Models\Travel;
use App\Models\Galleries;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Travel $travel){

    	$cities = City::all();
    	$categories = Category::all();
    	$datas = $travel->latest()->take(4)->get();

    return view('tampilan.index',compact('datas','categories','cities'));
	}
	public function room($id){

    	$data = Travel::findOrFail($id);
        $galleries = Galleries::all();

    	return view('tampilan.room', compact('data','galleries'));
    }
    public function cari(Request $request){        
        $datas = Travel::where([
            'city_id' => $request->city_id,
            'category_id' => $request->category_id
        ])->paginate(6);
        
        return view('tampilan.search', compact('datas'));
    }
}
