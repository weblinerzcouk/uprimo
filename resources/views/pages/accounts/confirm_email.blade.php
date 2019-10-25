@include('pages.includes.header')
    <!--start Layer slider-->
    <section id="slider">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:200px;">
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img style="margin: 0 !important;" src="{{asset('custom_assets/images/slider/cat-bg.png')}}" class="ls-bg" alt="Slide background"/>
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
      <div class="container jd">
       <div class="row">
           <div class="col-md-12">
               <div class="verify-box text-center">
                   @if (session('resent'))
                       <div class="alert alert-success" role="alert">
                           {{ __('A fresh verification link has been sent to your email address.') }}
                       </div>
                   @endif
                <div class="p-5">
                       <p>Thank you for registering with Uprimo! We are very pleased that Before proceeding, please check your email for a verification link.If you did not receive the email <a href="{{ route('verification.resend') }}" style="color: #028482;"> Resend Email </a> click here to request another</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
    <!--Category-->




    <!--Footer-->
    <section id="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <div class="logo pb-2">
                                <a href="#"><img src="images/logo.png" alt="classify"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet sectetuer esl adipiscing elit sed diam nonummy nibhi euismod tincidunt ut <span class="col">laoreet dolore</span> amet magna aliquam erat volutpat. </p>
                            <p>Ut wisi enim ad minim veniam quis dest nostrud exerci tation ullamcorper norme
                                suscipit lobortis commodo consequat.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Information</h4>
                            <ul>
                                <li>
                                    <a href="#">Our Story</a>
                                </li>
                                <li>
                                    <a href="#">Privacy & Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Shipping & Delivery</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Privacy Info</h4>
                            <ul>
                                <li>
                                    <a href="#">Privacy & Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Sale</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="#">Report Abuse</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="#">CSR Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Newsletter</h4>
                            <p class="sign">Lorem ipsum dolor sit amet sectetuer in adipiscing elit sed diam...</p>
                            <p class="sign">Sign up for the newsletter !</p>
                            <form method="post">
                                <input type="email" name="email" placeholder="Your email address...">
                                <input type="submit" name="submit" value="sign-up">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                            <p>@ All Copyrights Reseverd 2019 - Design & Development by <a class="col" href="http://joinwebs.com">Weblinerz</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </footer>
    </section>
    <!--End Footer-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/default.js"></script>
    <script src="js/greensock.js"></script>
    <script src="js/layersliderjquery.js"></script>
    <script src="js/transition.js"></script>
    <script>
        (function($) {
  "use strict"

  // NAVIGATION
  var responsiveNav = $('#responsive-nav'),
    catToggle = $('#responsive-nav .category-nav .category-header'),
    catList = $('#responsive-nav .category-nav .category-list'),
    menuToggle = $('#responsive-nav .menu-nav .menu-header'),
    menuList = $('#responsive-nav .menu-nav .menu-list');

  catToggle.on('click', function() {
    menuList.removeClass('open');
    catList.toggleClass('open');
  });

  menuToggle.on('click', function() {
    catList.removeClass('open');
    menuList.toggleClass('open');
  });

  $(document).click(function(event) {
    if (!$(event.target).closest(responsiveNav).length) {
      if (responsiveNav.hasClass('open')) {
        responsiveNav.removeClass('open');
        $('#navigation').removeClass('shadow');
      } else {
        if ($(event.target).closest('.nav-toggle > button').length) {
          if (!menuList.hasClass('open') && !catList.hasClass('open')) {
            menuList.addClass('open');
          }
          $('#navigation').addClass('shadow');
          responsiveNav.addClass('open');
        }
      }
    }
  });

})(jQuery);
    </script>
    <script type="text/javascript">
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
         });
    </script>
    <script>
        (function(){

          $("#cart").on("click", function() {
            $(".shopping-cart").fadeToggle( "fast");
        });

      })();
    </script>

</body>
</html>
