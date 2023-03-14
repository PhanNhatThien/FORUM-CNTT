<?php

namespace App\Http\Controllers\adminManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JSController extends Controller
{
    public function index (){
        $js = DB::table('js')->paginate(5);
        return view('admin.course.js', compact('js'));
    }
}
