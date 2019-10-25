
<div class="container-fluid">
    <div class="row" >
        <div class="col-md-12">
            <!-- insert form here  -->
            <div class="row" style="background-color: #028482;">
                <div class="col-md-4" >
                  <h3><b>Ad ID</b> :  {{$ad->id}}</h3>

                </div>

                <div class="col-md-4 ml-5" id="div1" >
                    <h3>Posted By:  {{$ad->getcatgacc->name}}</h3>
                </div>
                <div class="col-md-4" >
                    <h3><b>Date</b> :  {{$ad->created_at->toDateString()}}</h3>
                      </div>

            </div>
            <br>
            <br>

            <div class="row ">
                <div class="mx-auto my-auto">
                    <h2>{{$ad->title}}</h2>
                </div>
            </div><br>

            <div >
                <label for="fname" class="control-label col-form-label"><strong>Description:</strong></label>
                <ul>
                   {{$ad->description}}

                </ul>
            </div><br>


            <section class="social">

                <div >
                    <strong>Features:</strong>
                </div><br>
                <div class="row">
                    <div class="col-md-4">

                    </div>

                </div>
            </section><br><br>

            <!-- carasoul start -->
            <div class="carousel slide" id="MyCarousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img  src="{{asset('/images/ads/'.$ad->id.'/'.$ad->display_pic)}}" alt="First slide" style="height: 363px;">
                    </div>
                    @foreach($ad->adspics as $image)
                        @if($image->$image!=$ad->display_pic)
                    <div class="item">
                        <img src="{{asset('/images/ads/'.$image->ad.'/'.$image->image)}}" alt="Second slide" style="height: 363px;">
                    </div>
                        @endif
                    @endforeach
                </div>
                <!-- Controls -->
                <a href="#MyCarousel" class="left carousel-control" data-slide="prev"><span class="icon-prev"></span></a>
                <a href="#MyCarousel" class="right carousel-control" data-slide="next"><span class="icon-next"></span></a>
            </div>
        </div>
    </div>
</div>

