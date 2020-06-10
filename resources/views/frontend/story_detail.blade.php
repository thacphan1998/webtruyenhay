@include('frontend.layout._header')
<section id="content" class="story-detail-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="c-breadcrumb">
                    <h2> Truyện: {{$currentStory->name}}</h2>
                    <div class="r-author">
                        <i class="fa fa-user"></i>
                        <a href="#" title="Shihouin Shirahime">Shihouin Shirahime</a>
                    </div>
                    <div class="r-update">
                        <i class="far fa-clock"></i>
                        <time datetime="2020-02-12T17:31:50+07:00" pubdate="true">12/02/2020</time>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="story-content">
                    {{$currentStory->content}}
                </div>
                <div class="c-author">
                    test
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thành viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/action_page.php" method="post">
                        <div class="container">
                            <!-- <label for="ten"><b>Tên người dùng</b></label> -->
                            <input type="text" placeholder="Nhập email" name="email" required>
                            <!-- <label for="mk"><b>Mật khẩu</b></label> -->
                            <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

                            <button type="submit">Đăng nhập</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Nhớ tôi lần sau
                            </label>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <!-- <button type="button" class="cancelbtn">Hủy bỏ</button> -->
                            <a class="psw" href="#" title="Quên mật khẩu"> Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <span>Chưa có tài khoản?</span>
                    <a rel="nofollow" title="đăng ký thành viên" href="#">
                        <b>Đăng Ký</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layout._footer')