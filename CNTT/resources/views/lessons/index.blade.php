@extends('master.index')

@section('title')
Bài học
@endsection
<style>
    .active-lessons {
        background-color: #e8ebed !important    ;
        color: #1a1a1a !important;
    }
</style>
@section('sidebar')
    <x-sidebar ></x-sidebar>
@endsection
@section('content-main')

<div class="lesson-body">
    <!-- Tab items -->
    <div class="tabs">
        <div class="tab-item active">
            <i class="tab-icon fas fa-code"></i>
            HTML - CSS
        </div>
        <div class="tab-item">
            <i class="tab-icon fa-brands fa-js"></i>
            JAVASCRIPT
        </div>
        <div class="tab-item">
            <i class="tab-icon fa-brands fa-php"></i>
            PHP
        </div>
        <div class="tab-item">
            <i class="tab-icon fa-brands fa-laravel"></i>
            Laravel frameworks
        </div>
        <div class="tab-item">
            <i class="tab-icon fa-brands fa-react"></i>
            React-JS frameworks
        </div>
        <div class="tab-item">
            <i class="tab-icon fa-brands fa-ubuntu"></i>
            Ubuntu
        </div>
        <div class="line"></div>
    </div>

    <!-- Tab content -->
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="flex-reverse">

                @if(!empty($dataHTMLCSS))
                <div class="tabs-lesson">
                    @foreach( $dataHTMLCSS as $key=>$item)
                    @if($key == 0)

                    <div class="tab-item-lesson active">
                        {{ ++$key }} - {{ $item->lessonname}}
                    </div>
                    @else
                    <div class="tab-item-lesson">
                        {{ ++$key }} - {{ $item->lessonname}}
                    </div>
                    @endif
                    @endforeach
                    <div class="line-lesson"></div>
                </div>
                @endif
                @if(!empty($dataHTMLCSS))
                <div class="tab-lesson-body">
                    <div style="display: flex; flex-direction: column;" class="tab-content-lesson">
                        @foreach( $dataHTMLCSS as $key=>$item)
                        @if($key == 0)
                        <div class="tab-pane-lesson active">
                            <iframe style="margin-bottom: -7px;" width="900" height="530" src="{{ $item->lessonlink }}" title="{{ $item->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <h2 style="z-index: 1;"> {{ $item->title }} </h2> -->
                        </div>
                        @else
                        <div class="tab-pane-lesson">
                            <iframe style="margin-bottom: -7px;" width="900" height="530" src="{{ $item->lessonlink }}" title="{{ $item->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <h2 style="z-index: 1;"> {{ $item->title }} </h2> -->
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="tab-pane">
            <div class="flex-reverse">

                @if(!empty($dataJS))
                <div class="tabs-lesson-js">
                    @foreach( $dataJS as $key=>$item)
                    @if($key == 0)

                    <div class="tab-item-lesson-js active">
                        {{ ++$key }} - {{ $item->lessonname}}
                    </div>
                    @else
                    <div class="tab-item-lesson-js">
                        {{ ++$key }} - {{ $item->lessonname}}
                    </div>
                    @endif
                    @endforeach
                    <div class="line-lesson-js"></div>
                </div>
                @endif
                @if(!empty($dataJS))
                <div class="tab-lesson-body-js">
                    <div style="display: flex; flex-direction: column;" class="tab-content-lesson-js">
                        @foreach( $dataJS as $key=>$item)
                        @if($key == 0)
                        <div class="tab-pane-lesson-js active">
                            <!-- <iframe style="margin-bottom: -7px;" width="900" height="530" src="{{ $item->lessonlink }}" title="{{ $item->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            <h2 style="z-index: 1;"> {{ $item->title }} </h2>
                        </div>
                        @else
                        <div class="tab-pane-lesson-js">
                            <!-- <iframe style="margin-bottom: -7px;" width="900" height="530" src="{{ $item->lessonlink }}" title="{{ $item->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            <h2 style="z-index: 1;"> {{ $item->title }} </h2>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="tab-pane">
            <div>
                <h2>Khóa học này chưa được cập nhật</h2>
            </div>
        </div>
        <div class="tab-pane">
            <div>
                <h2>Khóa học này chưa được cập nhật</h2>
            </div>
        </div>
        <div class="tab-pane">
            <div>
                <h2>Khóa học này chưa được cập nhật</h2>
            </div>
        </div>
        <div class="tab-pane">
            <div>
                <h2>Khóa học này chưa được cập nhật</h2>
            </div>
        </div>
    </div>

    <div class="main_comment-btn">
        <a href="{{ route('learn.comments.index') }}">
            <div class="actionButton_wrapper">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" class="svg-inline--fa fa-comments " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"></path>
                </svg>
                <span class="actionButton_title">Hỏi đáp</span>
            </div>
        </a>
    </div>
</div>

</div>

<script>
    const tabs = document.querySelectorAll(".tab-item");
    const panes = document.querySelectorAll(".tab-pane");
    const tabActive = document.querySelector(".tab-item.active");
    const line = document.querySelector(".tabs .line");

    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });
    tabs.forEach((tab, index) => {
        const pane = panes[index];
        tab.onclick = function() {
            document.querySelector(".tab-item.active").classList.remove("active");
            document.querySelector(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>

<script>
    const tabsLesson = document.querySelectorAll(".tab-item-lesson");
    const panesLesson = document.querySelectorAll(".tab-pane-lesson");
    const tabActiveLesson = document.querySelector(".tab-item-lesson.active");
    const lineLesson = document.querySelector(".tabs-lesson .line-lesson");


    requestIdleCallback(function() {
        lineLesson.style.top = tabActiveLesson.offsetTop + "px";
        lineLesson.style.height = tabActiveLesson.offsetHeight + "px";
    });
    tabsLesson.forEach((tab, index) => {
        const paneLesson = panesLesson[index];
        tab.onclick = function() {
            document.querySelector(".tab-item-lesson.active").classList.remove("active");
            document.querySelector(".tab-pane-lesson.active").classList.remove("active");

            lineLesson.style.top = this.offsetTop + "px";
            lineLesson.style.height = this.offsetHeight + "px";

            this.classList.add("active");
            paneLesson.classList.add("active");
        };
    });
</script>


<script>
    const tabsLessonJS = document.querySelectorAll(".tab-item-lesson-js");
    const panesLessonJS = document.querySelectorAll(".tab-pane-lesson-js");
    const tabActiveLessonJS = document.querySelector(".tab-item-lesson-js.active");
    const lineLessonJS = document.querySelector(".tabs-lesson-js .line-lesson-js");


    requestIdleCallback(function() {
        lineLessonJS.style.top = tabActiveLessonJS.offsetTop + "px";
        lineLessonJS.style.height = tabActiveLessonJS.offsetHeight + "px";
    });
    tabsLessonJS.forEach((tab, index) => {
        const paneLessonJS = panesLessonJS[index];
        tab.onclick = function() {
            document.querySelector(".tab-item-lesson-js.active").classList.remove("active");
            document.querySelector(".tab-pane-lesson-js.active").classList.remove("active");

            lineLessonJS.style.top = this.offsetTop + "px";
            lineLessonJS.style.height = this.offsetHeight + "px";

            this.classList.add("active");
            paneLessonJS.classList.add("active");
        };
    });
</script>
@endsection