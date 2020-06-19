@include('frontend.layout._header')
<section id="content" class="category-page">
    <div class="container">
        <div class="row">
            {{-- Content --}}
            {{-- Left --}}
            <div class="col-md-8" style="background: #EEEEEE; padding-right: 15px;">
                <div class="left-content">
                    <div class="row" id="page-breadcrum" style="margin: 0 0 10px -4px;">
                        <div class="col-md-12">
                            <div class="w3-round sitemap" itemscope itemtype="#">
                                <div itemprop="itemListElement" itemscope itemtype="#" style="float: left;">
                                    <a href="{{url('/trang-chu')}}" itemprop="item">
                                        <span itemprop="name">
                                            <i class="fa fa-home"></i>
                                            Trang Chủ
                                        </span>
                                    </a>
                                    <a href="{{url('/trang-chu')}}" itemprop="name" class="active">
                                        <i class="fas fa-angle-right"></i>
                                        {{-- <span itemprop="name"> {{$currentCategory->name}} </span> --}}
                                    </a>
                                    <meta itemprop="position" content="2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phần danh sách truyện cập nhật -->
                    <div class="row left-content-item">
                        <div class="col-md-12 first-title">
                            <h2 class="category-title">Danh sách truyện xem nhiều<i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        {{-- BEGIN: Danh sách truyện xem nhiều --}}
                        @foreach ($storiesviewMore as $storyItem)
                        <div class="col-md-12 img-info-time" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 row-img">
                                <div>
                                    <a rel="nofollow" href="{{url('truyen/'.$storyItem->slug)}}" title="{{$storyItem->name}}">
                                        <img src="{{url('upload/'.$storyItem->image)}}" alt="{{$storyItem->name}}" width="55" height="70">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 row-info">
                                <div>
                                    <a href="{{url('truyen/'.$storyItem->slug)}}" title="{{$storyItem->name}}">{{$storyItem->name}}</a>
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
                                        <span class="time-ago">{{str_replace('day ago','ngày trước',$storyItem->created_at->diffForHumans())}}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- END: --}}
                        @if(count($storiesviewMore) == 0)         
                            <div class="no-result">Không tìm thấy truyện nào</div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="col-md-4" style="padding-left: 15px; background-color: #EEEEEE;">
                <div class=" right-content">

                    <div class="row right-content-item">
                        <div class="col-md-12">
                            <h2 class=" category-title">Truyện Hay <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($storyHot as $index => $storyHotItem)
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">{{$index+1}}</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="{{$storyHotItem ->name}}" href="{{ url('/truyen/' . $storyHotItem->slug) }}">{{$storyHotItem ->name}}</a>
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
                            <h2 class=" category-title">Truyện Mới Đăng <i class="fas fa-chevron-right icon" style="font-size: 20px; margin-bottom: 2px;"></i></h2>
                        </div>
                        @foreach($storyLatest as $index => $storyLatestItem)
                        <div class="col-md-12 sidebar-content" style="display: flex; padding: 0; border-bottom: 1px dashed #e5e6e9;">
                            <div class="col-sm-2 top-left">
                                <span class="top-number top-one">{{$index+1}}</span>
                            </div>
                            <div class="col-sm-10 top-right">
                                <a title="{{$storyLatestItem ->name}}" href="{{ url('/truyen/' . $storyLatestItem->slug) }}">{{$storyLatestItem ->name}}</a>
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
</section>
@include('frontend.layout._footer')