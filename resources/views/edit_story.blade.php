@include('layout._header')
@include('layout._sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa truyện</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sửa truyện</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <!-- form start -->
                        <form role="form" method="post" action="{{action('StoryController@update', $id)}}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="put">
                            <div class="card-body">
                                {{-- Tên truyện --}}
                                <div class="form-group">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                    <label for="ten-truyen">Tên truyện</label>
                                    <input value="{{$story->name}}" name="name" type="text" class="form-control" id="ten-truyen" placeholder="Nhập tên truyện">
                                </div>
                                {{-- Tác giả --}}
                                <div class="form-group">
                                    <label for="tac-gia">Tác giả</label>
                                    <input value="{{$story->author}}" name='author' type="text" class="form-control" id="tac-gia" placeholder="Nhập tác giả">
                                </div>
                                {{-- Nhà xuất bản --}}
                                <div class="form-group">
                                    <label for="nha-xuat-ban">Nhà xuất bản</label>
                                    <input value="{{$story->publisher}}" name='publisher' type="text" class="form-control" id="nha-xuat-ban" placeholder="Nhập nhà xuất bản">
                                </div>
                                {{-- Nguồn --}}
                                <div class="form-group">
                                    <label for="nguon">Nguồn</label>
                                    <input value= "{{$story->source}}" name='source' type="text" class="form-control" id="nguon" placeholder="Nhập nguồn">
                                </div>
                                {{-- Tập phim --}}
                                <div class="form-group">
                                    <label for="tap-phim">Tập phim</label>
                                    <input value="{{$story->episode}}" name='episode' type="number" min="0" class="form-control" id="tap-phim" placeholder="Nhập tập phim">
                                </div>
                                {{-- Trạng thái --}}
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select value="{{$story->status}}" name='status' class="form-control">
                                        <option>Mở</option>
                                        <option>Đóng</option>
                                    </select>
                                </div>
                                {{-- Tóm lượt --}}
                                <div class="form-group">
                                    <label for="tom-luot">Tóm lượt</label>
                                    <textarea value="{{$story->summary}}" name='summary' rows="6" class="form-control" id="tom-luot" placeholder="Nhập tóm lượt">{{$story->summary}}</textarea>
                                </div>
                                {{-- Nội dung --}}
                                <div class="form-group">
                                    <label for="noi-dung">Nội dung</label>
                                    <textarea value="{{$story->content}}" name='content' rows="10" class="form-control" id="noi-dung" placeholder="Nhập nội dung">{{$story->content}}</textarea>
                                </div>
                                {{-- Số lần đọc --}}
                                <div class="form-group">
                                    <label for="so-lan-doc">Số lần đọc</label>
                                    <input value="{{$story->number_of_reads}}" name='number_of_reads' type="number" min="0" class="form-control" id="so-lan-doc" placeholder="Nhập số lần đọc">
                                </div>
                                {{-- Số lần tải --}}
                                <div class="form-group">
                                    <label for="so-lan-tai">Số lần tải</label>
                                    <input value="{{$story->number_of_downloads}}" name='number_of_downloads' type="number" min="0" class="form-control" id="so-lan-tai" placeholder="Nhập số lần tải">
                                </div>
                                {{-- Thể loại --}}
                                <div class="form-group">
                                    <label>Thể loại</label>
                                    <select name='category_id' class="form-control">
                                        @foreach($categories as $key=>$category)
                                        <option value="{{$category->id}}" {{$story->category_id === $category->id ? "selected" : ""}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Thể loại --}}
                                <div class="form-group">
                                    <label>Tac gia</label>
                                    <select name='author_id' class="form-control">
                                        @foreach($authors as $key=>$author)
                                        <option value="{{$author->id}}" {{$story->author_id === $author->id ? "selected" : ""}}>{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Slug --}}
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input value="{{$story->slug}}" name='slug' type="text"  class="form-control" id="slug" placeholder="Nhập slug">
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                    </form>
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layout._footer')