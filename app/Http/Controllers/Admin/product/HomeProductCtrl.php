<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeProductCtrl extends Controller
{
    public function listProduct()
    {
        $products = DB::table('products')
            ->join('danhmuc', 'products.danhmuc_id', '=', 'danhmuc.id')
            ->select('products.*', 'title')
            ->orderBy('id')
            ->get();
            return view('Admin.product.listProduct',compact('products'));
    }

    public function danhmuc(){
        $danhmuc = DB::table('danhmuc')
        ->get();
        return view('Admin.product.addProduct',compact('danhmuc'));
    }
    public function add(Request $request){
        $sp = [
            'name' => $request['name'],
            'thumbnail' => $request['thumbnail'],
            'price' => $request['price'],
            'mota' => $request['mota'],
            'danhmuc_id' => $request['danhmuc_id'],
        ];
        DB::table('products')->insert($sp);
        return redirect()->route('product.list');
    }
    public function del($id){
        DB::table('products')->delete($id);
        return redirect()->route('product.list');
    }
    public function edit($id){
        $product= DB::table('products')
        ->where('id',$id)
        ->first();
        $danhmuc= DB::table('danhmuc')->get();
        return view('Admin.product.editProduct' , compact('product','danhmuc'));
    }
    public function update(Request $request){
        $sp = [
            'name' => $request['name'],
            'thumbnail' => $request['thumbnail'],
            'price' => $request['price'],
            'mota' => $request['mota'],
            'danhmuc_id' => $request['danhmuc_id'],
        ];
        DB::table('products')
        ->where('id',$request['id'])
        ->update($sp);
        return redirect()->route('product.list');
    }
}
