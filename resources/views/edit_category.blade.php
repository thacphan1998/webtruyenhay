@include('layout._header')
@include('layout._sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa thể loại</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sửa thể loại</li>
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
                        <form method="post" action="{{action('CategoryController@update', $id)}}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="put">
                            <div class="card-body">
                                {{-- Tên the loại --}}
                                <div class="form-group">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                    <label for="ten-the-loai">Tên thể loại</label>
                                    <input value="{{$category->name}}" name="name" type="text" class="form-control" id="ten-the-loai" placeholder="Nhập tên thể loại">
                                </div>
                                {{-- Mô tả --}}
                                <div class="form-group">
                                    <label for="description">Mô tả</label>
                                    <textarea value="{{$category->description}}" name="description" rows="10" class="form-control" id="description" placeholder="Nhập mô tả">{{$category->description}}</textarea>
                                </div>
                                {{-- Slug --}}
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input value="{{$story->slug}}" name='slug' type="text"  class="form-control" id="slug" placeholder="Nhập slug">
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