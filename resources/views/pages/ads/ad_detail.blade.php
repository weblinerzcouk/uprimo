@include('pages.includes.header')
<link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/flaticon.css')}}">


      <!--End Header section-->
<main class="mt-5 mb-5">
    <section class="section-padding no-top gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="pricing-area">
                    <div class="col-md-5 col-xs-12 col-sm-8">
                        <div class="heading-zone">
                            <h1>{{$ad->title}}</h1>
                            <div class="short-history">
                                <ul>
                                    <li><b>{{$ad->created_at->toDateString()}}</b></li>
                                    <li>Category: <b><a href="#">{{$ad->getcatgacc->name}} </a></b></li>
                                    <li>Views: <b>666</b></li>
                                    <li><a href="{{url('/view_ad/'.$ad->id)}}">Edit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 detail_price col-xs-12">
                        <div class="singleprice-tag heading-zone">
                            <h1>$ {{$ad->price}}</h1>
                        </div>
                    </div>
                </div>
                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Single Ad -->
                    <div class="singlepage-detail">
                        <div id="single-slider" class="flexslider">
                            <ul class="slides">
                                @foreach($ad->adspics as $image)
                                <li><a href="{{url('/images/ads/'.$image->ad.'/'.$image->image)}}" data-fancybox="group"><img alt="" src="{{asset('/images/ads/'.$image->ad.'/'.$image->image)}}" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                @foreach($ad->adspics as $image)
                                <li><img alt="" src="{{asset('/images/ads/'.$image->ad.'/'.$image->image)}}"></li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="content-box-grid mt-5">
                            <!-- Heading Area -->
                            <div class="short-features">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        Description
                                    </h3>
                                </div>
                                <p>
                                  {{$ad->description}}
                                </p>
                                @if($ad->min_area!=null)
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Min Area</strong> :</span>   {{$ad->min_area}}
                                </div>
                                @endif
                                @if($ad->max_area!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Max Area</strong> :</span>   {{$ad->max_area}}
                                    </div>
                                @endif
                                @if($ad->rooms!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Rooms</strong> :</span>   {{$ad->rooms}}
                                    </div>
                                @endif
                                @if($ad->bathrooms!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Bathrooms</strong> :</span>   {{$ad->bathrooms}}
                                    </div>
                                @endif
                                @if($ad->brand!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Brand</strong> :</span>   {{$ad->brabd}}
                                    </div>
                                @endif
                                @if($ad->model!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Model</strong> :</span>   {{$ad->model}}
                                    </div>
                                @endif
                                @if($ad->fuel_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Fuel Type</strong> :</span>   {{$ad->fuel_type}}
                                    </div>
                                @endif
                                @if($ad->kms_driven!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>KMS Driven</strong> :</span>   {{$ad->kms_driven}}
                                    </div>
                                @endif
                                @if($ad->job_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Job Type</strong> :</span>   {{$ad->job_type}}
                                    </div>
                                @endif
                                @if($ad->role!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Role</strong> :</span>   {{$ad->role}}
                                    </div>
                                @endif
                                @if($ad->job_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Job Type</strong> :</span>   {{$ad->job_type}}
                                    </div>
                                @endif
                                @if($ad->min_salary!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Min Salary</strong> :</span>   {{$ad->min_salary}}
                                    </div>
                                @endif
                                @if($ad->max_salary!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Max Salary</strong> :</span>   {{$ad->max_salary}}
                                    </div>
                                @endif
                                @if($ad->max_salary!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Max Salary</strong> :</span>   {{$ad->max_salary}}
                                    </div>
                                @endif
                                @if($ad->experience!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Total Experience</strong> :</span>   {{$ad->experience}}
                                    </div>
                                @endif
                                @if($ad->localities!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Localities</strong> :</span>   {{$ad->localities}}
                                    </div>
                                @endif
                                @if($ad->product_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Product Type</strong> :</span>   {{$ad->product_type}}
                                    </div>
                                @endif
                                @if($ad->condition!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Condition</strong> :</span>   {{$ad->condition}}
                                    </div>
                                @endif
                                @if($ad->size!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Size</strong> :</span>   {{$ad->size}}
                                    </div>
                                @endif
                                @if($ad->clothing_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Clothing Type</strong> :</span>   {{$ad->clothing_type}}
                                    </div>
                                @endif
                                @if($ad->clothing_for!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Product Type</strong> :</span>   {{$ad->clothing_for}}
                                    </div>
                                @endif
                                @if($ad->age!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Age</strong> :</span>   {{$ad->age}}
                                    </div>
                                @endif
                                @if($ad->event!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Event</strong> :</span>   {{$ad->event}}
                                    </div>
                                @endif
                                @if($ad->start_date!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Start Date</strong> :</span>   {{$ad->start_date}}
                                    </div>
                                @endif
                                @if($ad->end_date!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>End Date</strong> :</span>   {{$ad->end_date}}
                                    </div>
                                @endif
                                @if($ad->start_time!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Start Time</strong> :</span>   {{$ad->start_time}}
                                    </div>
                                @endif
                                @if($ad->end_time!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>End Time</strong> :</span>   {{$ad->end_time}}
                                    </div>
                                @endif
                                @if($ad->event_category!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Event Category</strong> :</span>   {{$ad->event_category}}
                                    </div>
                                @endif
                                @if($ad->business_owner!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Business Owner</strong> :</span>   {{$ad->business_owner}}
                                    </div>
                                @endif
                                @if($ad->established_date!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Establish Date</strong> :</span>   {{$ad->established_date}}
                                    </div>
                                @endif
                                @if($ad->no_of_employees!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>No of Employees</strong> :</span>   {{$ad->no_of_employees}}
                                    </div>
                                @endif
                                @if($ad->working_days!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Working Days</strong> :</span>   {{$ad->working_days}}
                                    </div>
                                @endif
                                @if($ad->material!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Materials</strong> :</span>   {{$ad->material}}
                                    </div>
                                @endif
                                @if($ad->product_name!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Product Name</strong> :</span>   {{$ad->product_name}}
                                    </div>
                                @endif
                                @if($ad->ad_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Ad Type</strong> :</span>   {{$ad->ad_type}}
                                    </div>
                                @endif
                                @if($ad->pet_type!=null)
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Pet Type</strong> :</span>   {{$ad->pet_type}}
                                    </div>
                                @endif
                            </div>
                            <!-- Short Features  -->
                        </div>
                        <!-- Share Ad  -->
                    </div>
                    <!-- Single Ad End -->
                </div>
                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12 sticky-top-contact-card">
                    <div class="author-card">
                        <div class="author-img set-bg" data-setbg="img/author.jpg" style="background-image: url(/custom_assets/images/author.jpg);"></div>
                        <div class="author-info">
                            <h5>{{$ad->useracc->name}}</h5>
                            @if($ad->useracc->I_m!=null)
                            <p>{{$ad->useracc->I_m}}</p>
                                @else
                                <p>User</p>
                                @endif
                        </div>
                        <div class="author-contact">
                            <p><i class="fa fa-phone"></i>{{$ad->useracc->phone_no}}</p>
                            <p><i class="fa fa-envelope"></i>{{str_limit($ad->useracc->email,20)}}</p>
                        </div>
                    </div>
                    <div class="contact-form-card">
                        <h5>Do you have any question?</h5>
                        <form id="send_message_form" role="form" method="post"  enctype="multipart/form-data">
                           @csrf
                            <input type="hidden" name="receiver" value="{{$ad->useracc->id}}">
                            <input type="text" placeholder="Your name" name="name">
                            <input type="text" placeholder="Your email" name="email">
                            <textarea placeholder="Your Message" name="message"></textarea>
                            <button type="submit">SEND</button>
                        </form> <br>
                        <div id="alrtmsg"></div>
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
</main>
      <section id="advertisement">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="main-heading text-center">
                     <h2>Similar Items</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 content content1">
                  <div class="row">
                      @foreach($related_products as $related_products_row)
                     <div class="col-md-3 col-sm-6 adp">
                        <div class="ads">
                           <a href="{{url('/view_ad/'.$related_products_row->id)}}"><img src="{{asset('/images/ads/'.$related_products_row->id.'/'.$related_products_row->display_pic)}}" style="height: 168px;"></a>
                           <div class="ads-title">
                              <p><a href="{{url('/view_ad/'.$related_products_row->id)}}">{{$related_products_row->title}}</a></p>
                              <hr class="m-0">
                              <p class="p-3"><span class="price">£{{$related_products_row->price}}</span> <button class="btn btn-default">Contact Seller</button></p>
                           </div>
                        </div>
                     </div>
                          @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--start Layer slider-->
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
    </script>
<script src="{{asset('/custom_assets/js/slide.js')}}"></script>
      <!--Footer-->
   @include('pages.includes.footer')
<script type="text/javascript">
    $('#send_message_form').submit(function () {
        event.preventDefault();
        var str = '';
        $.ajax({
            url         : '/send_message',
            type        : 'post',
            data        : $('#send_message_form').serialize(),
            dataType    : 'json',
            success     : function (result) {
                str = '<p class="alert alert-danger alert-dismissible"><strong>'+result+'</strong> &nbsp;&nbsp; Your Message has been sent successfully <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                $('#alrtmsg').html(str)
            },
            error        : function (data) {
                var response = JSON.parse(data.responseText);
                var str = '';
                $.each(response.errors,function (i,item) {
                    var html = '<p class="alert alert-danger alert-dismissible"><strong>Error!!</strong> &nbsp;&nbsp; '+item+'&nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                    str = str + html;
                });
                $('#alrtmsg').html(str);
            }
        })
    });
</script>
