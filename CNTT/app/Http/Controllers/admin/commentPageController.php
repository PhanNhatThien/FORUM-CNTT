<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class commentPageController extends Controller
{
    // public function index()
    // {
    //     return view('comments.index');
    // }
    public function updateIndex(Request $request, $idComment)
    {
        $request->session()->put('idComment', $idComment);
        $commentData = DB::select('select cmt.idcomments , cmt.content , u.id, u.name , u.fullname , cmt.created_at from source.users u, source.comments cmt where u.id =  cmt.id');
        $commentUpdate = DB::select('select cmt.content from source.comments cmt where idcomments = ? ', [$idComment]);
        $commentUpdateDetail = $commentUpdate[0];
        return view('comments.commentUpdate', compact('commentData', 'commentUpdateDetail'));
    }
    public function comment(CommentRequest $request)
    {
        if (session('name')) {
            $nameData = session('name');
            $infoData = DB::select('Select id from users where name = ?', array($nameData));
            
            
            $userInfoCmt = [
                $request->comment,
                $infoData[0]->id,
                date('Y-m-d H:i:s')    
            ];
            DB::insert('INSERT INTO source.comments ( content, id , created_at) VALUES ( ?, ?, ? )', $userInfoCmt);
            return redirect()->route('learn.comments.index')->with('message', 'Bình luận thành công');
        }
    }
    public function deleteComment($commentId)
    {
        if (!empty($commentId)) {
            $data = DB::select('Select * from source.comments where idcomments = ?', [$commentId]);
            if (!empty($data[0])) {
                DB::delete("Delete from source.comments where idcomments= ?", [$commentId]);
                return redirect()->route('learn.comments.index')->with('message', 'Xóa bình luận thành công');
            }
        } else {
            return redirect()->route('learn.comments.index')->with('msg', 'Liên kết không tồn tại');
        }
    }
}
