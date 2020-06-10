@include('frontend.layout._header')
<section id="content">
    <div class="container">
        <!-- row 1 -->
        <div class="row">
            {{-- Left --}}
            <div class="col-md-8" style="background: #EEEEEE; padding-right: 15px;">
                <div class="left-content">
                    <div class="row left-content-item ">
                        <div class="col-md-12 first-title">
                            <h2 class="category-title">Truyện đề cử <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                            <div class="custom-breadcrumb">
                                <a class="custom-breadcrumb-item" href="">Ngôn Tình </a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Truyện teen</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Kiếm hiệp</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Tiên hiệp</a>
                            </div>
                        </div>
                        @foreach ($storyRecommend as $story)
                        <div class="col-sm-4">
                            <div class="item-story">
                                <a href="{{ url('/truyen/'.$story->slug) }}">
                                    <img src="{{url('upload/'.$story->image)}}" alt="{{$story->name}}"/>
                                </a>
                                <div class="slides-caption">
                                    <h5 class="title"><a href="#" title="Thiên Tài Triệu Hồi Sư">{{$story->name}}</a></h5>
                                    <!-- <p class="description">Quyển 5 - Chương 191</p> -->
                                </div>
                                <span class="slides-view">
                                    <i class="fa fa-eye"></i>
                                    {{$story->number_of_reads}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row left-content-item">
                        <div class="col-md-12 first-title">
                            <h2 class="category-title">TRUYỆN VIP <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                            <div class="custom-breadcrumb">
                                <a class="custom-breadcrumb-item" href="">Ngôn Tình </a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Truyện teen</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Kiếm hiệp</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Tiên hiệp</a>
                            </div>
                        </div>
                        @foreach($storyVip as $storyVipItem)
                        <div class="col-sm-3">
                            <div class="item-story-bottom">
                                <img src="{{url('upload/'.$storyVipItem->image)}}" />
                                <h5 class="title"><a href="#" title="Thiên Tài Triệu Hồi Sư">{{$storyVipItem->name}}</a></h5>
                                <!-- <p class="description">Quyển 5 - Chương 191</p> -->
                                <span class="slides-view">
                                    <i class="fa fa-eye"></i>
                                    {{$storyVipItem->number_of_reads}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- phần danh sách truyện cập nhật -->
                    <div class="row left-content-item">
                        <div class="col-md-12 first-title">
                            <h2 class="category-title">TRUYỆN MỚI CẬP NHẬT <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                            <div class="custom-breadcrumb">
                                <a class="custom-breadcrumb-item" href="">Ngôn Tình </a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Truyện teen</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Kiếm hiệp</a>
                                <a class="custom-breadcrumb-item" href=""><i class="fa fa-circle custom-icon"></i> Tiên hiệp</a>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Ta Muốn Làm Thiên Đao</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 172</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">App Địa Ngục</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 12</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Đại Bát Hầu</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 242</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Ám Khí Diệt Quỷ Nhân</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 45</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">3 giờ trước</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Cho Thuê Bạn Trai</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 107</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Hồn Ma Che Dù</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 104</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">1 giờ trước</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Đại Mộng Chủ</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 31</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Thiếu Niên Ca Hành</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 230</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Nhất Ngôn Thông Thiên</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Quyển 5 - Chương 927</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">mới đây</span>
                            </div>
                        </div>
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="#" title="Ta Muốn Làm Thiên Đao">Nghịch Thế Vũ Thần</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                <span class="row-link">Chương 203</span>
                            </div>
                            <div class="col-sm-2">
                                <span class="row-text">5 giờ trước</span>
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
                            <h2 class=" category-title">Thể loại truyện <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Truyện Hay <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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
                            <h2 class=" category-title">Truyện Mới Đăng <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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

                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layout._footer')