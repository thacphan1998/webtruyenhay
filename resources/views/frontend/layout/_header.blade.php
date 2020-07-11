<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đọc Truyện Online</title>
  <link href="{{asset('assets/plugins/awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">

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
        <a class="logo-href" href="{{url('/trang-chu')}}">
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
            <a href="{{url('/moi-cap-nhat')}}" title="Truyện Mới Cập Nhật"><span class="icon"><i class="fa fa-tags"></i></span>Mới Cập Nhật</a>
          </div>
          <div class="col-md-6 menu-item">
            <a href="{{url('/moi-dang')}}" title="Truyện Mới Đăng"><span class="icon"><i class="fa fa-tags"></i></span>Mới Đăng</a>
          </div>
          <div class="col-md-6 menu-item">
            <a href="{{url('/xem-nhieu')}}" title="Truyện Được Xem Nhiều"><span class="icon"><i class="fa fa-tags"></i></span>Xem Nhiều</a>
          </div>
          <div class="col-md-6 menu-item">
            <a href="{{url('/yeu-thich')}}" title="Truyện Được Yêu Thích"><span class="icon"><i class="fa fa-tags"></i></span>Yêu thích</a>
          </div>
          <div class="col-md-6 menu-item">
            <a href="{{url('/truyen-full')}}" title="Truyện Full Hay Nhất"><span class="icon"><i class="fa fa-tags"></i></span>Truyện Full</a>
          </div>
          <div class="col-md-6 menu-item">
            <a href="{{url('/truyen-vip')}}" title="Truyện VIP"><span class="icon"><i class="fa fa-tags"></i></span>Truyện VIP</a>
          </div>
        </div>
      </div>
      <div class="search-wrap">
        <form action="{{url('/tim-kiem')}}" method="GET" role="search">
          <div class="input-group">
            <input placeholder="Tìm kiếm" type="search" name="query" />
            <button class=" search-bar-button" type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
      <div class="login" id="user-login">
        @if(!empty(Auth::user()->email))
        <span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="login-username"><i class="fas fa-user"></i>{{Auth::user()->name}}</span>
        <div class="row menu-list-login-drop">
          <div class="col-md-12 menu-item">
            <a href="{{url('/truyen/'.Auth::user()->id.'/da-thich')}}" title="Truyện Mới Cập Nhật"><span class="icon"><i class="fas fa-heart"></i></span>Truyện yêu thích</a>
          </div>
          <div class="col-md-12 menu-item">
            <a href="{{url('/truyen/'.Auth::user()->id.'/da-xem')}}" title="Truyện Mới Đăng"><span class="icon"><i class="fas fa-eye"></i></span>Truyện đã xem</a>
          </div>
          @if (Auth::user()->role === 'admin')
          <div class="col-md-12 menu-item">
            <a href="{{url('/')}}" title="Truyện Mới Đăng"><span class="icon"><i class="fas fa-user-shield"></i></span>Trang quản trị</a>
          </div>
          @endif
          <div class="col-md-12 menu-item">
            <a href="{{url('/dang-xuat')}}" title="Truyện Được Xem Nhiều"><span class="icon"><i class="fas fa-sign-out-alt"></i></span>Đăng xuất</a>
          </div>
        </div>
        @else
        <span class="icon"><i class="fa fa-user"></i></span>
        <a id="menu-login" class="before-icon" href="{{url('/dang-nhap')}}">Đăng Nhập</a>
        <div class="row menu-list-login-drop">
          <div class="col-md-12 menu-item">
            <a href="{{url('/dang-ky')}}" title="Đăng ký"><span class="icon"><i class="fa fa-tags"></i></span>Đăng
              ký</a>
          </div>
        </div>
        @endif
      </div>
    </div>
  </header>