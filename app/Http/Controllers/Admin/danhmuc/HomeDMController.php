<?php

namespace App\Http\Controllers\Admin\danhmuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeDMController extends Controller
{
    public function hienthi(){
        $danhmuc = DB::table('danhmuc')->get();
        return view('Admin.danhmuc.homeDM',compact('danhmuc'));
    }
}
