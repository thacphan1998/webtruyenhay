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
    {{-- Dang nhap --}}
    <div id="modalLogin">
        <div class="content" style="padding: 50px">
            <div class="login-header">
                <h2 style="color: #3858B3; text-align:center;">Thông tin đăng nhập</h2>
            </div>
            <div class="login-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="container">
                        <label for="ten"><b>Tên người dùng</b></label>
                        <input type="text" placeholder="Nhập tên người dùng hoặc email" name="email" required>

                        <label for="mk"><b>Mật khẩu</b></label>
                        <input type="password" placeholder="Nhập mật khẩu" name="password" required>

                        <button type="submit" id="loginBtn">Đăng nhập</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" class="c-remember"> Nhớ tôi lần sau
                        </label>
                    </div>

                    <div class="container" >
                        <a href="{{url('/trang-chu')}}" class="cancelbtn">Hủy bỏ</a>
                        <span class="psw">Quên <a href="#"> Mật khẩu?</a></span>
                    </div>
                </form>
                <div class="container login-footer" style="border-top: 1px solid #ccc;">
                    <span>Chưa có tài khoản?</span>
                    <a rel="nofollow" title="đăng ký thành viên" href="{{url('/dang-ky')}}">
                        <b>Đăng Ký</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

