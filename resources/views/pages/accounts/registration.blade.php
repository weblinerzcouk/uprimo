@include('pages.includes.header')
    <section>
        <div class="container-fluid bg-theme">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-side">
                        <div class="row pt-5 pb-5">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <h2 class="text-white">Register for your free Account</h2>
                                <label class="create-account-text">Already have an account? <a href="">Login</a></label>
                                <div class="form pt-3">
                                    <form role="form" method="post" action="{{route('register')}}">
                                        @csrf
                                        @error('email')
                                        <div class="alert alert-danger alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Error!</strong> {{$message}}
                                        </div>
                                        @enderror
                                        @error('password')
                                        <div class="alert alert-danger alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Error!</strong> {{$message}}
                                        </div>
                                        @enderror
                                        <div class="row">
                                            <div class="col-md-12 pt-1">
                                                <input type="text"  name="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-md-12 pt-1">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-md-12 pt-1">
                                                <input type="phone" name="phone_no" placeholder="Phone number" required>
                                            </div>
                                            <div class="col-md-12 pt-1">
                                                <input type="Password" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="col-md-12 pt-1 pb-2">
                                                <input type="Password" name="password_confirmation" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-default" style="width: 100%;height: 50px;padding: 13px 0px;">Create Account</button>
                                                <label class="create-account-text">By registering you confirm that you accept the Terms and Conditions and Privacy Policy</label>
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
                    <div class="col-md-12 p-0" style="background-image: url(custom_assets/images/pattern.png);min-height: 150vh">
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
  @include('pages.includes.footer')
