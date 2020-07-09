@include('frontend.layout._header')
<section id="content" class="story-page">
    <div class="container">
        <div class="row">
            {{-- Content --}}
            {{-- Left --}}
            <div class="col-md-8" style="background: #EEEEEE; padding-right: 15px;">
                <div class="left-content">
                    <div class="row" id="page-breadcrum" style="margin-bottom: 10px; margin-left: -4px">
                        <div class="col-md-12">
                            <div class="w3-round sitemap" itemscope itemtype="#">
                                <div itemprop="itemListElement" itemscope itemtype="#" style="float: left;">
                                    <a href="{{url('/trang-chu')}}" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fa fa-home"></i>
                                            Trang Chủ
                                        </span>
                                    </a>
                                    <a href="{{url('/'.$categoryName->slug)}}" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fas fa-angle-right"></i>
                                            {{$categoryName->name}}
                                        </span>
                                    </a>
                                    <a href="javascript:;" style="cursor: default;" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fas fa-angle-right"></i>
                                            {{$currentStory->name}}
                                        </span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phần danh sách truyện cập nhật -->
                    <div class="row left-content-item">
                        {{-- Phan hinh --}}
                        <div class="col-md-4">
                            <div class="etail-thumbnail">
                                <img width="228" height="270" alt="{{$currentStory->name}}" src="{{url('upload/'.$currentStory->image)}}" />
                            </div>
                            {{-- phần thông tin hình --}}
                            <div class="detail-info">
                                <ul class="w3-ul">
                                    <li>
                                        <i class="fa fa-user" style="margin: 0 5px; color: #999"></i>
                                        <a href="#" title="{{$currentStory->author}}">{{$currentStory->author}}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tags" style="margin: 0 5px; color: #999"></i>
                                        <a title="{{$categoryName->name}}" href="#">{{$categoryName->name}}</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-cloud-download-alt" style="margin: 0 5px; color: #999"></i>
                                        {{$currentStory->source}}
                                    </li>
                                    <li>
                                        <i class="fa fa-eye" style="margin: 0 5px; color: #999"></i>
                                        <b>{{$currentStory->number_of_reads}}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-rss" style="margin: 0 5px; color: #999"></i>
                                        <span>Đang cập nhật</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-cloud-upload-alt" style="margin: 0 5px; color: #999"></i>
                                        <time datetime="2015-06-04T23:11:21+07:00">{{$currentStory->created_at}}</time>
                                    </li>
                                    <li>
                                        <i class="fas fa-pen-square" style="margin: 0 5px; color: #999"></i>
                                        <time datetime="2020-04-10T06:19:26+07:00">{{$currentStory->updated_at}}</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- Phan noi dung --}}
                        <div class="col-md-8">
                            <div class="detail-center">
                                <h1>
                                    <a href="#" title="{{$currentStory->name}}">{{$currentStory->name}}</a>
                                </h1>
                            </div>
                            <div class="socialdetail" style="margin-right: 176px;">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                            <div class="detail-button">
                                <a class="w3-btn w3-round w3-blue w3-hover-white" title="Đọc truyện Toàn Chức Cao Thủ" href="{{url('/truyen/chi-tiet/'.$currentStory->slug)}}">
                                    <i class="fa fa-eye"></i>
                                    Đọc truyện
                                </a>
                            </div>
                            <div class="detail-button" style="margin-right: 100px; margin-left: 100px;">
                                <button id="bt_a_d_fs" onclick="openModal('login')" class="w3-btn w3-round w3-blue w3-hover-white">
                                    <i class="far fa-heart"></i>
                                    Thêm vào truyện Yêu Thích
                                </button>
                            </div>
                            <div class="w3-justify summary">
                                <article data-readmore aria-expanded="false" id="rmjs-1" style="max-height: none; height: 290px;">
                                    {{$currentStory->summary}}
                                </article>
                                <a href="javascript:;" data-readmore-toggle="rmjs-1" aria-controls="rmjs-1" id="btn-see-more">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <!-- phần danh sách chương của truyện -->
                    <div class="row left-content-item">
                        <div class="col-md-12 first-title">
                            <h2 class="category-title">
                                <i class="fa fa-list"></i>
                                Danh sách truyện {{str_replace("Truyện","",$categoryName->name)}}
                            </h2>
                        </div>
                        @foreach($storyList as $storyListItem)
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="{{ url('/truyen/'.$storyListItem->slug) }}" title="{{$storyListItem->name}}">{{$storyListItem->name}}</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <!-- <span class="row-link">Chương 172</span> -->
                            </div>
                            <div class="col-sm-2">
                                <span class="row-time">
                                    <i class="fa fa-history"></i>
                                    <span class="time-ago">{{str_replace('day ago','ngày trước',$storyListItem->created_at->diffForHumans())}}</span>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- phần bình luận truyện -->
                    <div class="row left-content-item comment-member">
                        <div class="col-md-12 first-title">
                            <i class="fa fa-comments" style="color: #2980b9; margin-right: 5px; font-size: 25px;"></i>
                            <h3 class="category-title">
                                Nhận xét của đọc giả về truyện {{$currentStory->name}}
                            </h3>
                        </div>
                        <form class="comment-form" style="margin: 15px 0" name="formcm" action="/method/comment" method="post" enctype="multipart/form-data" onsubmit="return checkvailcm()">
                            <div class="comment-text" style="padding: 0px 15px;">
                                <textarea id="txtcm" name="txtcm" data-toggle="modal" data-target="#exampleModal" class="w3-round" placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea>
                            </div>
                            <div class="comment">
                                <div class="col-sm-6 comment-count">
                                    <label class="character" for="txtcm">Số ký tự: </label>
                                    <label id="ccm" class="number">0</label>
                                </div>
                                <div class=" col-sm-6 comment-button">
                                    <button disabled="disabled" type="button" id="btcm" name="btcm" onclick class="w3-btn button-send">
                                        <i class="fas fa-paper-plane"></i>
                                        Gửi
                                    </button>
                                </div>
                                <div id="diverro" class=" comment-error" style="display: none;">
                                    <label id="lberro"></label>
                                </div>
                            </div>
                            <p style="display:none;">
                                <span></span>
                                <input id="notinput" name="notinput" type="text" class="form-control">
                            </p>
                            <input type="hidden" name="storyid-hidden" id="storyid-hidden" value="6911">
                            <input type="hidden" name="comment-cate" id="comment-cate" value="0">
                            <input type="hidden" name="actual_link" id="actual_link" value="#">
                        </form>
                        <input type="hidden" id="comment-flag" value="true">
                        <input type="hidden" id="comment-page" value="2">
                        <div id="comment-list">
                            <div class="row" id="comment-row-item">
                                <div class="col-md-12">
                                    <div class="comment-item">
                                        <div class="comment-left">
                                            <img alt="Avatar" class="w3-circle" width="50" height="50" src="https://f0.pngfuel.com/png/980/886/male-portrait-avatar-png-clip-art.png">
                                        </div>
                                        <div class="comment-right">
                                            <a class="comment-user" href="#" rel="nofollow" title>Van Minh</a>
                                            <span class="comment-date">20:05 08/05/2020</span>
                                            <div class="comment-chat">Đọc hết rồi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="comment-row-item">
                                <div class="col-md-12">
                                    <div class="comment-item">
                                        <div class="comment-left">
                                            <img alt="Avatar" class="w3-circle" width="50" height="50" src="https://f0.pngfuel.com/png/980/886/male-portrait-avatar-png-clip-art.png">
                                        </div>
                                        <div class="comment-right">
                                            <a class="comment-user" href="#" rel="nofollow" title>Van Minh</a>
                                            <span class="comment-date">20:05 08/05/2020</span>
                                            <div class="comment-chat">Đọc hết rồi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="col-md-4" style="padding-left: 15px; background-color: #EEEEEE;">
                <div class=" right-content">

                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title" style="text-transform: none;">Truyện Hay <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($storyHot as $index => $storyHotItem)
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">{{$index+1}}</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="{{$storyHotItem ->name}}" href="{{ url('/truyen/'.$storyHotItem->slug) }}">{{$storyHotItem ->name}}</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    {{$storyHotItem ->number_of_reads}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- phần truyện mới đăng -->
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title" style="text-transform: none;">Truyện Mới Đăng <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($storyLatest as $index => $storyLatestItem)
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">{{$index+1}}</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="{{$storyLatestItem ->name}}" href="{{ url('/truyen/'.$storyLatestItem->slug) }}">{{$storyLatestItem ->name}}</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    {{$storyLatestItem ->number_of_reads}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Thể loại truyện <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($categories as $categoryItem)
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="{{ url('/' . $categoryItem->slug) }}">{{$categoryItem ->name}}</a>
                        </div>
                        @endforeach
                    </div>
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
<script>
    $(document).ready(function() {
        $('#btn-see-more').click(function() {
            console.log($(this))
            if (!$(this).hasClass('open')) {
                $('.summary article').css('height', '100%');
                $(this).html("Đóng");
                $(this).addClass('open');
            } else {
                $('.summary article').css('height', '290px');
                $(this).html("Xem thêm");
                $(this).removeClass('open');
            }

        })
    })
</script>
@include('frontend.layout._footer')