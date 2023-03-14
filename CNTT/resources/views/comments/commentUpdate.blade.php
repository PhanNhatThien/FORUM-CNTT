@extends('master.index')
@section('title')
Sửa bình luận
@endsection
<style>
    .active-comments {
        background-color: #e8ebed !important;
        color: #1a1a1a !important;
    }

    .active-comment {
        background-color: #e8ebed !important;
        color: var(--primary-color) !important;
    }

    /* .active-admincomment {
        background-color: #e8ebed;
        color: var(--primary-color);
    } */
</style>
@section('header')
<x-header></x-header>
@endsection

@if(session('name') != 'admin')
@section('sidebar')
<x-sidebar></x-sidebar>
@endsection

@else
@section('nav')
<x-nav-admin></x-nav-admin>
@endsection
@endif

@section('content-main')

<div class="content-comments">
    <div>
        <h1 class="comments-heading">Cùng nhau hỏi đáp:</h1>
    </div>
    @if(session('message'))
    <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif
    @if(session('msg'))
    <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif
    <div class="form-wrap">
        <form action="{{ route('postUpdateComment.index') }}" method="post" class="commentBox_commentWrapper">
            @csrf
            <div class="form-body">
                <i class="comment-item-ava-cmt fa-sharp fa-solid fa-user-tie"></i>
                <div class="form-body-input">

                    <input class="text_text commentBox_commentInput" value="{{ old('comment') ?? $commentUpdateDetail->content}}" name="comment" type="text" placeholder="Bạn có thắc mắc gì không?">
                    @error('comment')
                    <div class="text-msg" class="form_input-message">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="commentBox_actionWrapper">
                <a href="{{ route('learn.comments.index') }}" class="commentBox_cancel">Hủy</a>
                <button class="commentBox_cmt">Sửa</button>
            </div>
        </form>
    </div>
    <div class="comment-list">

        @if(!empty($commentData))
        @foreach($commentData as $key=>$item)

        @if(session('name'))
        @if($item->name == session('name'))
        <div class="comment-item">
            @if($item->id == 1)
            <div class="comment-item-author">
                <i class="comment-item-ava fa-sharp fa-solid fa-user-tie"></i>
                <h2 class="comment-item-name">Bạn</h2><i class="comment-item-check fa-solid fa-circle-check"></i>
                <div class="comment-item-btn icon-ellipsis fa-solid fa-ellipsis">
                    <ul class="comment-option-list">
                        <li class="comment-option-item">
                            <a href="{{ route('AdminUpdateComment.index', ['idComment' => $item->idcomments ]) }}" class=""> <i class=" icon-option fa-solid fa-pen"></i>Sửa</a>
                        </li>
                        <li class="comment-option-item">
                            <a onclick="return confirm('Bạn muốn xóa bình luận?')" href="{{ route('commentPage.deleteComment', [ 'commentId' => $item->idcomments ]) }}" class=""><i class="icon-option fa-solid fa-trash"></i>Xóa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <span class="comment-item-content"> {{$item->content}}</span>
            <span class="comment-hour">{{$item->created_at}}</span>
            @else
            <div class="comment-item-author">
                <i class="comment-item-ava fa-sharp fa-solid fa-user-tie"></i>
                <h2 class="comment-item-name">Bạn</h2>
                <div class="comment-item-btn icon-ellipsis fa-solid fa-ellipsis">
                    <ul class="comment-option-list">
                        <li class="comment-option-item">
                            <a href="{{ route('updateComment.index', ['idComment' => $item->idcomments ]) }}" class=""> <i class=" icon-option fa-solid fa-pen"></i>Sửa</a>
                        </li>
                        <li class="comment-option-item">
                            <a onclick="return confirm('Bạn muốn xóa bình luận?')" href="{{ route('commentPage.deleteComment', [ 'commentId' => $item->idcomments ]) }}" class=""><i class="icon-option fa-solid fa-trash"></i>Xóa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <span class="comment-item-content"> {{$item->content}}</span>
            <span class="comment-hour">{{$item->created_at}}</span>
            
            @endif


        </div>
        @else
        <div class="comment-item">
            @if($item->id == 1)
            <div class="comment-item-author">
                <i class="comment-item-ava fa-sharp fa-solid fa-user-tie"></i>
                <h2 class="comment-item-name">{{$item->fullname }}</h2><i class="comment-item-check fa-solid fa-circle-check"></i>
            </div>
            <span class="comment-item-content"> {{$item->content}}</span>
            <span class="comment-hour">{{$item->created_at}}</span>
            @else
            <div class="comment-item-author">
                <i class="comment-item-ava fa-sharp fa-solid fa-user-tie"></i>
                <h2 class="comment-item-name">{{$item->fullname }}</h2>
            </div>
            <span class="comment-item-content"> {{$item->content}}</span>
            <span class="comment-hour">{{$item->created_at}}</span>
            @endif

        </div>
        @endif
        @endif
        @endforeach
        @endif
    </div>
</div>

<script>
    var inputCmt = document.querySelector('.commentBox_commentInput');
    var cmtBtn = document.querySelector('.commentBox_cmt');
    var cancelBtn = document.querySelector('.commentBox_cancel');
    inputCmt.focus();
    if (inputCmt.value == '') {
        cmtBtn.style.backgroundColor = "#888";
        cmtBtn.style.cursor = "default";
    } else {
        cmtBtn.style.backgroundColor = "var(--primary-color)";
        cmtBtn.style.cursor = "pointer";
    }
    inputCmt.oninput = function(e) {
        if (e.target.value.trim() != '') {
            cmtBtn.style.backgroundColor = "var(--primary-color)";
            cmtBtn.style.cursor = "pointer";
        } else {
            cmtBtn.style.backgroundColor = "#888";
            cmtBtn.style.cursor = "default";
        }
    }

    cancelBtn.onclick = function() {
        inputCmt.value = "";
        inputCmt.focus();
        cmtBtn.style.backgroundColor = "#888";
        cmtBtn.style.cursor = "default";
    }
    var btnOptions = document.querySelectorAll('.comment-item-btn');
    var optionList = document.querySelectorAll('.comment-option-list');
    btnOptions.forEach((btnOption, index) => {
        btnOption.onclick = function() {
            if (optionList[index].style.display == "") {
                optionList[index].style.display = "block";
            } else if (optionList[index].style.display == "none") {
                optionList[index].style.display = "block";
            } else {
                optionList[index].style.display = "none";

            }
        }
    })
</script>
@endsection