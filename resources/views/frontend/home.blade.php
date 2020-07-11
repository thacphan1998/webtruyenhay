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
                                @foreach ($categories as $index => $itemCate)
                                    @if ($index < 5) 
                                    <a class="custom-breadcrumb-item" href="{{url('/'.$itemCate->slug)}}">
                                        @if ($index !== 0) 
                                        <i class="fa fa-circle custom-icon"></i> 
                                        @endif
                                        {{$itemCate->name}}
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @foreach ($storyRecommend as $story)
                        <div class="col-sm-4">
                            <div class="item-story">
                                <a href="{{ url('/truyen/'.$story->slug) }}">
                                    <img src="{{url('upload/'.$story->image)}}" alt="{{$story->name}}" />
                                </a>
                                <div class="slides-caption">
                                    <h5 class="title"><a href="{{ url('/truyen/'.$story->slug) }}" title="{{$story->name}}">{{$story->name}}</a></h5>
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
                                @foreach ($categories as $index => $itemCate)
                                    @if ($index < 5) 
                                    <a class="custom-breadcrumb-item" href="{{url('/'.$itemCate->slug)}}">
                                        @if ($index !== 0) 
                                        <i class="fa fa-circle custom-icon"></i> 
                                        @endif
                                        {{$itemCate->name}}
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @foreach($storyVip as $storyVipItem)
                        <div class="col-sm-3">
                            <div class="item-story-bottom">
                                <a href="{{ url('/truyen/'.$storyVipItem->slug) }}">
                                    <img src="{{url('upload/'.$storyVipItem->image)}}" />
                                </a>
                                <h5 class="title"><a href="{{ url('/truyen/'.$storyVipItem->slug) }}" title="{{$storyVipItem->name}}">{{$storyVipItem->name}}</a></h5>
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
                        @foreach($storyNewUpdate as $storyNewUpdateItem)
                        <div class="col-md-12 list-content" style="display: flex; padding-left: 0;">
                            <div class="col-sm-7">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span>
                                    <a href="{{ url('/truyen/'.$storyNewUpdateItem->slug) }}" title="{{$storyNewUpdateItem ->name}}">{{$storyNewUpdateItem ->name}}</a>
                                </span>
                            </div>
                            <div class="col-sm-3">
                                {{-- <span class="row-link">Chương 172</span> --}}
                            </div>
                            <div class="col-sm-2">
                                {{-- <span class="time-ago row-text">mới đây</span> --}}
                                <span class="row-time">
                                    <i class="fa fa-history"></i>
                                    <span class="time-ago">{{str_replace('day ago','ngày trước',$storyNewUpdateItem->created_at->diffForHumans())}}</span>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="col-md-4" style="padding-left: 15px; background-color: #EEEEEE;">
                <div class=" right-content">
                    {{-- <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Truyện Vừa Đọc<i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="fas fa-book"></span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="" href=""></a>
                                <span class="sidebar-caption">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Thể loại truyện <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($categories as $categoryItem)
                        <div class="col-md-6">
                            <span class="cate-icon"><i class="fa fa-tags"></i></span>
                            <a class="cate-name" href="{{ url('/' . $categoryItem->slug) }}">{{$categoryItem ->name}}</a>
                        </div>
                        @endforeach

                    </div>
                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Truyện Hay <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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
                            <h2 class=" category-title">Truyện Mới Đăng <i class="fas fa-chevron-right icon icon-title" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
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

                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layout._footer')