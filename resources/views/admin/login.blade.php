<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/admin_assets/plugins/images/favicon.png')}}">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('/admin_assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('/admin_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('/admin_assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('/admin_assets/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('/admin_assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
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
                <div class="top-left-parts">
                    <!-- Logo -->
                    <a class="logo" href="{{url('/admin/dashboard')}}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{url('/admin_assets/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" />
                        </b>
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">

                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper" class="m-0">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 pt-5 pb-5">
                        <div class="row">
                            <div class="col-md-6 bg-white shadow col-md-offset-3 mt-5">

                                <!-- form card login -->
                                <div class="card rounded-0 pt-5 pb-5">
                                    <div class="card-header text-center">
                                        <h1 class="mb-0">Login</h1>
                                    </div>
                                    <div class="card-body pt-3 pb-3">
                                        <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="{{url('/admin/login')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="uname1">User name</label>
                                                <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">

                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">

                                            </div>
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input">
                                                  <span class="custom-control-indicator"></span>
                                                  <span class="custom-control-description small text-dark">Remember me</span>
                                              </label>
                                          </div>
                                          <div class="text-center">
                                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                          </div>
                                      </form>
                                  </div>
                                  <!--/card-block-->
                              </div>
                              <!-- /form card login -->

                          </div>


                      </div>
                      <!--/row-->

                  </div>
                  <!--/col-->
              </div>
              <!--/row-->
          </div>
          <!--/container-->
          <footer class="footer left-0 text-center"> 2019 &copy; Uprimo Rights Reserved. </footer>
      </div>
      <!-- /#page-wrapper -->
  </div>

  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="{{asset('/admin_assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('/admin_assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="{{asset('/admin_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
  <!--slimscroll JavaScript -->
  <script src="{{asset('/admin_assets/js/jquery.slimscroll.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('/admin_assets/js/waves.js')}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{asset('/admin_assets/js/custom.min.js')}}"></script>
</body>

</html>
