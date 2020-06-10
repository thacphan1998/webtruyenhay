@include('frontend.layout._header')
<section id="content" class="category-page">
    <div class="container">
        <div class="row">
            {{-- Content --}}
            {{-- Left --}}
            <div class="col-md-8" style="background: #EEEEEE; padding-right: 15px;">
                <div class="left-content">
                    <div class="row" id="page-breadcrum">
                        <div class="col-md-12" style="font-size: 13px; margin-left: 5px; margin-bottom: 15px; margin-top:5px; color: #999;">
                            <div class="w3-round sitemap" itemscope itemtype="#">
                                <div itemprop="itemListElement" itemscope itemtype="#" style="float: left;">
                                    <a href="http://localhost:81/thac/php-framework/lar-thac98/public/trang-chu" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fa fa-home"></i>
                                            Trang Chủ
                                        </span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <div itemprop="itemListElement" itemscope itemtype="#" style="float: left;">
                                    <a href="http://localhost:81/thac/php-framework/lar-thac98/public/trang-chu/tien-hiep" itemprop="name" class="active">
                                        <span itemprop="name"> {{$currentCategory->name}} </span>
                                    </a>
                                    <meta itemprop="position" content="2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phần danh sách truyện cập nhật -->
                    <div class="row left-content-item">

                        <div class="col-md-12 first-title">
                            <h2 class="category-title">TRUYỆN {{$currentCategory->name}}<i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                            <div class="custom-breadcrumb">
                                <a class="custom-breadcrumb-item" href="">Truyện Hay </a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Truyện Mới Đăng</a>
                            </div>
                        </div>
                        @foreach ($listStoriesByCate as $storyItem)
                        <div class="col-md-12 img-info-time" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 row-img">
                                <div>
                                    <a rel="nofollow" href="#" title="Kiếm Lai">
                                        <img src="{{url('upload/'.$storyItem->image)}}" alt="{{$storyItem->name}}" width="55" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 row-info">
                                <div>
                                    <a href="{{url('truyen/'.$storyItem->slug)}}" title="Kiếm Lai">{{$storyItem->name}}</a>
                                    <span class="vip-icon"></span>
                                    <span class="row-author">
                                        <i class="fa fa-user"></i>
                                        {{$storyItem->author}}
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-3 row-number">
                                <div>
                                    <span class="row-chapter"><i class="fa fa-eye" style="font-size: 13px;"></i>&nbsp;{{$storyItem->number_of_reads}}</span>
                                    <span class="row-time">
                                        <i class="fa fa-history"></i>
                                        1 giờ trước
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="col-md-4" style="padding-left: 15px; background-color: #EEEEEE;">
                <div class=" right-content">

                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Truyện Tiên Hiệp Hay <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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
                            <h2 class=" category-title">Truyện Tiên Hiệp Mới Đăng <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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
</section>
@include('frontend.layout._footer')