@include('layout._header') 
@include('layout._sidebar') 
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách thể loại</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh sách thể loại</li>
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
            <div class="card">
              
              <div class="card-body">
                <table class="table table-bordered">
                  <thead style="text-align: center;">                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Tên</th>
                      <th>Mô tả</th>
                      <th >Ngày tạo</th>
                      <th >Ngày cập nhật</th>
                      <th colspan="2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td><a href="{{action('CategoryController@edit',$category->id)}}">Edit</a></td>
                        <td>
                          <form action="{{action('CategoryController@destroy', $category->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có muốn xóa thể loại này?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> --}}
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
