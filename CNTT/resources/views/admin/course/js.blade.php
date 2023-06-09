@extends('admin.index')
@section('title')
Manage JavaScript
@endsection

@section('content-main')
<style>
    .active-lesson {
        background-color: #e8ebed;
        color: var(--primary-color);
    }
</style>
<style>
    table,
    th,
    td {
        border-bottom: 1px solid #333;
    }

    th,
    td {
        font-size: 1.7rem;
    }

    td {
        line-height: 46px;

    }

    button {
        width: 100%;
        font-size: 1.7rem !important;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table thead th {
        text-align: center;
    }

    table tbody td {
        text-align: center;
    }

    .table {
        background-color: #e8ebed;
    }

    .table tbody tr:hover {
        background-color: #ccc;
        cursor: pointer;
        color: var(--primary-color);
    }
</style>
<div class="flex padiing_bottom_20">
    <h1>Trang quản lí khóa học JS</h1>
</div>
<div class="padiing_bottom_20">
    <a href="{{ route('formadd.js.index') }}">
        <button class="btn btn-success">Thêm bài học</button>
    </a>
</div>
@if(session('message'))
<div style="margin-top: 0px !important;" class="alert alert-success text-center">{{session('message')}}</div>
@endif
@if(session('msg'))
<div style="margin-top: 0px !important;" class="alert alert-danger text-center">{{session('msg')}}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tiêu Đề</th>
            <th>Bài học</th>
            <th>Link</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($js))
        @foreach($js as $key=>$value)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->lessonname }}</td>
            <td>{{ $value->lessonlink }}</td>
            <td><a href="{{ route('formadd.js.update', [ 'id' => $value->id ])}}">
                    <button class="btn btn-warning">Sửa </button>
                </a>
            </td>
            <td>
                <a onclick="return confirm('Bạn có chắc muốn xóa bài học này')" href="{{ route('formadd.js.delete', ['id'=> $value->id]) }}">
                    <button class="btn btn-danger">Xóa</button>
                </a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@if ($js->lastPage() > 1)
<ul class="pagination ml-auto">
    <li class="{{ ($js->currentPage() == 1) ? ' disabled' : '' }} page-item">
        <a class=" page-link " href="{{ $js->url(1) }}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    @for ($i = 1; $i <= $js->lastPage(); $i++)
        <li class="{{ ($js->currentPage() == $i) ? ' active' : '' }} page-item">
            <a class=" page-link " href="{{ $js->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="{{ ($js->currentPage() == $js->lastPage()) ? ' disabled' : '' }} page-item">
            <a href="{{ $js->url($js->currentPage()+1) }}" class="page-link" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
</ul>
@endif
<style>
    .pagination{
        display: flex;
        justify-content: center;
        padding-top: 10px;
    }
    .page-link {
        display: flex;
        width: 35px;
        height: 35px;
        justify-content: center;
        align-items: center;
        font-size: 1.6rem;
        outline: none;
        background-color: #e8ebed;
    }
</style>
@endsection