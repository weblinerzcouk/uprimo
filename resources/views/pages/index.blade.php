@include('pages.includes.header')
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div id="responsive-nav" class="col-md-6 col-sm-12 responsive-width-top">
                        <div class="category-nav show-on-click">
                            <span class="category-header">Categories <i class="fa fa-list"></i></span>
                            <ul class="category-list open">
                                @foreach($categories as $category_row)
                                <li><a href="{{url('/category/'.$category_row->id)}}">{{$category_row->name}}</a></li>
                                @endforeach
                                <li><a href="{{url('/all_categories')}}">View All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 responsive-width-top">
                        <div >

                        </div>
                        <div class="links text-right">
                            <a class="nav-toggle"><button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button></a>
                            <!-- <a href="#">About</a>
                            <a href="blogs.html">Blog</a>
                            <a href="#">Contact</a>
                            <a href="post_ads.blade.php">+ Make new Ad</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section><!--End Header section-->

<!--start Layer slider-->

<section>
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <div class="carousel-inner">
                <div class="item slides active">
                  <div class="slide-1" style="background-image: url(custom_assets/images/slider/index-banner.jpg);"></div>
                  <div class="hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <hgroup>
                                    <h3>LAPTOPS ON HUGE</h3>
                                    <h1>SALE</h1>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--Premium Advertisement-->
    <section id="categories" class="bg-white pt-5 pb-5">
        <div class="container">
            <div class="row pb-5">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Browse Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                @foreach($categories1 as $categories1_row)
                <div class="col-md-3 col-sm-6">
                    <div class="category">
                        <div class="category-icon {{$categories1_row->color}}">
                            <i class="fa {{$categories1_row->icon}} fa-2x"></i>
                        </div>
                        <h4><a href="{{url('/category/'.$categories1_row->id)}}">{{$categories1_row->name}}</a></h4>
                      <p>{{$categories1_row->description}}</p>
                        <p class="mb-30">Others  (160)</p>
                        <a href="{{url('/category/'.$categories1_row->id)}}" class="jobs-btn">See all ads</a>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4 mx-auto col-md-offset-4 text-center">
                    <a href="{{url('/all_categories')}}" class="btn btn-default">See all categories</a>
                </div>
            </div>
        </div>
    </section>

    <!--Premium Advertisement-->
<section id="premium" class="bg-white pb-5 mb-0" style="background-image: url(custom_assets/images/index-premium-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-heading text-center">
                    <h2>Featured Ads</h2>
                </div>
            </div>
        </div>
        <div class="row pb-5">
            <div class="owl-carousel">
                @foreach($ads as $ads_row)
                    @if($ads_row->featured_status==1)
                <div class="item">
                    <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" alt="carousel"></a>
                    <div class="item-title"><a href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->currency}} {{$ads_row->price}}</a></div>
                    <!-- <a href="product-details.html" class="item-hover"><span>$199</span></a> -->
                </div>
                    @endif
                    @endforeach
            </div><!--end carousel-->
        </div>
    </div>
</section>
    <!--End Premium Advertisement-->

    <section class="index_banner">
        <div class="banner-image bg-white">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-md-5 pl-2 pt-3">
                      <div class="slider-content slider-animated-1">
                       <h2 class="animated banner-heading">ARE YOU READY</h2>
                       <label class="animated pb-2">For Posting your Ads on</label>
                       <label class="animated">and more... Q3 2017 Edition</label>
                       <a href="" class="btn btn-default">Get Started</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!--Classify Advertisement-->
    <section id="advertisement" class="bg-white pt-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Classified Ads<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="nav nav-pills">
                      <li class="nav-item active">
                        <a class="nav-link" data-toggle="pill" href="#home">Spotlight</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2">Near me</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section class="ads-title bg-white">
        <div class="container-fluid bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pr-0">
                        <h4>All Products</h4>

                    </div>
                    <div class="col-sm-3">
                        <label>Sort by</label>
                        <select class="select">
                            <option>Price: Lower First</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Show</label>
                        <select class="show-listing">
                            <option>12</option>
                        </select>
                    </div>
                    <div class="col-sm-1 change-view">
                        <a href="" class="change-view-btn active-view-btn"><i class="fa fa-th-list "></i></a>
                        <a href="" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
        <div class="tab-content mt-5 mb-5">
          <div class="tab-pane container active" id="home">
              <div class="row">
                <div class="col-md-12 content content1">
                    <div class="row">

                        @foreach($ads as $ads_row)
                        <div class="col-md-3 col-sm-6 adp">
                            <div class="ads">
                                <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;"></a>
                                <div class="ads-title">
                                    <p><a href="{{url('/view_ad/'.$ads_row->id)}}">{{str_limit($ads_row->title,30)}}</a></p>
                                    <hr class="m-0">
                                    <p class="p-2"><span class="price">{{$ads_row->currency}} {{$ads_row->price}}</span> <button class="btn btn-default">Contact Seller</button></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button class="btn btn-green">See all ads</button>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane container fade" id="menu1">

          </div>
          <div class="tab-pane container fade" id="menu2">

          </div>
        </div>

        </div>
    </section><!--end advertisement-->

    <!-- <section id="advertisement" class="bg-white pt-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Our Partners<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/1.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/2.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/3.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/4.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/5.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/1.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>

                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/1.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>

                <div class="p-3 col-12 col-md-6 col-lg-3 pb-5">
                    <div class="client-wrapper">
                        <div class="wrap-img">
                            <img src="images/1.png" class="img-responsive clients-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <!-- <section class="post_ads_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="main-heading mt-5">
                        <h2 class="p-0">Browse Categories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-12 pt-5 pb-5">
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="vehicles.blade.php"><h4 class="m-2">Vehicle <span class="fa fa-car fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="electronics.blade.php"><h4 class="m-2">Electronics <span class="fa fa-laptop fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="classified_sports.html"><h4 class="m-2">Sports & Outdoor <span class="fa fa-soccer-ball-o fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="clothing.blade.php"><h4 class="m-2">Clothing <span class="fa fa-shopping-bag fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="vehicles.blade.php"><h4 class="m-2">Vehicle <span class="fa fa-car fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="electronics.blade.php"><h4 class="m-2">Electronics <span class="fa fa-laptop fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="classified_sports.html"><h4 class="m-2">Sports & Outdoor <span class="fa fa-soccer-ball-o fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="clothing.blade.php"><h4 class="m-2">Clothing <span class="fa fa-shopping-bag fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="vehicles.blade.php"><h4 class="m-2">Vehicle <span class="fa fa-car fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="electronics.blade.php"><h4 class="m-2">Electronics <span class="fa fa-laptop fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="classified_sports.html"><h4 class="m-2">Sports & Outdoor <span class="fa fa-soccer-ball-o fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                    <div class="col-md-3 mb-5 p-l-5 p-r-5 background-white">
                        <div class="category-box p-3">
                            <a href="clothing.blade.php"><h4 class="m-2">Clothing <span class="fa fa-shopping-bag fa-2x" style="float: right;"></span></h4>
                            <p>(298 Ads)</p></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mx-auto col-md-offset-4 pb-5 text-center">
                    <a href="" class="btn btn-default">See all categories</a>
                </div>
            </div>
        </div>
    </section> -->
    <!--Footer-->
   @include('pages.includes.footer')
