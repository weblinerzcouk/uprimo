@include('pages.includes.header')
<link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/sidebar.css')}}">
<style>
    table td label{
        color: #333;
    }
</style>
</header>
</section>
      <!--start Layer slider-->
      <section id="slider">
         <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:200px;">
               <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                  <img style="margin: 0 !important;" src="{{asset('/custom_assets/images/slider/cat-bg.png')}}" class="ls-bg" alt="Slide background"/>
                  <h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #fff; top:100px; ;font-weight: 700; left:116px; top:70px;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                     My Dashboard
                  </h1>
                  <h2 class="ls-l pt-4" style="font-family: Raleway, sans-serif; top: 110px; font-weight: 300; height: 40px; padding: 5px 22px; font-size: 17px; line-height: 37px; color: rgb(255, 255, 255); border-radius: 3px; white-space: nowrap;right: 0px; text-align: center; width: auto; border-width: 0px; margin-left: 0px; margin-top: 0px; transform-origin: 50% top 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.002, 0, 0, 0, 1); opacity: 1; visibility: visible;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                     Home&emsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&emsp;My Ads
                  </h2>
               </div>
            </div>
         </div>
      </section>
      <!--end layer slider section-->
      <section class="pt-5 mt-5 fixed-header-margin">
         <div class="wrapper container">
            <!-- Sidebar  -->
       @include('pages.accounts.dashboard_sidebar')
             <div id="content" class="pt-0">
                           <table class="table table-hover">
                             <thead>
                               <tr>
                                 <th scope="col">Photo</th>
                                 <th scope="col">Title</th>
                                 <th scope="col">Category</th>
                                 <th scope="col">Ad Status</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody id="termsrow">
                           @foreach($ads as $ads_row)
                            <tr id="row{{$ads_row->id}}">
                              <th scope="row">
                                 <div class="myad-pic border-radius-50">
                                    <img src="{{asset('images/ads/'.$ads_row->id.'/'.$ads_row->display_pic)}}">
                                 </div>
                              </th>
                              <td>{{$ads_row->title}}</td>
                              <td>{{$ads_row->getcatgacc->name}}</td>
                              <td class="text-success">@if($ads_row->status==1)Active @else InActive @endif</td>
                              <td>{{$ads_row->price}}</td>
                              <td>
                                 <div class="btn-group btn-group-sm" style="float: none;">
                                    <a type="button" href="{{url('/view_ad/'.$ads_row->id)}}" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></a>

                                    <a type="button" href="{{url('/user/update_ad/'.$ads_row->id)}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></a>

                                    <a type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></a>
                                 </div>
                                  <br>
                                  <label class="label label-danger"><a data-toggle="featured_ad" href="{{url('/featured_ad/'.$ads_row->id)}}" id="featured_link">@if($ads_row->featured_status==1)UnFeatured @else Featured   @endif</a></label>
                              </td>
                           </tr>
                            @endforeach
                        </tbody>
                     </table>
             </div>

         </div>
      </section>
      <!--Category-->
      <!--Footer-->
     @include('pages.includes.footer')
<script type="text/javascript">
    $(document).on('click','a[data-toggle=featured_ad]',function (e) {
        e.preventDefault();
        var str = '';
        $.ajax({
            url      : $(this).attr('href'),
            type     : 'get',
            dataType : 'json',
            success  : function (result) {
            $.each(result,function (i,item) {
                if(item.status==1)
                {
                    var dbtn = 'Active'
                }
                else{
                    var dbtn = 'InActive'
                }
                if(item.featured_status==1)
                {
                    featured_btn = 'UnFetaured'
                }
                else{
                    featured_btn = 'Featured'
                }
                var html = ' <tr id="row'+item.id+'">\n' +
                    '                              <th scope="row">\n' +
                    '                                 <div class="myad-pic border-radius-50">\n' +
                    '                                    <img src="/images/ads/'+item.id+'/'+item.display_pic+'">\n' +
                    '                                 </div>\n' +
                    '                              </th>\n' +
                    '                              <td>'+item.title+'</td>\n' +
                    '                              <td>'+item.getcatgacc.name+'</td>\n' +
                    '                              <td class="text-success">'+dbtn+'</td>\n' +
                    '                              <td>'+item.price+'</td>\n' +
                    '                              <td>\n' +
                    '                                 <div class="btn-group btn-group-sm" style="float: none;">\n' +
                    '                                    <a type="button" href="/view_ad/'+item.id+'" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></a>\n' +
                    '\n' +
                    '                                    <a type="button" href="/user/update_ad/'+item.id+'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></a>\n' +
                    '\n' +
                    '                                    <a type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></a>\n' +
                    '                                 </div>\n' +
                    '                                  <br>\n' +
                    '                                  <label class="label label-danger"><a data-toggle="featured_ad" href="/featured_ad/'+item.id+'" id="featured_link">'+featured_btn+'</a></label>\n' +
                    '                                  <label class="label label-success"><a href="#">Sold</a></label>\n' +
                    '                              </td>\n' +
                    '                           </tr>';
                str +=html;
            });
                $('#termsrow').html(str);

            } ,
            error   : function () {
                console.log('in error')
            }
        });
    });
</script>
