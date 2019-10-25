@include('pages.includes.header')
</header>
</section>
<link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/sidebar.css')}}">
    <!--start Layer slider-->
    <section id="slider">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:200px;">
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img style="margin: 0 !important;" src="{{asset('/custom_assets/images/slider/cat-bg.png')}}" class="ls-bg" alt="Slide background"/>
                    <h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #fff; top:100px; ;font-weight: 700; left:116px; top:70px;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                        My Dashoboard
                    </h1>
                    <h2 class="ls-l pt-4" style="font-family: Raleway, sans-serif; top: 110px; font-weight: 300; height: 40px; padding: 5px 22px; font-size: 17px; line-height: 37px; color: rgb(255, 255, 255); border-radius: 3px; white-space: nowrap;right: 0px; text-align: center; width: auto; border-width: 0px; margin-left: 0px; margin-top: 0px; transform-origin: 50% top 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.002, 0, 0, 0, 1); opacity: 1; visibility: visible;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        Home&emsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&emsp;Profile
                    </h2>
                </div>
            </div>
        </div>
    </section><!--end layer slider section-->

    <section class="pt-5 mt-5 fixed-header-margin">
            <div class="wrapper container">
               <!-- Sidebar  -->
               @include('pages.accounts.dashboard_sidebar')
               <!-- Page Content  -->
               <div id="content" class="pt-0">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-sidebar">
                     <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <span class="fa fa-bars"></span>
                        </button>
                     </div>
                  </nav>
                  <div class="container-fluid jd">
                     <div class="row">
                        <div class="col-md-12 bg-white">
                           <div class="change-plan">
                               <div class="col-sm-5">
                                   <h3>Change Your Plan</h3>
                                   <div class="label text-left">
                                    <select class="select mt-3 mb-5">
                                        <option>Select an option</option>
                                    </select>
                                </div>
                               </div>
                               <div class="col-sm-2 col-md-offset-1">
                                   <div class='circle'><span class="m-0">365</span><br>Ad Solds</div>
                               </div>
                               <div class="col-sm-2">
                                   <div class='circle2'><span class="m-0">365</span><br>Ad Solds</div>
                               </div>
                               <div class="col-sm-2">
                                   <div class='circle3'><span class="m-0">365</span><br>Ad Solds</div>
                               </div>
                           </div>
                        </div>
                     </div>

                     <div class="row mt-5 mb-5 my-packages">
                         <div class="col-md-6 p-2">
                             <div class="bg-white">
                                 <div class="my-packages-head">
                                 <h4>My Free Ads</h4>
                             </div>
                             <div class="my-packages-body">
                                 <div class="row">
                                     <div class="col-md-5">
                                         <div class='circle'><span class="m-0">0</span></div>
                                     </div>
                                     <div class="col-md-7 mt-5">
                                         <ul class="list-unstyled components pl-0 pr-5">
                                             <li>
                                                 My Active Ads &emsp; <span class="pull-right">0</span>
                                             </li>
                                             <li>
                                                 My Expired Ads &emsp; <span class="pull-right">0</span>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="col-md-6 col-md-offset-3 text-center">
                                         <button class="btn btn-default m-0 mt-5 mb-5">My Free Ads</button>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div>

                         <div class="col-md-6 p-2">
                             <div class="bg-white">
                                 <div class="my-packages-head1">
                                 <h4>Total Active Ads</h4>
                             </div>
                             <div class="my-packages-body1">
                                 <div class="row">
                                     <div class="col-md-5">
                                         <div class='circle2'><span class="m-0">0</span></div>
                                     </div>
                                     <div class="col-md-7 mt-5">
                                         <ul class="list-unstyled components pl-0 pr-5">
                                             <li>
                                                 Credits Used &emsp; <span class="pull-right">0</span>
                                             </li>
                                             <li>
                                                 Credits Remaining &emsp; <span class="pull-right">0</span>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="col-md-6 col-md-offset-3 text-center">
                                         <button class="btn btn-green m-0 mt-5 mb-5">Buy Ad Credits</button>
                                     </div>
                                 </div>
                             </div>
                             </div>
                         </div>
                     </div>

                     <div class="row mt-5 bg-white p-3 form-myaccount">
                         <form action="{{url('/user/profile')}}" method="post" enctype="multipart/form-data">
                             @csrf
                         <div class="col-md-10">
                             <h4>Manage your Name, ID and Email Addresses.</h4>
                             <label>Below are the name  and email addressess on file for your account.</label>
                         </div><br>
                             <div id="alrtmsg"></div>
                         <div class="col-md-2">
                             <button type="submit" class="btn btn-green m-0 mt-3 mb-3">Update</button>
                         </div>
                         <div class="col-md-10 col-md-offset-1">
                             <div class="row form">
                               <div class="form-group">
                                   <div class="col-md-4">
                                       <p>Your Name</p>
                                   </div>
                                   <div class="col-md-8">
                                       <input class="keyword" type="text" name="name" placeholder="Your Name" value="{{Auth::user()->name}}" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                 <div class="col-md-4">
                                     <p>Email Address</p>
                                 </div>
                                 <div class="col-md-8">
                                     <input class="keyword" type="text" name="email" placeholder="Your Email" value="{{Auth::user()->email}}" required>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-4">
                                     <p>Phone Number</p>
                                 </div>
                                 <div class="col-md-8">
                                     <input class="keyword" type="text" name="phone_no" placeholder="Phone No" value="{{Auth::user()->phone_no}}" required>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-4">
                                     <p>City</p>
                                 </div>
                                 <div class="col-md-8">
                                     <input class="keyword" type="text" name="city" placeholder="London">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-4">
                                     <p>You are a</p>
                                 </div>
                                 <div class="col-md-8">
                                     <input class="keyword" type="text" name="I_m" placeholder="Dealer">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-4">
                                     <p>Address</p>
                                 </div>
                                 <div class="col-md-8">
                                     <input class="keyword" type="text" name="address" placeholder="UK London">
                                 </div>
                             </div>
                                 <div class="form-group">
                                     <div class="col-md-4">
                                         <p>Profile Pic</p>
                                     </div>
                                     <div class="col-md-8">
                                         <input class="keyword file-upload" type="file" name="pic" id="file" placeholder="England">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
    <!--Category-->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--Footer-->
<script type="text/javascript">
  /*  $('#update_user_info').submit(function () {
        event.preventDefault();
        var str = '';
        $.ajax({
            url         : $(this).attr('action'),
            type        : 'post',
            data        : new FormData(this),
            processData : false,
            contentType : false,
            success     : function (result) {
                if(result.pic!=null)
                {
                $('.profile-pic').empty();
                $('.profile-pic').html(' <img src="/images/user/profile/'+result.id+'/'+result.pic+'" class="image-resposive">');
               }
                var str = '<p class="alert alert-danger alert-dismissible"><strong>Success!!</strong> &nbsp;&nbsp; Updated Successfully &nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                $('#alrtmsg').html(str);
            },
            error        : function (data) {

            }
        })
    });*/
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };

        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script>
@include('pages.includes.footer')
