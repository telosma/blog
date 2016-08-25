
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <!--<span class="sr-only">Toggle navigation</span>-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Admin 600 Word for toeic</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        @include('admin.alert')
        <!-- Người dùng -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin cá nhân</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <!-- menu trái -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <!-- khung tìm kiếm -->
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <li>
                    <a href=""><i class="fa fa-home fa-fw"></i> Trang chủ web</a>
                </li>

                <li>
                    <a href=""><i class="fa fa-dashboard fa-fw"></i> Thống kê</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-file-word-o fa-fw"></i> Quản lý từ<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">Thêm từ mới</a>
                        </li>
                        <li>
                            <a href="">Danh sách từ</a>
                        </li>
                        <li>
                            <a href="">Update từ chưa học cho thành viên</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-group fa-fw"></i> Quản lý thành viên<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">Thêm thành viên mới</a>
                        </li>
                        <li>
                            <a href="">Danh sách thành viên</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-gears fa-fw"></i> Cài đặt<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Cài đặt 1</a>
                        </li>
                        <li>
                            <a href="#">Cài đặt 2</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>