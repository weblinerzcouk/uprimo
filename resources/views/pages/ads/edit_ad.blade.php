@include('pages.includes.header')


<style>
    .dropzone {
        text-align: center;
        background: #eee;
        padding: 50px;
    }
    .dropzone h1{
        font-weight: 400;
        font-size: 50px;
        color: #ccc;
    }
    .dropzone.is-dragover {
        background-color: #e6ecef;
    }
    .dragover {
        background-color: red;
    }
    textarea#editor{
        background: #eee;
        border: none;
        width: 100%;
    }
    .price {
        list-style-type: none;
        border: 1px solid #eee;
        margin: 0;
        padding: 0;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }
    .price .header-mid{
        background: #028482;
        color: white;
        font-size: 25px;
    }
    .price:hover {
        box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
    }
    .price .header {
        background-color: #7aba7a;
        color: white;
        font-size: 25px;
    }
    .price li {
        border-bottom: 1px solid #eee;
        padding: 10px;
        text-align: center;
    }
    .price .grey {
        background-color: #eee;
        font-size: 16px;
    }
    .btn.btn-post {
        display: inline-block;
        border-style: none;
        border: none;
        border: 1px solid #028482;
        width: 200px;
        height: auto;
        padding: 15px 10px;
        text-align: center;
        font-weight: lighter;
        background: #028482;
        border-radius: 3px;
        color: #fff;
        /* text-transform: uppercase; */
        margin-top: 30px;
        margin-bottom: 20px;
    }
    body{
        background-color: #eee;
    }
    .btn.btn-post {
        display: inline-block;
        border-style: none;
        border: none;
        border: 1px solid #028482;
        width: 200px;
        height: auto;
        padding: 15px 10px;
        text-align: center;
        font-weight: lighter;
        background: #028482;
        border-radius: 3px;
        color: #fff;
        /* text-transform: uppercase; */
        margin-top: 30px;
        margin-bottom: 20px;
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
                <h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #fff; top:100px; ;font-weight: 700; top:60px;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                    Update Ads
                </h1>
                <h2 class="ls-l" style="font-family: Raleway, sans-serif; top: 110px; font-weight: 300; height: 40px; padding: 5px 22px; font-size: 17px; line-height: 37px; color: rgb(255, 255, 255); border-radius: 3px; white-space: nowrap;right: 0px; text-align: center; width: auto; border-width: 0px; margin-left: 0px; margin-top: 0px; transform-origin: 50% top 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.002, 0, 0, 0, 1); opacity: 1; visibility: visible;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                    Home&emsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&emsp;Update Ads
                </h2>
            </div>
        </div>
    </div>
</section>
<!--end layer slider section-->
<!--404 page-->
<section class="post_ads_section">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-8 col-md-12">
                <form role="form" action="{{url('/user/update_ad')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="pt-4 bg-white double-border">
                        <div class="form-section category p-3">
                            <h2 class="theme-text-color">Post Your Ads</h2>
                            <p>Posting your ads on uprimo is free! However, all ads must follow our rules.</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 pb-5">
                                    <label class="ad-posting-label">Ad Title <span class="ad-posting-label">Enter a short title for your project</span></label>
                                    <input type="text" name="title" class="ad-posting" placeholder="e.g Brand new Sumsung s6 for sale" value="{{$ad->title}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pb-5">
                                    <label class="ad-posting-label">Category</label>
                                    <select class="ad-posting" id="select-category" name="category">
                                        @foreach($category as $category_row)
                                            <option value="{{$category_row->id}}">{{$category_row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-section p-3">
                            <div id="selected-category-form"></div>
                            <div class="row">
                                <div class="col-md-12 pb-5">
                                    <label class="ad-posting-label">Ad description</label>
                                    <div>
                                        <div>
                                            <input type="hidden" name="ad_id" value="{{$ad->id}}">
                                            <textarea id="editor" name="description" rows="10" cols="100">{{$ad->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pb-5 gallery-box">
                                    <label class="ad-posting-label">Upload Photos</label>
                                    <div class="" draggable='true'>
                                        <div class="gallery">
                                            <h1 class="text-center"><i><label style="color: #028482;"><input type="file" name="images[]" multiple="multiple" accept="image/*" required id="gallery-photo-add" style="visibility: hidden; position: absolute;">Choose Files</label> to upload</i></h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-detail-section mt-5 p-3 bg-white">
                        <div class="form-section p-3">
                            <h3 class="theme-text-color">Expected Selling Price</h3>
                            <div class="row pt-5">
                                <div class="col-md-6 pb-5">
                                    <label class="ad-posting-label">Price</label>
                                    <input type="text" class="ad-posting" name="price" id="sellingprice" placeholder="e.g $100" value="{{$ad->price}}">
                                </div>
                                <div class="col-md-6 pb-5">
                                    <label class="ad-posting-label">Location</label>
                                    <input type="text" class="ad-posting" name="location" id="location" placeholder="e.g Maracow" value="{{$ad->location}}">
                                </div>
                                @if(Route::has('login'))
                                    @auth()
                                        <div class="col-md-6">
                                            <div style="text-align: left;">
                                                <input type="checkbox">
                                                Show Email and Phone to Public
                                            </div>
                                        </div>
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pb-5 text-center">
                        <button type="submit" class="btn btn-post">Publish My Ad</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar bg-white">
                    <div class="widget clearfix p-0">
                        <div class="widget__heading">
                            <h3 class="m-0 p-4">Safety Tips</h3>
                        </div>
                        <div class="widget__content p-4">
                            <div class="widget__content_subcat">
                                <p class="content-head">Posting your ads on WZsell is free! However, all ads must follow our rules.</p>
                                <ol class="ml-4">
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you post in the correct category.</p>
                                    </li>
                                    </ul>
                                </ol>
                            </div>

                            <!--widget__content_subcat-->
                        </div>
                        <!--widget__content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer-->
@include('pages.includes.footer')
