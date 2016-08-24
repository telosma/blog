<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>Admin - 600 word for toeic</title>

        <!-- Bootstrap Core CSS -->
        <link href="{!! url('/css/bootstrap.min.css') !!}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{!! url('/css/metisMenu.min.css') !!}" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="{!! url('/css/dataTables.bootstrap.css') !!}" rel="stylesheet">

        <!-- Select DataTables CSS -->
        <link href="{!! url('/css/select.dataTables.css') !!}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{!! url('/css/jquery.dataTables.css') !!}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{!! url('/css/sb-admin-2.css') !!}" rel="stylesheet">

        <!-- My CSS -->
        <link href="{!! url('/css/mystyle.css') !!}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{!! url('/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">

        <!-- List CSS -->
        <link href="{!! url('/css/list.css') !!}" rel="stylesheet">

        <!-- Effeckt CSS-->
        <link href="{!! url('/css/effeckt.css') !!}" rel="stylesheet">

        @yield('style')

    </head>

    <body>

        <div id="wrapper">
            @include('admin.menu')
            <div id="page-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('main-title')</h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">@yield('sub-title')</div>

                            <div class="panel-body">
                                <!-- Trang thông báo lỗi-->
                                @include('block.error')

                                <!-- Trang tin nhắn -->
                                @include('block.message')
                                
                                <!-- Nội dung chính-->
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{!! url('/js/jquery-2.2.0.min.js') !!}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{!! url('/js/bootstrap.min.js') !!}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{!! url('/js/metisMenu.min.js') !!}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{!! url('/js/sb-admin-2.js') !!}"></script>

        <!-- My JavaScript -->
        <script src="{!! url('/js/myscript.js') !!}"></script>

        @yield('script')

    </body>

</html>
