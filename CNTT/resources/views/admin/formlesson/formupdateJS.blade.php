@extends('admin.index')
@section('title')

Cập nhật bài học - JS
@endsection
@section('content-main')


<div class="flex">
    <h1>Cập nhật bài học JS</h1>
</div>
<div class="formAdd_wrapper">
    <div class="formAdd_container">
        @if(session('message'))
        <div class="alert alert-success text-center">{{session('message')}}</div>
        @endif
        @if(session('msg'))
        <div class="alert alert-danger text-center">{{session('msg')}}</div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger text-center">Cập nhật bài học không thành công</div>
        @endif
        <div class="formAdd_body">
            <form action="{{ route('formadd.js.postupdate')}}" method="post" class="form_formAdd">
                @csrf
                <div class="form_item">
                    <label class="label_formAdd" for="">Tiêu đề: </label>
                    <input class="input_formAdd" type="text" name="title" value="{{old('title') ?? $lessonDetail->title}}">
                    @error('title')
                    <div class="form_input-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form_item">
                    <label class="label_formAdd" for="">Tên bài học: </label>
                    <input class="input_formAdd" type="text" name="lessonname" value="{{old('lessonname') ?? $lessonDetail->lessonname }}">
                    @error('lessonname')
                    <div class="form_input-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form_item">
                    <label class="label_formAdd" for="">Liên kết: </label>
                    <input class="input_formAdd" type="text" name="lessonlink" value="{{old('lessonlink') ?? $lessonDetail->lessonlink}}">
                    @error('lessonlink')
                    <div class="form_input-message">{{ $message }}</div>
                    @enderror
                </div>
                <div style="display: flex;">
                    <input style="padding: 8px 13px;font-size: 1.6rem;margin-top: 20px; margin-right: 10px;" class="btn btn-success" type="submit" value="Cập nhật">
                    <a style="padding: 8px 13px;font-size: 1.6rem;margin-top: 20px;" class="btn btn-warning" href="{{ route('manage.js.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
@endsection