@include('pages.includes.header')
      <section>
         <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel" style="height: 270px">
            <div class="carousel-inner">
               <div class="item slides active">
                  <div class="slide-1" style="background-image: url(/custom_assets/images/slider/homepage-banner-Community.jpg);background-size: contain;height: 270px;"></div>
               </div>
            </div>
         </div>
         </section>
      <!--end layer slider section-->
      <!--search bar-->
      <section class="searchbar mt-5 mb-5">
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
                              <div class="col-sm-12">
                                 <div class="main-heading text-center">
                                    <h2>Select the Category</h2>
                                 </div>
                              </div>
                              <div class="col-md-12 mb-5">
                                 <section class="content-rows carousel-row">
                                    <div class="clearfix category-block content-box community-cate">
                                       <h3>Select Category</h3>
                                       <ul>
                                          <li>
                                             <a title="Tender Notices" href="https://www.quikr.com/community/tender-notices+kanpur+qccc1b8533">
                                             <i class="icon-tendernotices"></i>
                                             <label>Tender Notices</label>
                                             </a>
                                          </li>
                                          <li>
                                             <a title="Announcements" href="https://www.quikr.com/community/announcements+kanpur+qccc1b8533">
                                             <i class="icon-announcements"></i>
                                             <label>Announcements</label>
                                             </a>
                                          </li>
                                          <li>
                                             <a title="Car Pool - Bike Ride" href="https://www.quikr.com/community/car-pool-bike-ride+kanpur+qccc1b8533">
                                             <i class="icon-carpool-bikeride"></i>
                                             <label>Car Pool - Bike Ride</label>
                                             </a>
                                          </li>
                                          <li>
                                             <a title="Charity - Donate - NGO" href="https://www.quikr.com/community/charity-donate-ngo+kanpur+qccc1b8533">
                                             <i class="icon-charity-donate-ngo"></i>
                                             <label>Charity - Donate - NGO</label>
                                             </a>
                                          </li>
                                          <li>
                                             <a title="Lost - Found" href="https://www.quikr.com/community/lost-found+kanpur+qccc1b8533">
                                             <i class="icon-lost-found"></i>
                                             <label>Lost - Found</label>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </section>
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
                     <h2>Recently Posted Ads</h2>
                  </div>
               </div>
            </div>
            <div class="row bg-white pt-5">
               <div class="owl-carousel mt-5">
                   @foreach($ads as $ads_row)
                  <div class="item p-3">
                     <div class="req-item" style="" aria-hidden="false" tabindex="0">
                        <a href="{{url('/view_ad/'.$ads_row->id)}}"  rel="noopener noreferrer" class="require-box clearfix" tabindex="0">
                           <h3 class="heading">{{$ads_row->title}}</h3>
                           <div class="require-contain">
                              <div class="require-detail">
                                 <i class="pofile-icon"></i>
                                 <div class="details">
                                    <p>Posted By: {{$ads_row->useracc->name}}</p>
                                    <p>{{$ads_row->created_at->toDateString()}}</p>
                                    <p></p>
                                 </div>
                              </div>
                              <p class="unverified">UNVERIFIED</p>
                           </div>
                        </a>
                     </div>
                  </div>
                       @endforeach
               </div>
               <!--end carousel-->
            </div>
         </div>
      </section>
      <!--End Premium Advertisement-->
      <section>
         <div class="container">
            <div class="marginBT mb-5">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="main-heading text-center">
                        <h2>Trending Services</h2>
                     </div>
                  </div>
               </div>
               <div class="row pt-5">
                  <div class="col-md-4">
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/pest-control.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Pest Control</p>
                              <button class="enqNow">Enquire Now</button>
                           </div>
                        </a>
                     </div>
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/mover.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Packers &amp; Movers</p>
                              <button class="enqNow">Enquire Now</button>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/interior-design.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Interior Design</p>
                              <button class="enqNow">Explore</button>
                           </div>
                        </a>
                     </div>
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/home-clean.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Home Cleaning</p>
                              <button class="enqNow">Enquire Now</button>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/security-device.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Security Devices</p>
                              <button class="enqNow">Enquire Now</button>
                           </div>
                        </a>
                     </div>
                     <div class="smallImagesection">
                        <a class="" href="">
                           <img src="{{asset('/custom_assets/images/tour-package.jpeg')}}" alt="" title="">
                           <div class="smallImagetext">
                              <p class="truncateP">Tour Packages</p>
                              <button class="enqNow">Explore</button>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@include('pages.includes.footer')
