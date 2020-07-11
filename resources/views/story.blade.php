@include('layout._header') 
@include('layout._sidebar') 
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách truyện</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh sách truyện</li>
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
                  <thead style="text-align: center">                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tên</th>
                      <th>Tác giả</th>
                      <th >Nhà xuất bản</th>
                      <th >Nguồn</th>
                      <th >Số tập</th>
                      <th >Tình trạng</th>
                      {{-- <th >Tóm tắt</th> --}}
                      {{-- <th >Nội dung</th> --}}
                      <th >Số lần đọc</th>
                      <th >Số lần tải</th>
                      <th >ID thể loại</th>
                      <th >User ID</th>
                      {{-- <th >Ngày tạo</th>
                      <th >Ngày cập nhật</th> --}}
                      <th colspan="2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($stories as $key=>$story)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$story->name}}</td>
                        <td>{{$story->author}}</td>
                        <td>{{$story->publisher}}</td>
                        <td>{{$story->source}}</td>
                        <td>{{$story->episode}}</td>
                        <td>{{$story->status}}</td>
                        {{-- <td>{{$story->summary}}</td> --}}
                        {{-- <td>{{$story->content}}</td> --}}
                        <td>{{$story->number_of_reads}}</td>
                        <td>{{$story->number_of_downloads}}</td>
                        <td>{{$story->category_id}}</td>
                        <td>{{$story->user_id}}</td>
                        {{-- <td>{{$story->created_at}}</td>
                        <td>{{$story->updated_at}}</td> --}}
                        <td><a href="{{action('StoryController@edit',$story->id)}}">Edit</a></td>
                        <td>
                          <form action="{{action('StoryController@destroy', $story->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có muốn xóa truyện này?')">Delete</button>
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
