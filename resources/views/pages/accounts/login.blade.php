@include('pages.includes.header')

    <!--start Layer slider-->
    <section>
        <div class="container-fluid bg-theme">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-side">
                        <div class="row pt-5 pb-5">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <h2 class="text-white">Login with your Account</h2>
                                <label class="create-account-text">Login through OTP</label>
                                @error('email')
                                <div id="wrong-cred">
                                    <label class="create-account-text" style="color: red;">Wrong Username OR Password!</label>
                                </div>
                                @enderror

                                <div class="form pt-3">
                                    <form id="my_form" method="post" action="{{route('login')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 pt-1">
                                                <input type="text" id="username" name="email" placeholder="Phone number / Email">
                                            </div>
                                            <div class="col-md-12 pt-1">
                                                <input type="password" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" id="login-button" class="btn btn-dark-green" value="Login" style="width: 100%;height: 50px;padding: 13px 0px;">
                                                <label class="create-account-text">Don't have an account? <a href="{{route('register')}}">Signup now</a></label>
                                            </div>
                                            <div class="col-md-12 social">
                                                <div class="row">
                                                    <div class="col-md-12 p-2 pt-2">
                                                        <h2><span>or</span></h2>
                                                    </div>
                                                    <div class="col-md-12 pt-2 pb-2">
                                                        <label class="create-account-text">Connect with</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href=""><i><img src="{{asset('/custom_assets/images/facebook.png')}}" class="image-responsive"></i></a>&emsp;
                                                        <a href=""><i><img src="{{asset('/custom_assets/images/twiiter.png')}}" class="image-responsive"></i></a>&emsp;
                                                        <a href=""><i><img src="{{asset('/custom_assets/images/g+.png')}}" class="image-responsive"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="col-md-12 p-0" style="background-image: url(custom_assets/images/pattern.png);min-height: 110vh">
                        <div class="pt-5 pb-5">
                            <h2 class="text-white text-center">Get these Benefits</h2>
                            <div class="benefits pl-5 pt-5 pb-5">
                                <div class="benefit-1 pt-3">
                                    <img src="{{asset('/custom_assets/images/reg-chat.png')}}"> &emsp; <label>Access your chat and account info from any device.</label>
                                </div>
                                <div class="benefit-2 pt-3">
                                    <img src="{{asset('/custom_assets/images/reg-fav.png')}}"> &emsp; <label>Maintain a wishlist by saving your favourite items.</label>
                                </div>
                                <div class="benefit-3 pt-3">
                                    <img src="{{asset('/custom_assets/images/reg-order.png')}}"> &emsp; <label>Track the status of your orders.</label>
                                </div>
                                <div class="benefit-4 pt-3">
                                    <img src="{{asset('/custom_assets/images/reg-ship.png')}}"> &emsp; <label>Get cash back and free shipping (terms apply).</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Footer-->
    @include('pages.includes.footer')
