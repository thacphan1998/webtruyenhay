<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Quản lý Truyện</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @if (isset(Auth::user()->name))
                    <a href="#" class="d-block text-capitalize">{{Auth::user()->name}}</a>
                @else
                    <a href="#" class="d-block text-capitalize">Đăng nhập</a>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <!-- Quản lý truyện -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active parent" id="parent_quanlytruyen">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Quản lý Truyện
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/quanlytruyen')}}" class="nav-link active" id="quanlytruyen">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách truyện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/them-moi-truyen')}}" class="nav-link" id="them-moi-truyen">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới truyện</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Quản lý thể loại -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link parent" id="parent_quanlytheloai">
                        <i class="nav-icon fab fa-accusoft"></i>
                        <p>
                            Quản lý thể loại
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/quanlytheloai')}}" class="nav-link" id="quanlytheloai">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách thể loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/them-moi-the-loai')}}" class="nav-link" id="them-moi-the-loai">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới thể loại</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Quản lý người dùng -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link parent" id="parent_quanlynguoidung">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Quản lý người dùng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/quanlynguoidung')}}" class="nav-link" id="quanlynguoidung">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách người dùng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/them-moi-nguoi-dung')}}" class="nav-link" id="them-moi-nguoi-dung">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới người dùng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Quản lý comment -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link parent" id="parent_quanlybinhluan">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Quản lý comment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/quanlybinhluan')}}" class="nav-link" id="quanlybinhluan">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách comment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/them-moi-binh-luan')}}" class="nav-link" id="them-moi-binh-luan">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới comment</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- quanr lyý tác giả --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link parent" id="parent_quanlytacgia">
                        <i class="nav-icon fas  fa-chalkboard-teacher"></i>
                        <p>
                            Quản lý tác giả
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/quanlytacgia')}}" class="nav-link" id="quanlytacgia">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách tác giả</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/them-moi-tac-gia')}}" class="nav-link" id="them-moi-tac-gia">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới tác giả</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
