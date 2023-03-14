<?php

namespace App\Http\Controllers\adminManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HTMLController extends Controller
{
    public function index()
    {
        // $html = DB::select('Select * from htmlcss');
        $html = DB::table('htmlcss')->paginate(5);

        return view('admin.course.html', compact('html'));
    }
}
