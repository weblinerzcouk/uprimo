@include('pages.includes.header')
<link rel="stylesheet" type="text/css" href="{{asset('/custom_assets/css/sidebar.css')}}">
<style>
    table td label{
        color: #333;
    }
</style>
      <!--End Header section-->
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
                     Home&emsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&emsp;Profile
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
                  <div class="row my-ads">
                     <div class="col-md-12 pb-5">
                        <h4>My Ads <span class="text-success pull-right">Favourite Ads (21)</span></h4>
                     </div>
                     <div class="col-md-12">
                        <div class="table-responsive">
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
                           <tbody>
                            <tr>
                              <th scope="row">
                                 <div class="myad-pic border-radius-50">
                                    <img src="images/my-ad1.png">
                                 </div>
                              </th>
                              <td>Canon Dslr Camera D1200</td>
                              <td>Electronics</td>
                              <td class="text-success">Active</td>
                              <td>$200</td>
                              <td>
                                 <div class="btn-group btn-group-sm" style="float: none;">
                                    <button type="button" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></button>

                                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></button>

                                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">
                                 <div class="myad-pic border-radius-50">
                                    <img src="images/my-ad1.png">
                                 </div>
                              </th>
                              <td>Canon Dslr Camera D1200</td>
                              <td>Electronics</td>
                              <td class="text-success">Active</td>
                              <td>$200</td>
                              <td>
                                 <div class="btn-group btn-group-sm" style="float: none;">
                                    <button type="button" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></button>

                                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></button>

                                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">
                                 <div class="myad-pic border-radius-50">
                                    <img src="images/my-ad1.png">
                                 </div>
                              </th>
                              <td>Canon Dslr Camera D1200</td>
                              <td>Electronics</td>
                              <td class="text-success">Active</td>
                              <td>$200</td>
                              <td>
                                 <div class="btn-group btn-group-sm" style="float: none;">
                                    <button type="button" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></button>

                                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></button>

                                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">
                                 <div class="myad-pic border-radius-50">
                                    <img src="images/my-ad1.png">
                                 </div>
                              </th>
                              <td>Canon Dslr Camera D1200</td>
                              <td>Electronics</td>
                              <td class="text-success">Active</td>
                              <td>$200</td>
                              <td>
                                 <div class="btn-group btn-group-sm" style="float: none;">
                                    <button type="button" class="tabledit-edit-button btn btn-success waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-eye"></span></button>

                                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-pencil"></span></button>

                                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 2px;"><span class="fa fa-trash"></span></button>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Category-->
      <!--Footer-->
   @include('pages.includes.footer')
