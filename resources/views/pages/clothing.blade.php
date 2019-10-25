@include('pages.includes.header')

    <!--start Layer slider-->
    <section>
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <div class="carousel-inner">
                <div class="item slides active">
                  <div class="slide-1" style="background-image: url(/custom_assets/images/slider/clothing-bg.jpg);"></div>
                  <div class="hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-5 p-5">
                                <hgroup>
                                    <h4>Trendy Dress Collections</h4><br>
                                    <h3>FOR ALL GENDERS</h3>
                                </hgroup>
                                <button class="btn btn-hero btn-lg" role="button">Visit Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--Category-->
    <!-- <section id="clothes-acc" class="pb-5 bg-white">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>Shop By Different Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="item">
                        <a href="#"><img src="images/clothing-cat-1.png" alt="carousel"></a>
                        <a href="#" class="item-hover"><button class="btn btn-default">Shop Now</button></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="item">
                        <div class="info">
                            <div class="headr"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> es </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">P</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> read </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">a</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Imes this </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">s</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> eek</font></font></div>
                         <a href="" class="btn-link right">
                             <span class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">women</font></font></span>
                             <span class="arrow"></span>
                         </a>
                         <a href="" class="btn-link right">
                             <span class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">man</font></font></span>
                             <span class="arrow"></span>
                         </a>
                         <a href="" class="btn-link right">
                             <span class="txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">child</font></font></span>
                             <span class="arrow"></span>
                         </a>
                     </div>
                 </div>
             </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="item">
                        <a href="#"><img src="images/clothing-cat-2.png" alt="carousel"></a>
                        <a href="#" class="item-hover"><button class="btn btn-default">Shop Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --><!--End Category-->

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
                              <div class="collection-leftsidebar sidebar col-sm-3 clearfix">
                                 <div class="sidebar-block collection-block">
                                    <div class="sidebar-title">
                                       <span>Fashion</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="list-cat">
                                          <li><a href="#">Women's Fashion </a></li>
                                          <li><a href="#">Men's Fashion </a></li>
                                          <li><a href="#">Luggage and Travel Bags </a></li>
                                          <li><a href="#">Childrens's Fashion </a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="sidebar-block filter-block">
                                    <div class="sidebar-title">
                                       <span>Shop by</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div id="tags-filter-content" class="sidebar-content">
                                       <!-- filter tags group -->
                                       <div class="filter-tag-group">
                                          <div class="tag-group" id="coll-filter-3">
                                             <p class="title">
                                                <span class="filter-title">Mark</span>
                                                <span class="show_filter_content">+</span>
                                             </p>
                                             <ul class="filter-content">
                                                <li><a href="#" title="Narrow selection to products matching brand 1"><span class="fe-checkbox"></span> Generic (467)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 2"><span class="fe-checkbox"></span> Fashion (346)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 3"><span class="fe-checkbox"></span> OEM (600)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 4"><span class="fe-checkbox"></span> Other (346)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 5"><span class="fe-checkbox"></span> Universal (600)</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="tags-filter-content" class="sidebar-content pt-3">
                                       <!-- filter tags group -->
                                       <div class="filter-tag-group">
                                          <div class="tag-group" id="coll-filter-3">
                                             <p class="title">
                                                <span class="filter-title">Sex</span>
                                                <span class="show_filter_content">+</span>
                                             </p>
                                             <ul class="filter-content">
                                                <li><a href="#" title="Narrow selection to products matching brand 1"><span class="fe-checkbox"></span> Women (467)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 2"><span class="fe-checkbox"></span> Men (346)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 3"><span class="fe-checkbox"></span> Unisex (600)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 4"><span class="fe-checkbox"></span> Girls (346)</a></li>
                                                <li><a href="#" title="Narrow selection to products matching brand 5"><span class="fe-checkbox"></span> Boys (600)</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="tags-filter-content" class="sidebar-content pt-3">
                                       <!-- filter tags group -->
                                       <div class="filter-tag-group">
                                          <div class="tag-group" id="coll-filter-3">
                                             <p class="title">
                                                <span class="filter-title">Price</span>
                                                <span class="show_filter_content">+</span>
                                             </p>
                                             <ul class="filter-content">
                                                <li><a href="#" title="Narrow selection to products matching tag Under $100"><span class="fe-checkbox"></span> Under $100</a></li>
                                                <li><a href="#" title="Narrow selection to products matching tag $100 - $200"><span class="fe-checkbox"></span> $100 - $200</a></li>
                                                <li><a href="#" title="Narrow selection to products matching tag Above $200"><span class="fe-checkbox"></span> Above $200</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sidebar-block tags-block">
                                    <div class="sidebar-title">
                                       <span>Brands</span>
                                       <i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
                                    </div>
                                    <div class="sidebar-content">
                                       <ul class="tags-inner tags">
                                          <!--vendor-->
                                          <li class="">
                                             <a href="#" title="Vendor 1">Brand 1</a>
                                          </li>
                                          <li class="">
                                             <a href="#" title="Vendor 2">Brand 2</a>
                                          </li>
                                          <li class="">
                                             <a href="#" title="Vendor 3">Brand 3</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="collection-mainarea col-sm-9 clearfix">
                                 <div class="collection_toolbar">
                                    <div class="toolbar_left">
                                       Items 1 to 16 of 40 total
                                    </div>
                                    <div class="toolbar_right">
                                       <div class="group_toolbar">
                                          <!-- View as -->
                                          <div class="grid_list">
                                             <span class="toolbar_title">Select View:</span>
                                             <ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
                                                <li data-option-value="fitRows" id="goGrid" class="active goAction " data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid">
                                                   <i class="fa fa fa-th"></i>
                                                </li>
                                                <li data-option-value="straightDown" id="goList" class="goAction " data-toggle="tooltip" data-placement="top" title="" data-original-title="List">
                                                   <i class="fa fa-th-list"></i>
                                                </li>
                                             </ul>
                                          </div>
                                          <!-- Sort by -->
                                          <div class="sortBy">
                                             <span class="toolbar_title">Sort By:</span>
                                             <div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
                                                <button id="sortButton">
                                                <span class="name">Featured</span><i class="fa fa-caret-down"></i>
                                                </button>
                                                <i class="sub-dropdown1"></i>
                                                <i class="sub-dropdown"></i>
                                             </div>
                                             <div id="sortBox" class="control-container dropdown-menu">
                                                <ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
                                                   <li class="sort manual"><a href="#">Featured</a></li>
                                                   <li class="sort price-ascending"><a href="#">Price, low to high</a></li>
                                                   <li class="sort price-descending"><a href="#">Price, high to low</a></li>
                                                   <li class="sort title-ascending"><a href="#">Alphabetically, A-Z</a></li>
                                                   <li class="sort title-descending"><a href="#">Alphabetically, Z-A</a></li>
                                                   <li class="sort created-ascending"><a href="#">Date, old to new</a></li>
                                                   <li class="sort created-descending"><a href="#">Date, new to old</a></li>
                                                   <li class="sort best-selling"><a href="#">Best Selling</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="collection-items clearfix">
                                    <div class="products">
                                        @foreach($ads as $ads_row)
                                       <div class="product-item col-sm-3">
                                          <div class="product">
                                             <div class="row-left">
                                                <a href="{{url('/view_ad/'.$ads_row->id)}}" class="hoverBorder container_item">
                                                   <div class="hoverBorderWrapper">
                                                      <img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;" class="img-responsive front" alt="Digital equipment">
                                                      <div class="mask"></div>
                                                   </div>
                                                </a>
                                                <span class="sale_banner">
                                                <span class="sale_text">-33.33%</span>
                                                </span>
                                             </div>
                                             <div class="row-right animMix">
                                                <div class="grid-mode">
                                                   <div class="product-title"><a class="title-5" href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></div>
                                                   <div class="rating-star">
                                                      <span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
                                                      </span>
                                                   </div>
                                                   <div class="product-price">
                                                      <span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$ads_row->currency}} {{$ads_row->price}}</span></span>
                                                      <del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
                                                   </div>
                                                </div>
                                                <div class="list-mode hide">
                                                   <div class="list-left">
                                                      <div class="product-title"><a class="title-5" href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></div>
                                                      <div class="rating-star">
                                                         <span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
                                                         </span>
                                                      </div>
                                                      <div class="product-description">
                                                          {{$ads_row->description}}
                                                      </div>
                                                   </div>
                                                   <div class="list-right">
                                                      <div class="product-price">
                                                         <span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$ads_row->currency}} {{$ads_row->price}}</span></span>
                                                         <del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                            @endforeach
                                    </div>
                                 </div>
                                 <div class="collection-bottom-toolbar">
                                    <div class="product-counter col-sm-6">
                                       Items 1 to 16 of 40 total
                                    </div>
                                    <div class="product-pagination col-sm-6">
                                       <div class="pagination_group">
                                          <ul class="pagination">
                                             <li class="prev"><a href="#">Prev</a></li>
                                             <li class="active"><a href="#">1</a></li>
                                             <li><a href="#">2</a></li>
                                             <li><a href="#">3</a></li>
                                             <li class="next"><a href="#">Next</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Premium Advertisement-->
      <section id="premium" class="pb-5 mb-0" style="background: #eee;">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="main-heading text-center">
                     <h2>Recently Viewed</h2>
                  </div>
               </div>
            </div>
            <div class="row pb-5">
               <div class="owl-carousel">
                   @foreach($ads as $ads_row)
                  <div class="item">
                     <div class="product-item col-sm-12">
                        <div class="product">
                           <div class="row-left">
                              <a href="" class="hoverBorder container_item">
                                 <div class="hoverBorderWrapper">
                                    <img src="{{asset('/images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}" style="height: 163px;" class="img-responsive front" alt="Digital equipment">
                                    <div class="mask"></div>
                                 </div>
                              </a>
                              <span class="sale_banner">
                              <span class="sale_text">-33.33%</span>
                              </span>
                           </div>
                           <div class="row-right animMix">
                              <div class="grid-mode">
                                 <div class="product-title"><a class="title-5" href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></div>
                                 <div class="rating-star">
                                    <span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
                                    </span>
                                 </div>
                                 <div class="product-price">
                                    <span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$ads_row->currency}} {{$ads_row->price}}</span></span>
                                    <del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
                                 </div>
                              </div>
                              <div class="list-mode hide">
                                 <div class="list-left">
                                    <div class="product-title"><a class="title-5" href="{{url('/view_ad/'.$ads_row->id)}}">{{$ads_row->title}}</a></div>
                                    <div class="rating-star">
                                       <span class="spr-badge" data-rating="5.0"><span class="spr-starrating spr-badge-starrating"><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i><i class="fa fa-star" style=""></i></span><span class="spr-badge-caption">1 review</span>
                                       </span>
                                    </div>
                                    <div class="product-description">
                                {{$ads_row->description}}
                                    </div>
                                 </div>
                                 <div class="list-right">
                                    <div class="product-price">
                                       <span class="price_sale"><span class="money" data-currency-usd="$200.00">{{$ads_row->currency}} {{$ads_row->price}}</span></span>
                                       <del class="price_compare"> <span class="money" data-currency-usd="$300.00">$300.00</span></del>
                                    </div>
                                 </div>
                              </div>
                           </div>
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

@include('pages.includes.footer')
