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
                        <p><a href="{{url('/trang-chu')}}" title="Truyenhayonline">Truyenhay.com</a>- Đọc Truyện Online Miễn Phí | Truyện Hay, Truyện Mới. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, kiếm hiệp, truyện teen, tiểu thuyết ngôn tình nhanh nhất.</p>
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
                            <p style="font-size: 30px">
                                <a class="icon-info" title="Fanpge của truyenhayonline.com" href="https://www.facebook.com/Truyenhayonline-112873297134194/?modal=admin_todo_tour" rel="nofollow">
                                    <i class="fab fa-facebook"></i>
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
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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

        const timeAgo = $(".time-ago");
        if (timeAgo && timeAgo.text() !== '') {
            timeAgo.each(function(index, el) {
                const newText = $(el).text().replace('days', 'ngày').replace('day', 'ngày').replace('weeks', 'tuần').replace('week', 'tuần').replace('months', 'tháng').replace('month', 'tháng').replace('years', 'năm').replace('year', 'năm').replace('hours', 'giờ').replace('hour', 'giờ').replace('minutes', 'phút').replace('minute', 'phút').replace('seconds', 'giây').replace('second', 'giây').replace('ago', 'trước');
                $(el).text(newText);
            })

        }

        $("#btn-register").click(function(){
            $('#modalLogin').modal('hide');
        });
    });
</script>
</body>

</html>
