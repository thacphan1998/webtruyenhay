@include('layout._header')
@include('layout._sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Thêm mới truyện</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thêm mới truyện</li>
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
            <!-- form start -->
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div><br />
            @endif
            <form role="form" method="post" action="{{url('/create/story')}}" enctype="multipart/form-data">
              <div class="card-body">
                {{-- Tên truyện --}}
                <div class="form-group">
                  <input type="hidden" value="{{csrf_token()}}" name="_token" />
                  <label for="exampleInputEmail1">Tên truyện</label>
                  <input name="name" type="text" class="form-control" id="ten-truyen" placeholder="Nhập tên truyện">
                </div>
                {{-- Hình truyện --}}
                <div class="form-group">
                  <label for="image">Hình ảnh</label>
                  {{ csrf_field() }}
                  <input name="image" type="file" class="form-control-file" id="hinh-anh" placeholder="Chọn hình ảnh" accept="image/*">
                </div>
                {{-- Tác giả --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Tác giả</label>
                  <input name='author' type="text" class="form-control" id="tac-gia" placeholder="Nhập tác giả">
                </div>
                {{-- Nhà xuất bản --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nhà xuất bản</label>
                  <input name='publisher' type="text" class="form-control" id="nha-xuat-ban" placeholder="Nhập nhà xuất bản">
                </div>
                {{-- Nguồn --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nguồn</label>
                  <input name='source' type="text" class="form-control" id="nguon" placeholder="Nhập nguồn">
                </div>
                {{-- Tập phim --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Tập truyện</label>
                  <input name='episode' type="number" min="0" class="form-control" id="tap-phim" placeholder="Nhập tập phim">
                </div>
                {{-- Trạng thái --}}
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name='status' class="form-control">
                    <option>Mở</option>
                    <option>Đóng</option>
                  </select>
                </div>
                {{-- Tóm lượt --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Tóm lượt</label>
                  <textarea name='summary' rows="6" class="form-control" id="tom-luot" placeholder="Nhập tóm lượt"></textarea>
                </div>
                {{-- Nội dung --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nội dung</label>
                  <textarea name='content' rows="10" class="form-control" id="noi-dung" placeholder="Nhập nội dung"></textarea>
                </div>
                {{-- Số lần đọc --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Số lần đọc</label>
                  <input name='number_of_reads' type="number" min="0" class="form-control" id="so-lan-doc" placeholder="Nhập số lần đọc">
                </div>
                {{-- Số lần tải --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Số lần tải</label>
                  <input name='number_of_downloads' type="number" min="0" class="form-control" id="so-lan-tai" placeholder="Nhập số lần tải">
                </div>
                {{-- Thể loại --}}
                <div class="form-group">
                  <label>Thể loại</label>
                  <select name='category_id' class="form-control">
                    @foreach($categories as $key=>$category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                {{-- Slug --}}
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input name='slug' type="text" class="form-control" id="slug" placeholder="Nhập slug">
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