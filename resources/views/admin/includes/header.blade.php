<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/admin_assets/plugins/images/favicon.png')}}">
    <title>Uprimo Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('/admin_assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('/admin_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{url('/admin_assets/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{url('/admin_assets/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{url('/admin_assets/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('/admin_assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('/admin_assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('/admin_assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('/admin_assets/css/sidebar.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('/admin_assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <link href="{{url('/admin_assets/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/admin_assets/css/responsive.dataTables.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="{{url('/admin/dashboard')}}">
                    <!-- Logo icon image, you can use font-icon also -->
                    <b>
                        <!--This is dark logo icon--><img src="{{asset('/admin_assets/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{asset('/admin_assets/plugins/images/admin-logo.png')}}" alt="home" class="light-logo resp-logo-display" />
                        <img src="{{asset('/admin_assets/plugins/images/resp-logo.png')}}" alt="home" class="light-logo resp-logo" style="width: 30px" />
                    </b>
                </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <nav class="navbar navbar-expand-lg navbar-light navbar-sidebar">
                        <button type="button" id="sidebarCollapse" class="btn btn-success">
                            <span class="fa fa-bars"></span>
                        </button>
                    </nav>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li class="topbar">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('/admin_assets/plugins/images/users/varun.jpg')}}" alt="user" class="img-circle" width="36">
                        <span class="ml-2 user-text font-medium">Steve </span><span class="fa fa-angle-down ml-2 user-text"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                            <div class=""><img src="{{asset('/admin_assets/plugins/images/users/varun.jpg')}}" alt="user" class="rounded" width="80"></div>
                            <div class="ml-2">
                                <h4 class="mb-0">Steave Jobs</h4>
                                <p class=" mb-0 text-muted fs-14">varun@gmail.com</p>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{url('/admin/profile')}}"><i class="fa fa-user mr-1 ml-1"></i> My Profile</a>
                        <a class="dropdown-item"><i class="fa fa-money mr-1 ml-1"></i> My Balance</a>
                        <a class="dropdown-item"><i class="fa fa-envelope-o mr-1 ml-1"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"><i class="fa fa-cog mr-1 ml-1"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="{{ url('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                        <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <nav id="sidebar" class="">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Dashboard</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li class="sidebar-item">
                    <a href="{{url('/admin/dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" ><i class="fa fa-list-alt fa-fw" aria-hidden="true" ></i>Categories</a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="sub-category.html" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu"><a href="{{url('/admin/category')}}">All-categories</a> </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="sub-category.html" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu"><a href="{{url('/admin/attribute')}}">Categories-Attributes</a> </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" ><i class="fa fa-list-alt fa-fw" aria-hidden="true" ></i>Cities</a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="sub-category.html" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu"><a href="{{url('/admin/city')}}">All-Cities</a> </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" ><i class="fa fa-server fa-fw" aria-hidden="true" ></i>Ads</a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{url('/admin/ads')}}" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Ads</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('/admin/featured_ads')}}" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu">Featured Ads</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" ><i class="fa fa-user fa-fw" aria-hidden="true" ></i>Admin</a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="sub-admin.html" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Sub-admins</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{url('/admin/users')}}" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Users</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{url('/admin/package')}}" class="waves-effect"><i class="fa fa-university fa-fw" aria-hidden="true"></i>Membership Plan</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="waves-effect"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Account Settings</a>
                </li>
            </ul>
        </div>
    </nav>
