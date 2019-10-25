<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uprimo-Classified Ads</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{url('/custom_assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/inbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/layerslider/layerslider.css')}}">
    <style>
        .img-responsive{
            margin: 0 auto;
        }
        body{
            background: #eee;
        }
    </style>

</head>
<body>

<!--Start Header section-->
<section id="header">
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 responsive-width-top">

                    </div>
                    <div class="col-sm-6 responsive-width-top">
                        <div class="links text-right">
                            <select class="select-language">
                                <option>EN</option>
                                <option>FR</option>
                                <option>AR</option>
                            </select>
                            @if(Route::has('login'))
                                @auth()
                                    <a href="{{url('user/dashboard')}}">{{Auth::user()->name}}</a> |
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a> |

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <a href="{{url('user/dashboard')}}">My Account</a> |
                                    <a href="{{route('login')}}">Login</a> |
                                    <a href="{{route('register')}}">Register</a> |
                                    @endauth
                                  @endif
                            <a class="btn btn-default" href="{{url('/post_ad')}}">Post a Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end top bar-->

        <!--start menu-bar-->
        <div class="menu">
            <div class="menu-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('/custom_assets/images/logo.png')}}" alt="classify"></a>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row navbar-search">
                                <div class="col-sm-3 p-2 dropdown-search">
                                    <select class="select">
                                        <option value="null">All Cities</option>
                                        @foreach($cities as $cities_row)
                                            <option value="{{$cities_row->id}}">{{$cities_row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 p-2 dropdown-search">
                                    <select class="select">
                                        <option value="null">All Categories</option>
                                         @foreach($categories as $categories_row)
                                        <option value="{{$categories_row->id}}">{{$categories_row->name}}</option>
                                             @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 p-2 search-box">
                                    <input class="keyword" type="text" name="keyword" placeholder="Search here...">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end menu-bar-->
        </div>
