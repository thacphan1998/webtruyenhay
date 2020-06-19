@include('frontend.layout._header')

<section id="content" class="story-detail-page">
    <div class="container" style="background: #EEEEEE;">
        <div class="row" id="page-breadcrum" style="margin-bottom: 4px; margin-left: -25px; padding: 8px">
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
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="c-breadcrumb">
                    <h2> Truyện: {{$currentStory->name}}</h2>
                    <div class="r-author">
                        <i class="fa fa-user"></i>
                        <a href="#" title="{{$currentStory->author}}">{{$currentStory->author}}</a>
                    </div>
                    <div class="number-reads" style="text-align: center; margin-top:8px">
                        <i class="fa fa-eye" style="margin: 0; color: #999"></i>
                        <b style="color: #999;">{{$currentStory->number_of_reads}}</b>
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
                    <span>Bạn đang đọc truyện tại wesite <b> Truyenhay.com</b></span>
                </div>
            </div>
        </div>
        {{-- phần truyện liên quan--}}
        <!-- <div class="container"> -->
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
                    <span class="row-text">mới đây</span>
                </div>
            </div>
            @endforeach
        </div>
        <!-- </div> -->
        <!-- phần bình luận trong đọc truyện -->
        <div class="row content-item comment-member">
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