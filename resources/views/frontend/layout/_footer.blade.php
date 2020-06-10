{{-- Dang nhap --}}
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="color: #3858B3">Thông tin đăng nhập</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/action_page.php" method="post">
                    <!-- <div class="imgcontainer">
                    <img src="" alt="Avatar" class="avatar">
                  </div> -->

                    <div class="container">
                        <label for="ten"><b>Tên người dùng</b></label>
                        <input type="text" placeholder="Nhập họ và tên" name="uname" required>

                        <label for="mk"><b>Mật khẩu</b></label>
                        <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

                        <button type="submit" id="loginBtn">Đăng nhập</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" class="c-remember"> Nhớ tôi lần sau
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Hủy bỏ</button>
                        <span class="psw">Quên <a href="#"> Mật khẩu?</a></span>
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
{{-- END: Dang nhap --}}

<div class="support-bar">
    <a href="#" id="scroll-top" class="goto-top" title="Về Đầu Trang" rel="nofollow">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="footer-block">
                    <div class="footer-block-header">
                        <h3 class="title">Giới thiệu</h3>
                    </div>
                    <div class="footer-block-content">
                        <p><a href="#">Truyenhay.com</a>- Đọc Truyện Online Miễn Phí | Truyện Hay, Truyện Mới. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, kiếm hiệp, truyện teen, tiểu thuyết ngôn tình nhanh nhất.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-block-right">
                    <div class="footer-block-header">
                        <h3 class="title">Liên hệ</h3>
                    </div>
                    <div class="footer-block-content">
                        <div class="footer-block-list">
                            <p>Email: phandinhthac8798@gmail.com</p>
                            <p>
                                <a rel="nofollow" target="_blank" href="https://www.facebook.com/thac.phan.8.7">
                                    <span class="block-list-icon">
                                        <i class="truyen-icon icon-phone"></i>
                                    </span>
                                    facebook
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <p>© 2020 <a href="#">Truyenhay.Com</a>, Nonprofit Organization.</p> -->
</footer>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var top = $(".goto-top");
            if ($('body').height() <= ($(window).height() + $(window).scrollTop() + 200)) {
                top.animate({
                    "margin-left": "0px"
                }, 1500);
                top.css('display', 'block');
            } else {
                top.animate({
                    "margin-left": "-100%"
                }, 1500);
                top.css('display', 'none');

            }
        });

        $(".goto-top").on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 400);
        });
    });
</script>
</body>

</html>