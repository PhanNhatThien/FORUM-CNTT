<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;

class commentsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $commentData = DB::select('select cmt.idcomments , cmt.content , cmt.created_at , u.id, u.name , u.fullname from source.users u, source.comments cmt where u.id =  cmt.id');
            return view('comments.index', compact('commentData'));
        }
        return redirect()->route('login')->with('msg', 'Đăng nhập để hỏi đáp');
    }
    public function updateIndex(Request $request, $idComment)
    {
        $request->session()->put('idComment', $idComment);
        $commentData = DB::select('select cmt.idcomments , cmt.content , u.id, u.name , u.fullname, cmt.created_at from source.users u, source.comments cmt where u.id =  cmt.id');
        $commentUpdate = DB::select('select cmt.content from source.comments cmt where idcomments = ? ', [$idComment]);
        $commentUpdateDetail = $commentUpdate[0];
        return view('comments.commentUpdate', compact('commentData', 'commentUpdateDetail'));
    }
    public function postUpdateIndex(CommentRequest $request)
    {
        $idComment = session('idComment');
        if (Auth::user()->is_admin == 1) {
            if (empty($idComment)) {
                return back()->with('msg', 'Liên kết không tồn tại');
            } else {
                $data = [
                    $request->comment,
                    date('Y-m-d H:i:s'),
                    $idComment
                ];
                DB::update('Update source.comments SET content = ?, created_at = ? where idcomments = ?', $data);
                return redirect()->route('admin.comments.index')->with('message', 'Sửa bình luận thành công!');
            }
        } else {
            if (empty($idComment)) {
                return back()->with('msg', 'Liên kết không tồn tại');
            } else {
                $data = [
                    $request->comment,
                    date('Y-m-d H:i:s')   ,
                    $idComment
                ];
                DB::update('Update source.comments SET content = ?, created_at = ? where idcomments = ?', $data);
                return redirect()->route('learn.comments.index')->with('message', 'Sửa bình luận thành công!');
            }
        }
    }
}
