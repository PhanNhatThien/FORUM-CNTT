<?php

namespace App\Http\Controllers\adminManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function index (){
        return view('admin.course.react');
    }
}
