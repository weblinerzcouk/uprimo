@include('pages.includes.header')

    <!--start Layer slider-->
    <section id="slider">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:200px;">
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img style="margin: 0 !important;" src="{{asset('custom_assets/images/slider/cat-bg.png')}}" class="ls-bg" alt="Slide background"/>
                    <h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #fff; top:100px; ;font-weight: 700; left:116px; top:70px;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                        Categories
                    </h1>
                    <h2 class="ls-l" style="font-family:'Raleway', sans-serif;top:110px;font-weight: 300;height:40px;padding:5px 22px;font-size:17px;line-height:37px;color:#ffffff;border-radius:3px;white-space: nowrap;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        Choose a category for featured ads
                    </h2>
                </div>
            </div>
        </div>
    </section><!--end layer slider section-->

    <!--search bar-->
    <!-- <section id="searchBar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                        <input class="keyword" type="text" name="keyword" placeholder="Enter Keyword Here...">
                        <div class="label">
                            <select class="select">
                                <option>Fashion</option>
                                <option>House</option>
                                <option>Electronics</option>
                            </select>
                        </div>
                        <div class="label">
                            <select class="select">
                                <option>Location</option>
                                <option>USA</option>
                                <option>UK</option>
                            </select>
                        </div>
                        <a href="#" class="location">
                            <i class="fa fa fa-location-arrow "></i>
                        </a>
                        <div class="location-tip">
                            <span class="location-range">499 km</span>
                        </div>
                        <button type="submit" name="submit" class="search-btn">Go Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --> <!--end search bar-->

    <!--Category-->
    <section id="categories">
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Browse Categories</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $categories1_row)
                    <div class="col-md-3 col-sm-6 pt-5">
                        <div class="category">
                            <div class="category-icon {{$categories1_row->color}}">
                                <i class="fa {{$categories1_row->icon}} fa-2x"></i>
                            </div>
                            <h4><a href="{{url('/category/'.$categories1_row->id)}}">{{$categories1_row->name}}</a></h4>
                            <p>{{$categories1_row->description}}</p>
                            <p class="mb-30"><a href="#"> Others  (160)</a></p>
                            <a href="classified_jobs_new.html" class="{{$categories1_row->btn_color}}-btn">See all ads</a>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-4 mx-auto col-md-offset-4 pt-5 text-center">
                    <a href="" class="btn btn-default">See all ads</a>
                </div>
            </div>
        </div>
    </section><!--End Category-->



    <!--Footer-->
@include('pages.includes.footer')
