<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class routeBackendController extends Controller
{
    public function index(){
        return view('route.backend.index');
    }
}
