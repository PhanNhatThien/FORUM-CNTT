<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class routeFrontendController extends Controller
{
    public function index(){
        return view('route.frontend.index');
    }
}
