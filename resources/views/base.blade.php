@if(Auth::check())
{{-- template utama --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pengadaan Barang</title>

    <style media="screen">
        .numeric{
            float: right;
        }
    </style>

    <!-- Bootstrap Core CSS -->
    {{-- <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    {{ HTML::style('/vendor/bootstrap/css/bootstrap.min.css') }}

    <!-- MetisMenu CSS -->
    {{-- <link href="{{url('/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet"> --}}
    {{ HTML::style('/vendor/metisMenu/metisMenu.min.css') }}

    <!-- Custom CSS -->
    {{-- <link href="{{url('/dist/css/sb-admin-2.css')}}" rel="stylesheet"> --}}
    {{ HTML::style('/dist/css/sb-admin-2.css') }}
    {{ HTML::style('/dist/css/style.css') }}

    <!-- Custom Fonts -->
    {{-- <link href="{{url('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> --}}
    {{ HTML::style('/vendor/font-awesome/css/font-awesome.min.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="{{url('/vendor/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    {{ HTML::script('/vendor/bootstrap/js/bootstrap.min.js') }}

    <!-- jQuery -->
    {{-- <script src="{{url('/vendor/jquery/jquery.min.js')}}"></script> --}}
    {{ HTML::script('/vendor/jquery/jquery.min.js') }}

    <!-- Metis Menu Plugin JavaScript -->
    {{-- <script src="{{url('/vendor/metisMenu/metisMenu.min.js')}}"></script> --}}
    {{ HTML::script('/vendor/metisMenu/metisMenu.min.js') }}

    <!-- Custom Theme JavaScript -->
    {{-- <script src="{{url('/dist/js/sb-admin-2.js')}}"></script> --}}
    {{ HTML::script('/dist/js/sb-admin-2.js') }}

    {{ HTML::script('/js/app.js') }}

    @yield('head')

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Sistem Pengadaan Barang</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->

                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                            @if (!Auth::guest())
                                {{Auth::user()->name}}
                            @endif
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                        {{--</li>--}}
                        <li><a href="{{url('/edit/'.Auth::user()->id)}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        {{-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>

                        </li> --}}
                        <li>
                            <a href="{{url('/unit')}}"><i class="fa fa-dashboard fa-fw"></i> Unit </a>
                        </li>
                        <li>
                            <a href="{{url('/pengajuan')}}"><i class="fa fa-dashboard fa-fw"></i> Pengajuan </a>
                        </li>
                        <li>
                            <a href="{{url('/pengadaan')}}"><i class="fa fa-dashboard fa-fw"></i> Pengadaan </a>
                        </li>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('title')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @yield('body')
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>
@endif
