<?php

namespace App\Http\Controllers\adminManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index (){
        return view('admin.course.laravel');
    }
}
