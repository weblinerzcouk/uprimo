@include('pages.includes.header')
      <section>
         <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <div class="carousel-inner">
               <div class="item slides active">
                  <div class="slide-1" style="background-image: url(/custom_assets/images/slider/matrimonial-bg.jpg);"></div>
                  <div class="hero">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8 col-md-offset-1">
                              <hgroup>
                                 <h3>Pick You Favourite</h3>
                                 <h4 class="pt-3">Outdoor Essential</h4>
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
      <section class="searchbar mt-5 mb-5">
         <!-- <div class="container">
            <div class="row" id="searchBar">
               <form method="post">
                  <div class="col-md-3 pt-3 pb-3">
                     <div class="label text-left">
                        <h5>City</h5>
                        <select class="select">
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3 pt-3 pb-3">
                     <div class="label text-left">
                        <h5>Category</h5>
                        <select class="select">
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3 pt-3 pb-3">
                     <div class="label text-left">
                        <h5>Price</h5>
                        <select class="select">
                        </select>
                     </div>
                  </div>
                  <div class="col-md-2 pt-5 pb-3">
                     <div class="pt-4">
                        <button type="submit" name="submit" class="search-btn">Search</button>
                     </div>
                  </div>
               </form>
            </div>
            </div> -->
      </section>
      <!--end search bar-->
      <section class="collection-content mt-5 mb-5">
         <div class="collection-wrapper">
            <div class="container">
               <div class="pt-5 pb-5">
                  <div id="shopify-section-collection-template" class="shopify-section">
                     <div class="collection-inner">
                        <!-- Tags loading -->
                        <div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
                        <div id="collection">
                           <div class="collection_inner">
                              <div class="collection-leftsidebar sidebar shadow col-sm-3 clearfix">
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>New Arrivals</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">New Home & Interior Products</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>OFFERS</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">Style Your Home at £3.99</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>SHOP BY ROOM</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">Bedroom</a></li>
                                          <li><a href="#">Living Room</a></li>
                                          <li><a href="#">Bathroom</a></li>
                                          <li><a href="#">Kids Room</a></li>
                                          <li><a href="#">Kitchen</a></li>
                                          <li><a href="#">Outdoor</a></li>
                                          <li><a href="#">Classic Collection</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>SHOP BY PRODUCT</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">View All</a></li>
                                          <li><a href="#">Cushions</a></li>
                                          <li><a href="#">Bed Linen</a></li>
                                          <li><a href="#">Towels</a></li>
                                          <li><a href="#">Bathmats</a></li>
                                          <li><a href="#">Shower Curtains</a></li>
                                          <li><a href="#">Blankets</a></li>
                                          <li><a href="#">Curtains</a></li>
                                          <li><a href="#">Rugs</a></li>
                                          <li><a href="#">Storage</a></li>
                                          <li><a href="#">Decorations</a></li>
                                          <li><a href="#">Candles & Candleholders</a></li>
                                          <li><a href="#">Glassware</a></li>
                                          <li><a href="#">Porcelain</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>CONSCIOUS SHOP</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">H&M Home</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="collection-mainarea col-sm-9 clearfix mb-5">
                                 <div class="containers">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <img src="{{asset('/custom_assets/images/hmgoepprod.jpg')}}" alt="test" class="img-responsive">
                                          <div class="carousel-caption">
                                             <h4>Family & Friends</h4>
                                             <h1>SUMMER WEEKEND</h1>
                                             <button class="shop-button">Shop Now</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--Premium Advertisement-->
                                 <section id="premium" class="bg-white pb-5 mb-0">
                                    <div class="containers">
                                       <div class="row p-3">
                                          <div class="col-sm-12">
                                             <div class="main-heading text-center">
                                                <h2>Product Carousel</h2>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row p-3 text-center">
                                          <div class="owl-carousel">

                                              @foreach($ads as $ads_row)
                                             <div class="adp">
                                                <div class="ads">
                                                   <a href="{{url('/view_ad/'.$ads_row->id)}}"><img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;"></a>
                                                   <div class="ads-title">
                                                      <p>
                                                         <a href="{{url('/view_ad/'.$ads_row->id)}}" class="m-0">{{$ads_row->title}}</a>
                                                      </p>
                                                      <p class="p-3">
                                                         <span class="price">{{$ads_row->currency}} {{$ads_row->price}}</span>
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                                  @endforeach
                                          </div>
                                          <!--end carousel-->
                                       </div>
                                    </div>
                                 </section>
                                 <!--End Premium Advertisement-->
                                 <!-- <div class="containers">
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="main-heading text-center">
                                             <h2>Shop Now</h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row pt-3">
                                       <div class="col-md-6 pb-3">
                                          <img src="images/hmgoepprod2.jpg" alt="test" class="img-responsive">
                                          <div class="carousel-caption">
                                             <h2>Outdoor Essential</h2>
                                             <h4><em>Minimal effort, maximal style</em></h4>
                                             <button class="shop-button">Shop Now</button>
                                          </div>
                                       </div>
                                       <div class="col-md-6 pb-3">
                                          <img src="images/hmgoepprod3.jpg" alt="test" class="img-responsive">
                                          <div class="carousel-caption" style="top: 20px;">
                                             <h3>Pick You Favourite</h3>
                                             <h1>APPLE OF MY EYE</h1>
                                             <button class="shop-button">Shop Now</button>
                                          </div>
                                       </div>
                                    </div>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@include('pages.includes.footer')
