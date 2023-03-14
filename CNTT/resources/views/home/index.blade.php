@extends('master.index')
@section('title')
Trang chủ
@endsection

<style>
    .active-home {
        background-color: #e8ebed !important    ;
        color: #1a1a1a !important;
    }
</style>

@section('header')
<x-header></x-header>
@endsection
@section('sidebar')
<x-sidebar></x-sidebar>
@endsection
@section('content-main')

<div class=" content-body">
    <div class="image-slider">
        <div class="image-item">
            <div class="image">
                <img src="{{asset('image\1.png')}}" alt="">
            </div>
        </div>
        <div class="image-item">
            <div class="image">
                <img src="{{asset('image\2.jpg')}}" alt="">
            </div>
        </div>
        <div class="image-item">
            <div class="image">
                <img src="{{asset('image\3.jpg')}}" alt="">
            </div>
        </div>
        <div class="image-item">
            <div class="image">
                <img src="{{asset('image\4.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="defaultLayout_container defaultLayout_container-active ">
        <div class="defaultLayout_container-top">
            <div class="flex-row">
                <h1 class="defaultLayout_heading">1. HTML và CSS</h1>
                <a class="a-primary" href="{{ route('learn.lessons.index') }}">Học ngay</a>
            </div>
            <p class="defaultLayout_heading-text">Để học web Front-end chúng ta luôn bắt đầu với ngôn ngữ HTML và CSS, đây là 2 ngôn ngữ có mặt trong mọi website trên internet. Trong khóa học này F8 sẽ chia sẻ từ những kiến thức cơ bản nhất. Sau khóa học này bạn sẽ tự làm được 2 giao diện websites là The Band và Shopee.</p>
            <p class="defaultLayout_heading-text"> <a href="" class="defaultLayout_heading-text-a"> HTML (HyperText Markup Language) :</a> là một ngôn ngữ đánh dấu được thiết kế ra để tạo nên các trang web, nghĩa là các mẩu thông tin được trình bày trên World Wide Web.</p>

            <p class="defaultLayout_heading-text"> <a href="" class="defaultLayout_heading-text-a"> CSS (Cascading Style Sheets) :</a> là định nghĩa về cách hiển thị của một tài liệu HTML. CSS đặc biệt hữu ích trong việc thiết kế Web. Nó giúp cho người thiết kế dễ dàng áp đặt các phong cách đã được thiết kế lên bất kì page nào của website một cách nhanh chóng, đồng bộ.</p>
        </div>
        <div>
            <img class="defaultLayout_container-top-img" src="{{asset('image/html-css.jpg')}}" alt="">
        </div>
    </div>
    <div class="defaultLayout_container defaultLayout_container-active ">
        <div class="defaultLayout_container-top">
            <div class="flex-row">
                <h1 class="defaultLayout_heading">2. JavaScript</h1>
                <a class="a-primary" href="{{ route('learn.lessons.index') }}">Học ngay</a>
            </div>
            <p class="defaultLayout_heading-text">Với HTML, CSS bạn mới chỉ xây dựng được các websites tĩnh, chỉ bao gồm phần giao diện và gần như chưa có xử lý tương tác gì. Để thêm nhiều chức năng phong phú và tăng tính tương tác cho website bạn cần học Javascript.</p>

            <p class="defaultLayout_heading-text"> <a href="" class="defaultLayout_heading-text-a">JavaScript :</a> là ngôn ngữ lập trình phổ biến dùng để tạo ra các trang web tương tác. Được tích hợp và nhúng vào HTML giúp website trở nên sống động hơn. JavaScript đóng vai trò như một phần của trang web, thực thi cho phép Client-Side Script từ phía người dùng cũng như phía máy chủ (Nodejs) tạo ra các trang web động.</p>

            <p class="defaultLayout_heading-text"> <a href="" class="defaultLayout_heading-text-a"> JavaScript :</a>
                là một ngôn ngữ lập trình thông dịch với khả năng hướng đến đối tượng. Là một trong 3 ngôn ngữ chính trong lập trình web và có mối liên hệ lẫn nhau để xây dựng một website sống động, chuyên nghiệp.</p>
        </div>
        <div>
            <img class="defaultLayout_container-top-img" src="{{asset('image/javascript.jpg')}}" alt="">
        </div>
    </div>
    <div class="defaultLayout_container defaultLayout_container-active ">
        <div class="defaultLayout_container-top">
            <div class="flex-row">
                <h1 class="defaultLayout_heading">3. Sử dụng Ubuntu/Linux</h1>
                <a class="a-primary" href="{{ route('learn.lessons.index') }}">Học ngay</a>
            </div>
            <p class="defaultLayout_heading-text">Cách làm việc với hệ điều hành Ubuntu/Linux qua Windows Terminal & WSL. Khi đi làm, nhiều trường hợp bạn cần nắm vững các dòng lệnh cơ bản của Ubuntu/Linux.</p>
            <p class="defaultLayout_heading-text"><a href="" class="defaultLayout_heading-text-a"> Ubuntu :</a> là một hệ điều hành trên máy tính, và nó được phát triển dựa trên Linux/Debian GNU. Lần đầu được giới thiệu vào năm 2004, tính đến năm 2007, Ubuntu đây là phiên bản chiếm 30% số bản tùy biến của Linux được cài đặt trên máy tính, và cũng là bản tuỳ biến Linux phổ biến nhất. Công ty Canonical đã và đang chịu trách nhiệm trong việc tài trợ Ubuntu, giúp cho hệ điều hành này có thể phát triển trong tương lai.</p>
            <p class="defaultLayout_heading-text">Có ba loại phiên bản Ubuntu mà người dùng cần biết đến, bao gồm Ubuntu phiên bản thông thường, phiên bản hỗ trợ lâu dài (LTS) và các dự án khác. Thông thường, bạn nên sử dụng phiên bản hỗ trợ lâu dài để nhận được hỗ trợ trong vòng 3 năm đối với máy tính để bàn và 5 năm đối với máy chủ.</p>
        </div>
        <div>
            <img class="defaultLayout_container-top-img" src="{{asset('image/ubuntu.png')}}" alt="">
        </div>
    </div>

    <div class="defaultLayout_container defaultLayout_container-active ">
        <div class="defaultLayout_container-top">
            <div class="flex-row">
                <h1 class="defaultLayout_heading">4. Libraries and Frameworks - REACT JS</h1>
                <a class="a-primary" href="{{ route('learn.lessons.index') }}">Học ngay</a>
            </div>
            <p class="defaultLayout_heading-text">Một websites hay ứng dụng hiện đại rất phức tạp, chỉ sử dụng HTML, CSS, Javascript theo cách code thuần (tự code từ đầu tới cuối) sẽ rất khó khăn. Vì vậy các Libraries, Frameworks ra đời nhằm đơn giản hóa, tiết kiệm chi phí và thời gian để hoàn thành một sản phẩm website hoặc ứng dụng mobile.</p>
            <p class="defaultLayout_heading-text"><a href="" class="defaultLayout_heading-text-a"> React-JS :</a>là một opensource được phát triển bởi Facebook, ra mắt vào năm 2013, bản thân nó là một thư viện Javascript được dùng để để xây dựng các tương tác với các thành phần trên website. Một trong những điểm nổi bật nhất của ReactJS đó là việc render dữ liệu không chỉ thực hiện được trên tầng Server mà còn ở dưới Client nữa.</p>
        </div>
        <div>
            <img class="defaultLayout_container-top-img" src="{{asset('image/maxresdefault.jpg')}}" alt="">
        </div>
    </div>

</div>


@endsection
@section('footer')
<x-footer></x-footer>
@endsection