@include('pages.includes.header')
    <!--start Layer slider-->
    <section>
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <div class="carousel-inner">
                <div class="item slides active">
                  <div class="slide-1" style="background-image: url(/custom_assets/images/slider/vehicle-bg.jpg);"></div>
                  <div class="hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-5">
                                <hgroup>
                                    <h3>GET YOUR DREAM</h3>
                                    <h1>VEHICLE</h1>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--search bar-->
    <section class="searchbar"style="position: relative;top:125px;">
        <div class="container">
            <div class="row" id="searchBar">
                <form method="post">
                <div class="col-md-2 p-2">
                    <input class="keyword" type="text" name="keyword" placeholder="City">
                </div>
                <div class="col-md-2 p-2">
                    <div class="label text-left p-0">
                        <select class="select">
                            <option>Make</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 p-2">
                    <div class="label text-left p-0">
                        <select class="select">
                            <option>Model</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 p-2">
                    <div class="label text-left p-0">
                        <select class="select">
                            <option>Min Price</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 p-2">
                    <div class="label text-left p-0">
                        <select class="select">
                            <option>Max Price</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 p-2">
                    <div class="">
                        <button type="submit" name="submit" class="search-btn">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section> <!--end search bar-->

    <!--Category-->
    <section id="premium" class="mb-5" style="position: relative;top:125px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Popular Used Car Near You</h2>

                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                @foreach($ads as $ads_row)
                <div class="col-md-3 col-sm-6 ">
                    <div class="item">
                        <a href="classified_vehicle_detail.html"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" alt="carousel"></a>
                        <div class="item-title-text"><a href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></div>
                        <div class="item-title"><a href="#">300 cars</a></div>
                        <a href="{{url('/view_ad/'.$ads_row->id)}}" class="item-hover"><span>${{$ads_row->price}}</span></a>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4 mx-auto col-md-offset-4 text-center">
                    <a href="" class="btn btn-default">See all categories</a>
                </div> -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="category">
                        <div class="category-icon">
                            <i class="fa fa-github fa-2x"></i>
                        </div>
                        <h4><a href="#">PETS</a></h4>
                        <p><a href="#">Design & Development Jobs  ( 20 )</a></p>
                        <p><a href="#"> Marketing Jobs  ( 09 )</a></p>
                        <p><a href="#"> Accounts & Finance Jobs  ( 15 )</a></p>
                        <p><a href="#"> Cleaning Jobs  ( 0 )</a></p>
                        <p><a href="#"> Others  ( 160 )</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category">
                        <div class="category-icon">
                            <i class="fa fa-wrench fa-2x"></i>
                        </div>
                        <h4><a href="#">SERVICES</a></h4>
                        <p><a href="#">Design & Development Jobs  ( 20 )</a></p>
                        <p><a href="#"> Marketing Jobs  ( 09 )</a></p>
                        <p><a href="#"> Accounts & Finance Jobs  ( 15 )</a></p>
                        <p><a href="#"> Cleaning Jobs  ( 0 )</a></p>
                        <p><a href="#"> Others  ( 160 )</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category">
                        <div class="category-icon">
                            <i class="fa fa-female fa-2x"></i>
                        </div>
                        <h4><a href="#">FASHION</a></h4>
                        <p><a href="#">Design & Development Jobs  ( 20 )</a></p>
                        <p><a href="#"> Marketing Jobs  ( 09 )</a></p>
                        <p><a href="#"> Accounts & Finance Jobs  ( 15 )</a></p>
                        <p><a href="#"> Cleaning Jobs  ( 0 )</a></p>
                        <p><a href="#"> Others  ( 160 )</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category">
                        <div class="category-icon">
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h4><a href="#">MATRIMONIALS</a></h4>
                        <p><a href="#">Design & Development Jobs  ( 20 )</a></p>
                        <p><a href="#"> Marketing Jobs  ( 09 )</a></p>
                        <p><a href="#"> Accounts & Finance Jobs  ( 15 )</a></p>
                        <p><a href="#"> Cleaning Jobs  ( 0 )</a></p>
                        <p><a href="#"> Others  ( 160 )</a></p>
                    </div>
                </div> -->
            </div>

        </div>
    </section><!--End Category-->
    <section class="car_services" style="position: relative;top:125px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Our Car Services<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5 mb-5">
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/featured.png')}}">
                            <h5>Featured Cars</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/insurance.png')}}">
                            <h5>Car Insurance</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/rto.png')}}">
                            <h5>RTO Services</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/servicing.png')}}">
                            <h5>Car Servicing</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/scanner.png')}}">
                            <h5>WZ Scanner</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="">
                        <div class="services-box text-center bg-grey">
                            <img src="{{asset('/custom_assets/images/images/inspected_cars.png')}}">
                            <h5>Inspected Cars</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Classify Advertisement-->
    <section id="advertisement" class="bg-white pt-5 mb-0" style="position: relative;top:125px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Recently Posted Cars<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="nav nav-pills">
                      <li class="nav-item active">
                        <a class="nav-link" data-toggle="pill" href="#home">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2">Random</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section class="ads-title" style="position: relative;top:125px;">
        <div class="container-fluid bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <h4>All Recent Cars</h4>

                    </div>
                    <div class="col-md-3">
                        <label>Sort by</label>
                        <select class="select">

                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Show</label>
                        <select class="show-listing">

                        </select>
                    </div>
                    <div class="col-md-1 change-view">
                        <a href="" class="change-view-btn active-view-btn"><i class="fa fa-th-list "></i></a>
                        <a href="" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" style="position: relative;top:125px;">
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
                                    <p><a href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></p>
                                    <hr class="m-0">
                                    <p class="p-3"><span class="price" style="font-size: 15px;">{{$ads_row->currency}} {{$ads_row->price}}</span> <button class="btn btn-default">Contact Seller</button></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="btn btn-green">See all ads</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane container fade" id="menu1">
              <div class="row">
                  @foreach($ads as $ads_row)
                      <div class="col-md-3 col-sm-6 adp">
                          <div class="ads">
                              <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;"></a>
                              <div class="ads-title">
                                  <p><a href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></p>
                                  <hr class="m-0">
                                  <p class="p-3"><span class="price" style="font-size: 15px;">{{$ads_row->currency}} {{$ads_row->price}}</span> <button class="btn btn-default">Contact Seller</button></p>
                              </div>
                          </div>
                      </div>
                  @endforeach
                  <div class="col-md-4 col-md-offset-4 text-center">
                      <button class="btn btn-green">See all ads</button>
                  </div>
              </div>
          </div>
          <div class="tab-pane container fade" id="menu2">
              <div class="row">
                  @foreach($ads as $ads_row)
                      <div class="col-md-3 col-sm-6 adp">
                          <div class="ads">
                              <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;"></a>
                              <div class="ads-title">
                                  <p><a href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></p>
                                  <hr class="m-0">
                                  <p class="p-3"><span class="price" style="font-size: 15px;">{{$ads_row->currency}} {{$ads_row->price}}</span> <button class="btn btn-default">Contact Seller</button></p>
                              </div>
                          </div>
                      </div>
                  @endforeach
                  <div class="col-md-4 col-md-offset-4 text-center">
                      <button class="btn btn-green">See all ads</button>
                  </div>
              </div>
          </div>
        </div>

        </div>
    </section><!--end advertisement-->


    <section class="vehicle-banner2" style="position: relative;top:25px;">
        <div class="banner-image">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-md-4 col-md-offset-5 pl-2 ">
                      <div class="slider-content slider-animated-1">
                       <h2 class="animated banner-heading">GET YOUR DESIRED CAR</h2>
                       <label class="animated pb-2">SET THE WHEELS OF YOURS</label>
                       <label class="animated">DREAM CAR in motion</label>
                       <a href="" class="btn btn-default">Read Now</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
@include('pages.includes.footer')
