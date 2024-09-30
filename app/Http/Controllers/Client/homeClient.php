<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeClient extends Controller
{
    public function home(){
        $data = DB::table('products')->paginate(6);
        // dd($data);
        return view('Client.home' , compact('data'));
    }
    public function chitiet($id){
        $data = DB::table('products')
        ->join('danhmuc', 'products.danhmuc_id', '=', 'danhmuc.id')
        ->select('products.*', 'title')
        ->where('products.id',$id)
        ->first();
        // var_dump($data);
        return view('Client.chitiet' , compact('data'));
    }
}
