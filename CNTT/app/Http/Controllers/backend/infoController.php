<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\postUpdateUserRequest;
class infoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == 0) {
                $userID = Auth::user()->id;
                $data = DB::select('Select * from source.users where id = ?', [$userID]);
                $dataDetail = $data[0];
                return view('personalInfo.index', compact('dataDetail'));
            }
        }
        return redirect()->route('login')->with('msg', 'Bạn chưa đăng nhập');
    }
    public function updateIndex()
    {
        $userID = Auth::user()->id;
        $data = DB::select('Select * from source.users where id = ?', [$userID]);
        $dataDetail = $data[0];
        return view('personalInfo.formUpdateUser', compact('dataDetail'));
    }
    public function postUpdateIndex(postUpdateUserRequest $request){
        $userID = Auth::user()->id;
        $data = [
            $request->name,
            $request->fullname,
            $request->email,
            $userID
        ];
        DB::update('Update source.users SET name = ?, fullname = ?, email =? where id = ?', $data); 
        $request->session()->put('name', $request->name);
        return redirect()->route('learn.info.index')->with('message', 'Sửa thông tin thành công!');
    }
}
