<nav id="sidebar" class="">
    <div class="profile-pic">
        @if(Auth::user()->pic!=null)
            <a href="#" onclick="document.getElementById('file').click();">
            <img src="{{asset('/images/user/'.Auth::user()->id.'/'.Auth::user()->pic)}}" class="avatar image-resposive">
            </a>
                @else
            <a href="#" onclick="document.getElementById('file').click();">
        <img src="{{asset('/custom_assets/images/dash-profile.png')}}" class="avatar image-resposive" style="line-height: 120px;">
            </a>
            @endif
    </div>
    <ul class="list-unstyled components pt-1 pb-0">
        <p class="pl-5">{{ str_limit(Auth::user()->name,14)}}</p>
        <ul class="profile-details list-unstyled components">
            <li>
                <span class="fa fa-map-marker"></span>&emsp; {{str_limit(Auth::user()->address)}}
            </li>
            <li>
                <span class="fa fa-envelope"></span>&emsp; {{ str_limit(Auth::user()->email,17)}}
            </li>
            <li>
                <span class="fa fa-phone"></span>&emsp; {{Auth::user()->phone_no}}
            </li>
        </ul>
        <li class="active">
            <a href="{{url('/user/dashboard')}}">Profile</a>
        </li>
        <li>
            <a href="{{url('/user/my_ads')}}">My Ads</a>
        </li>
        <li>
            <a href="{{url('/user/favorite')}}">Favorite Ads</a>
        </li>
        <li>
            <a href="{{url('/user/archives')}}">Archives</a>
        </li>
        <li>
            <a href="{{url('/user/messages')}}">Messages</a>
        </li>
        <li>
            <a href="{{url('/user/notification')}}">Notifications</a>
        </li>
        <li>
            <a href="{{url('/user/orders')}}">Orders</a>
        </li>
        <li>
            <a href="{{url('/user/payment_details')}}">Payment Details</a>
        </li>
        <li>
            <a href="{{url('/user/card_details')}}">Ad Credit Details</a>
        </li>
    </ul>
</nav>
