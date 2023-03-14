<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class lessonsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $dataHTMLCSS = DB::select('SELECT * FROM htmlcss');
            
            $dataJS = DB::select('SELECT * FROM js');
            return view('lessons.index', ['dataHTMLCSS' => $dataHTMLCSS, 'dataJS' => $dataJS]);
        }
        return redirect()->route('login')->with('msg', 'Đăng nhập để truy cập khóa học');
    }
}
