@include('frontend.layout._header')
<section id="content" class="story-page">
    <div class="container">
        <div class="row">
            {{-- Content --}}
            {{-- Left --}}
            <div class="col-md-8" style="background: #EEEEEE; padding-right: 15px;">
                <div class="left-content">
                    <div class="row" id="page-breadcrum">
                        <div class="col-md-12">
                            <div class="w3-round sitemap" itemscope itemtype="#">
                                <div itemprop="itemListElement" itemscope itemtype="#" style="float: left;">
                                    <a href="http://localhost:81/thac/php-framework/lar-thac98/public/trang-chu" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fa fa-home"></i>
                                            Trang Chủ
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
                                        <a title="Kiếm hiệp" href="#">Kiếm hiệp</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-cloud-download-alt" style="margin: 0 5px; color: #999"></i>
                                        {{$currentStory->source}}
                                    </li>
                                    <li>
                                        <i class="fa fa-eye" style="margin: 0 5px; color: #999"></i>
                                        <b>7285124</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-rss" style="margin: 0 5px; color: #999"></i>
                                        <span>Đang cập nhật</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-cloud-upload-alt" style="margin: 0 5px; color: #999"></i>
                                        <time datetime="2015-06-04T23:11:21+07:00">23:11:21 04/06/2015</time>
                                    </li>
                                    <li>
                                        <i class="fas fa-pen-square" style="margin: 0 5px; color: #999"></i>
                                        <time datetime="2020-04-10T06:19:26+07:00">06:19:26 10/04/2020</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- Phan noi dung --}}
                        <div class="col-md-8">
                            <div class="detail-center">
                                <h1>
                                    <a href="#" title="Toàn Chức Cao Thủ">{{$currentStory->name}}</a>
                                </h1>
                            </div>
                            <div class="detail-button">
                                {{-- <a href="#" title="Đến danh sách chương" rel="nofollow" class="w3-btn w3-round w3-blue w3-hover-white" onclick="gotodschuong()">
                                    <i class="fa fa-list"></i>
                                    DS Chương
                                </a> --}}
                                <a class="w3-btn w3-round w3-blue w3-hover-white" title="Đọc truyện Toàn Chức Cao Thủ" href="{{url('/truyen/chi-tiet/'.$currentStory->slug)}}">
                                    <i class="fa fa-eye"></i>
                                    Đọc truyện
                                </a>
                            </div>
                            <div class="detail-button">
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
                                Danh sách chương truyện Toàn Chức Cao Thủ
                            </h2>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex;">
                            <div class="content-ds">
                                <h4>
                                    <a title="Cao thủ bị trục xuất." href="#">Chương 1 - Cao Thủ Bị Trục Xuất.</a>
                                </h4>
                                <span class="w3-right w3-hide-small">04/06/2015</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex;">
                            <div class="content-ds">
                                <h4>
                                    <a title="Cao thủ bị trục xuất." href="#">Chương 1 - Cao Thủ Bị Trục Xuất.</a>
                                </h4>
                                <span class="w3-right w3-hide-small">04/06/2015</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex;">
                            <div class="content-ds">
                                <h4>
                                    <a title="Cao thủ bị trục xuất." href="#">Chương 1 - Cao Thủ Bị Trục Xuất.</a>
                                </h4>
                                <span class="w3-right w3-hide-small">04/06/2015</span>
                            </div>
                        </div>
                    </div>
                    <!-- phần bình luận truyện -->
                    <div class="row left-content-item comment-member">
                        <div class="col-md-12 first-title">
                            <i class="fa fa-comments"></i>
                            <h3 class="category-title">
                                Bình luận về truyện Toàn Chức Cao Thủ
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
                                        <i class="fa fa-send"></i>
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
                            <h2 class=" category-title" style="text-transform: none;">Truyện Tiên Hiệp Hay <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">1</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Ngạo Thế Đan Thần" href="#">Ngạo Thế Đan Thần</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    7689372
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">2</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Kiếm Đạo Độc Tôn" href="#">Kiếm Đạo Độc Tôn</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    874592474
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">3</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Thần Đạo Đan Tôn" href="#">Thần Đạo Đan Tôn</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    6219324
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">4</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Ép Yêu 100 Ngày" href="#">Ép Yêu 100 Ngày</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    3298752
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">5</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Hôn Trộm 55 Lần" href="#">Hôn Trộm 55 Lần</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    9283463
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">6</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Linh Vũ Thiên Hạ" href="#">Linh Vũ Thiên Hạ</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    23476535
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">7</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Hệ Thống Liên Minh" href="#">Hệ Thống Liên Minh</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    2937583
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">8</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Ám Khí Diệt Quỷ Nhân" href="#">Ám Khí Diệt Quỷ Nhân</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    29836507
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">9</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Quân Nhân Tại Thượng" href="#">Quân Nhân Tại Thượng</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    22975445
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">10</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Mùa Hạ Nồng Nhiệt" href="#">Mùa Hạ Nồng Nhiệt</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    7454363
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- phần truyện mới đăng -->
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title" style="text-transform: none;">Truyện Tiên Hiệp Mới <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">1</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Cuộc Sống Sau Khi Trọng Sinh Của Bạch Nguyệt Quang" href="#">Cuộc Sống Sau Khi Trọng Sinh Của Bạch Nguyệt Quang</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">2</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Hệ Thống Liên Minh" href="#">Hệ Thống Liên Minh</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    874
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">3</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Người Mẹ Quỷ" href="#">Người Mẹ Quỷ</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    621
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">4</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Nữ Sát Thủ Ta Yêu Nàng" href="#">Nữ Sát Thủ Ta Yêu Nàng</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    32
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">5</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Hôn Trộm 55 Lần" href="#">Hôn Trộm 55 Lần</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    9283463
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">6</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Linh Vũ Thiên Hạ" href="#">Linh Vũ Thiên Hạ</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    23476535
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">7</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Lên Tàu Ở London Bridge" href="#">Lên Tàu Ở London Bridge</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    2937
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">8</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Ám Khí Diệt Quỷ Nhân" href="#">Ám Khí Diệt Quỷ Nhân</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    29836507
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">9</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Sau Khi Nhiếp Chính Vương Trúng Độc Tình" href="#">Sau Khi Nhiếp Chính Vương Trúng Độc Tình</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    2293
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">10</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="Người Theo Đuổi Ánh Sáng" href="#">Người Theo Đuổi Ánh Sáng</a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                    74543
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Thể loại truyện <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Tiên Hiệp</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Kiếm Hiệp</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Truyện Teen</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Ngôn Tình</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Truyện Ma</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Truyện ngắn</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Truyện Cười</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Tiểu Thuyết</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Lịch Sử</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Xuyên Không</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Dị Giới</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Trinh Thám</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Võng Du</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Quân Sự</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Khoa Huyễn</a>
                        </div>
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="#">Đam Mỹ</a>
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