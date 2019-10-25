@include('pages.includes.header')
      <!--start Layer slider-->
      <section>
         <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <div class="carousel-inner">
               <div class="item slides active">
                  <div class="slide-1" style="background-image: url(/custom_assets/images/slider/realestate_bg.jpg);background-color: rgb(2,132,130);opacity: 0.6;"></div>
                  <div class="hero">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6 col-md-offset-5">
                              <hgroup>
                                 <h3>GET YOUR DREAM</h3>
                                 <h1>HOUSE</h1>
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
      <!-- Filter form section -->
      <div class="filter-search">
         <div class="container">
            <form class="filter-form">
               <div class="row pt-2 pb-2">
                  <div class="col-lg-8 search-text pt-2 pb-2">
                     <input type="text" placeholder="Enter a street name, address number or keyword">
                  </div>
                  <div class="col-lg-2 col-sm-6 text-center pt-2 pb-2">
                     <a href=""><button class="sale-rent-btn">For Sale</button></a>
                  </div>
                  <div class="col-lg-2 col-sm-6 text-center pt-2 pb-2">
                     <a href=""><button class="sale-rent-btn">To Rent</button></a>
                  </div>
               </div>
               <div class="row srch-rad">
                  <div class="col-md-6 pt-2 pb-2 ">
                     <div class="row">
                        <div class="col-md-4">
                           <label>Search Radius</label>
                        </div>
                        <div class="col-md-8">
                           <select>
                              <option value="category">This area only</option>
                              <option>...</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 pt-2 pb-2 ">
                     <div class="row">
                        <div class="col-md-4">
                           <label>Property Type</label>
                        </div>
                        <div class="col-md-8">
                           <select>
                              <option value="category">Category</option>
                              <option>Flat</option>
                              <option>Apartment</option>
                              <option>Home</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 pt-2 pb-2 ">
                     <div class="row price">
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-4">
                                 <label>Price Range</label>
                              </div>
                              <div class="col-md-4">
                                 <select>
                                    <option value="category">No Min</option>
                                    <option>...</option>
                                 </select>
                              </div>
                              <div class="col-md-4">
                                 <select>
                                    <option value="category">No Max</option>
                                    <option>...</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-4">
                                 <label>No. of Bedrooms</label>
                              </div>
                              <div class="col-md-4">
                                 <select>
                                    <option value="category">No Min</option>
                                    <option>...</option>
                                 </select>
                              </div>
                              <div class="col-md-4">
                                 <select>
                                    <option value="category">No Max</option>
                                    <option>...</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- Filter form section end -->
      <!--end search bar-->
      <!--Premium Advertisement-->
      <section class="feature-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="main-heading text-center">
                     <h2>Featured Listings<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                  </div>
               </div>
            </div>
            <div class="row pb-5">
               <div class="owl-carousel">
                   @foreach($ads as $ads_row)
                       @if($ads_row->featured_status==1)
                  <div class="item">
                     <!-- feature -->
                     <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="{{asset('/images/ads/'.$ads_row->user.'/'.$ads_row->display_pic)}}" style="background-image: url(&quot;/images/ads/{{$ads_row->user}}/{{$ads_row->display_pic}}&quot;);">
                           @if($ads_row->ad_type==null)
                            <div class="sale-notic">FOR SALE</div>
                               @else
                                <div class="rent-notic-notic">FOR RENT</div>
                               @endif
                        </div>
                        <div class="feature-text">
                           <div class="text-center feature-title">
                              <h5>{{$ads_row->city}}</h5>
                              <p><i class="fa fa-map-marker"></i> {{$ads_row->location}},{{$ads_row->city}}</p>
                           </div>
                           <div class="room-info-warp">
                              <div class="room-info">
                                 <div class="rf-left">
                                    <p><i class="fa fa-th-large"></i> {{ $ads_row->max_area}} Square foot</p>
                                    <p><i class="fa fa-bed"></i> {{$ads_row->rooms}} Bedrooms</p>
                                    <p><i class="fa fa-car"></i> 2 Garages</p>
                                 </div>
                              </div>
                              <div class="room-info">
                                 <div class="rf-left">
                                    <p><i class="fa fa-user"></i> {{$ads_row->useracc->name}} </p>
                                 </div>
                                 <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                 </div>
                              </div>
                           </div>
                           <a href="{{url('/view_ad/'.$ads_row->id)}}" class="room-price">${{$ads_row->price}}</a>
                        </div>
                     </div>
                  </div>
                       @endif
                       @endforeach

               </div>
               <!--end carousel-->
            </div>
         </div>
      </section>
      <!--End Premium Advertisement-->
      <!--Classify Advertisement-->
      <section id="advertisement" class="bg-white pt-5 mb-0">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="main-heading text-center">
                     <h2>Recently Posted Ads<br><label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 col-md-offset-1 text-center">
                  <ul class="nav nav-pills">
                     <li class="nav-item active">
                        <a class="nav-link" data-toggle="pill" href="#home">For Sale</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#rent">To Rent</a>
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
                  <div class="col-md-6 pr-0">
                     <h4>All Houses and Apartments</h4>
                  </div>
                  <div class="col-md-3">
                     <label>Sort by</label>
                     <select class="select">
                        <option>Price: Lower First</option>
                     </select>
                  </div>
                  <div class="col-md-2">
                     <label>Show</label>
                     <select class="show-listing">
                        <option>12</option>
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
      <section class="bg-white realestate-sec">
         <div class="container pt-5">
            <div class="row">
               <div class="col-md-3 mt-5">
                  <div class="collection-leftsidebar shadow sidebar clearfix">
                     <div class="sidebar-block collection-block">
                        <div class="sidebar-title">
                           <span>Search</span>
                           <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                        </div>
                        <div class="sidebar-content">
                           <ul class="list-cat">
                              <li>
                                 <select class="select">
                                    <option>Dubai</option>
                                 </select>
                              </li>
                              <li>
                                 <select class="select">
                                    <option>Property for sale</option>
                                 </select>
                              </li>
                              <li>
                                 <select class="select">
                                    <option>Residential for sale</option>
                                 </select>
                              </li>
                              <li>
                                 <select class="select">
                                    <option>>All Categories</option>
                                 </select>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block collection-block">
                        <div class="sidebar-title">
                           <span>Price</span>
                           <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                        </div>
                        <div class="sidebar-content">
                           <ul class="list-cat">
                              <li>
                                 <select class="select">
                                    <option>Min Price</option>
                                 </select>
                              </li>
                              <li>
                                 <select class="select">
                                    <option>Max Price</option>
                                 </select>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block collection-block">
                        <div class="sidebar-title">
                           <span>Bedrooms</span>
                           <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                        </div>
                        <div class="sidebar-content">
                           <ul class="list-cat">
                              <li>
                                 <select class="select">
                                    <option>Min</option>
                                 </select>
                              </li>
                              <li>
                                 <select class="select">
                                    <option>Max</option>
                                 </select>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block collection-block">
                        <div class="sidebar-title">
                           <span>Neighborhoods</span>
                           <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                        </div>
                        <div class="sidebar-content">
                           <ul class="list-cat">
                              <li>
                                 <input type="text" name="" placeholder="Type here">
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block collection-block">
                        <div class="sidebar-title">
                           <span>Buildings</span>
                           <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                        </div>
                        <div class="sidebar-content">
                           <ul class="list-cat">
                              <li>
                                 <input type="text" name="" placeholder="Type here">
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block tags-block">
                        <div class="sidebar-content">
                           <button class="btn btn-default m-0" style="width: 100%">Search</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="tab-content mt-5 mb-5">
                     <div class="tab-pane active" id="home">
                        <div class="row">
                           <div class="col-md-12 content content1">
                              <div class="row">
                                  @foreach($ads as $ads_row)
                                 <div class="col-md-4 col-sm-6 adp">
                                    <div class="ads realestate">
                                       <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 210px;"></a>
                                       <div class="ads-title">
                                          <a href="{{url('/view_ad/'.$ads_row->id)}}">
                                             <h3 class="title m-0"><span> {{$ads_row->title}} </span></h3>
                                          </a>
                                          <br>
                                           {{$ads_row->rooms}} Bedrooms <br>
                                           •  {{$ads_row->max_area}}<br>
                                          <span class="price"> {{$ads_row->currency}}  {{$ads_row->price}} <span>GBP</span> </span>
                                          <br>
                                          <br>
                                          Listed by:
                                          <span class="agent-logo-wrap"> <img class="agent-logo" data-src="images/realestate-agent1.jpg" src="{{asset('/custom_assets/images/realestate-agent1.jpg')}}"> </span>
                                       </div>
                                    </div>
                                 </div>
                                  @endforeach
                              </div>
                               <div class="row">
                                   <div class="col-md-4 col-md-offset-4 text-center">
                                       <button class="btn btn-green">See all ads</button>
                                   </div>
                               </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="rent">
                        <div class="row">
                            <div class="row">
                                @foreach($ads as $ads_row)
                                    <div class="col-md-4 col-sm-6 adp">
                                        <div class="ads realestate">
                                            <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 210px;"></a>
                                            <div class="ads-title">
                                                <a href="{{url('/view_ad/'.$ads_row->id)}}">
                                                    <h3 class="title m-0"><span> {{$ads_row->title}} </span></h3>
                                                </a>
                                                <br>
                                                {{$ads_row->rooms}} Bedrooms <br>
                                                •  {{$ads_row->max_area}}<br>
                                                <span class="price"> {{$ads_row->currency}}  {{$ads_row->price}} <span>GBP</span> </span>
                                                <br>
                                                <br>
                                                Listed by:
                                                <span class="agent-logo-wrap"> <img class="agent-logo" data-src="images/realestate-agent1.jpg" src="{{asset('/custom_assets/images/realestate-agent1.jpg')}}"> </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--end advertisement-->

@include('pages.includes.footer')
