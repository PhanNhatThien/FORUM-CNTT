<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class routeController extends Controller
{
    public function index(){
        return view('route.index');
    }
}
