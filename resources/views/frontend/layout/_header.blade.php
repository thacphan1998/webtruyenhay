<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đọc Truyện Online</title>
    <link href="{{asset('assets/plugins/awesome/css/all.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/plugins/awesome/js/all.min.js')}}"></script>
    <style>
        body {
            background-color: #eee;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/category.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/story.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/story_detail.css')}}">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo" ; title="Truyen hay online">
                <a class="logo-href" href="/thac/php-framework/lar-thac98/public/trang-chu">
                    <span class="icon"><i class="fas fa-book-open"></i></span>
                    <h1>Truyen hay online</h1>
                </a>
            </div>
            <div class="menu">
                <span class="icon"><i class="fas fa-align-justify"></i></span>
                <a class="menu-cate before-icon" href="#">Thể Loại</a>
                <div class="row menu-list-cate-drop">
                    @foreach($categories as $key=>$category)
                    <div class="col-md-6 menu-item">
                        <a href="{{ url('/' . $category->slug) }}" title="{{$category->name}}"><span class="icon"><i class="fa fa-tags"></i></span>{{$category->name}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="order">
                <span class="icon"><i class="fa fa-sort"></i></span>
                <a class="before-icon" href="#">Sắp Xếp</a>
                <div class="row menu-list-order-drop">
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện Mới Cập Nhật"><span class="icon"><i class="fa fa-tags"></i></span>Mới Cập Nhật</a>
                    </div>
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện Mới Đăng"><span class="icon"><i class="fa fa-tags"></i></span>Mới Đăng</a>
                    </div>
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện Được Đọc Nhiều"><span class="icon"><i class="fa fa-tags"></i></span>Xem Nhiều</a>
                    </div>
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện Được Yêu Thích"><span class="icon"><i class="fa fa-tags"></i></span>Yêu thích</a>
                    </div>
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện Full"><span class="icon"><i class="fa fa-tags"></i></span>Truyện Full</a>
                    </div>
                    <div class="col-md-6 menu-item">
                        <a href="" title="Truyện VIP"><span class="icon"><i class="fa fa-tags"></i></span>Truyện VIP</a>
                    </div>
                </div>
            </div>
            <div class="search-wrap">
                <input placeholder="Tìm kiếm" type="search" />
            </div>
            <div class="login">
                <span class="icon"><i class="fa fa-user"></i></span>
                <a class="before-icon" href="#" data-toggle="modal" data-target="#modalLogin">Đăng Nhập</a>
            </div>
        </div>
    </header>