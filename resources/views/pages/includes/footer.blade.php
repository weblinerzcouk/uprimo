<section id="footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="logo pb-2">
                            <a href="#"><img src="{{asset('/custom_assets/images/logo.png')}}" alt="classify"></a>
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
                        <p>@ All Copyrights Reseverd 2019 - Design & Development by <a class="col" href="">Weblinerz</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </footer>
</section>
<!--End Footer-->
<script src="{{asset('/custom_assets/js/jquery.js')}}"></script>
<script src="{{asset('/custom_assets/js/bootstrap.js')}}"></script>
<script src="{{asset('/custom_assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('/custom_assets/js/slide.js')}}"></script>
<script src="{{asset('/custom_assets/js/default.js')}}"></script>
<script src="{{asset('/custom_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/custom_assets/js/greensock.js')}}"></script>
<script src="{{asset('/custom_assets/js/layersliderjquery.js')}}"></script>
<script src="{{asset('/custom_assets/js/transition.js')}}"></script>


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
<script>
    var menu = document.querySelector('.menu')
    var menuPosition = menu.getBoundingClientRect().top;
    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= menuPosition) {
            menu.style.position = 'fixed';
            menu.style.top = '0px';
        } else {
            menu.style.position = 'static';
            menu.style.top = '';
        }
    });
</script>
<script>
  var menumobile = document.querySelector('.menu-mobile')
    var menumobilePosition = menumobile.getBoundingClientRect().top;
    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= menumobilePosition) {
            menumobile.style.position = 'fixed';
            menumobile.style.top = '0px';
        } else {
            menumobile.style.position = 'static';
            menumobile.style.top = '';
        }
    });
</script>
<script>
    $(document).ready(function () {
        $('body').on('change','#select-category', function() {
            var category = this.value;

            if (category == "") {
                $('#selected-category-form').empty();
            }

            if (category == "1") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row">  <div class="col-md-6 pb-5"> <label class="ad-posting-label">Ad Type</label> <select class="ad-posting" name="ad_type"> <option value="" selected>Select an option</option> <option value="Rent">Rent</option> <option value="Buy">Buy</option> <option value="Sell">Sell</option>  </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Role</label>  <select class="ad-posting" name="role"> <option value="null" selected>Select a Role</option> <option value="Owner">Owner</option> <option value="Dealer">Dealer</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Min Area</label> <input type="text" name="min_area" class="ad-posting" placeholder="Min Area in Sqtf"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Max Area</label> <input type="text" name="max_area" class="ad-posting" placeholder="Max Area in sqtf"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Rooms</label> <select class="ad-posting" name="rooms"> <option value="" selected>Select rooms</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="More than 3">More than 3</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Bathrooms</label> <select class="ad-posting" name="bathrooms"> <option value="" selected>Select bathrooms</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="More than 3">More than 3</option></select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">City</label> <input type="text" name="city" class="ad-posting" placeholder="City"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Town</label> <input type="text" name="town" class="ad-posting" placeholder="Town"> </div></div>');
            }

            if(category == "2"){
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Your Brand</label> <input type="text" name="brand" class="ad-posting" placeholder="Brand"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Your Model</label> <input type="text" name="model" class="ad-posting" placeholder="Model"> </div> <div class="col-md-12 pb-5"> <label class="ad-posting-label">Fuel Type</label> <form action="#" class="ad-features-button"> <p> <input type="radio" id="test1" name="fuel_type" value="Petrol" checked> <label for="test1">Petrol</label> </p> <p> <input type="radio" id="test2" name="fuel_type" value="Deisel"> <label for="test2">Deisel</label> </p> <p> <input type="radio" id="test3" name="fuel_type" value="Electric"> <label for="test3">Electric</label> </p> </form> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Year of Registration*</label> <input type="date" name="register_year" class="ad-posting" placeholder="Registeration Year"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">KMs Driven*</label> <input type="text" name="kms_driven" class="ad-posting" placeholder="kms Driven"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">City*</label> <input type="text" name="city" class="ad-posting" placeholder="City"> </div> </div>');
            }
            if (category == "3") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Job Type</label> <select class="ad-posting" name="job_type"> <option value="" selected>Select an option</option> <option value="Full Time">Full Time</option> <option value="Part Time">Part Time</option> <option value="Contract">Contract</option> <option value="Freelancing">Freelancing</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Role</label> <select class="ad-posting" name="role"> <option value="" selected>Select a Role</option> <option value="CEO">CEO</option> <option value="Team Leader">Team Leader</option> <option value="Employee">Employee</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Min Monthly Salary</label> <input type="text" name="min_salary" class="ad-posting" placeholder="Min Salary"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Max Monthly Salary</label> <input type="text" name="max_salary" class="ad-posting" placeholder="Max Salary"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label"> Experience</label> <select class="ad-posting" name="experience"> <option value="0" selected>Select Min Experience</option><option value="1">1 Year</option> <option value="2">2 Years</option> <option value="3">3 Years</option> </select> </div>  <div class="col-md-6 pb-5"> <label class="ad-posting-label">City</label> <input type="text" name="city" class="ad-posting" placeholder="City"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Localities</label> <input type="text" name="localities" class="ad-posting" placeholder="City"></div> </div>')
            }
            if (category == "4") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row">  <div class="col-md-6 pb-5"> <label class="ad-posting-label">Product Type</label> <select class="ad-posting" name="product_type"> <option value="null" selected>Select an option</option> <option value="Electric">Electric</option> <option value="Computer">Computer</option> <option value="Vehicle">Vehicle</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Condition</label> <select class="ad-posting" name="condition"> <option value="null" selected>Select an option</option> <option value="Old">Old</option> <option value="New">New</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Brand Name</label> <input type="text" name="brand" class="ad-posting" placeholder="e.g Sonex"></div> <div class="col-md-6 pb-5"> </div>  <div class="col-md-12 pb-5"> <div class="row"> <div class="col-md-6"> <label class="ad-posting-label"> Type of Ad </label> <div class="p-5" style="background: #eee"> <div class="can-toggle demo-rebrand-2"> <input id="e" type="checkbox" name="ad_type" value="1"> <label for="e"> <div class="can-toggle__switch" data-checked="I want to sell" data-unchecked="I want to buy"> </div> </label> </div> </div> </div> </div> </div> </div>')
            }

            if (category == "5") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row" xmlns="http://www.w3.org/1999/html"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Product Type</label> <select class="ad-posting" name="product_type"> <option value="null" selected>Select an option</option> <option value="Home Furniture">Home Furniture</option> <option value="Office Furniture">Office Furniture</option> <option value="Shop Furniture">Shop Furniture</option> </select>  </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Condition</label>  <select class="ad-posting" name="condition"> <option value="null" selected>Select an option</option> <option value="Old">Old</option> <option value="New">New</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Size</label> <input type="text" name="size" class="ad-posting" placeholder="e.g 250 sqft"></div>  <div class="col-md-6 pb-5">  </div>  <div class="col-md-12 pb-5"> <div class="row"> <div class="col-md-6"> <label class="ad-posting-label"> Type of Ad </label> <div class="p-5" style="background: #eee"> <div class="can-toggle demo-rebrand-2"> <input id="e" type="checkbox" name="ad_type"> <label for="e"> <div class="can-toggle__switch" data-checked="I want to sell" data-unchecked="I want to buy"> </div> </label> </div> </div> </div> </div> </div> </div>')
            }
            if (category == "6") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row"><div class="col-md-6 pb-5"> <label class="ad-posting-label">Clothing For</label> <select class="ad-posting" name="clothing_for"> <option value="null">Select an option</option>   <option value="Men">Men</option>  <option value="Women">Women</option> <option value="Kids" >Kids</option>  </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Clothing Type</label>  <select class="ad-posting" name="clothing_type"> <option value="null">Select an option</option>   <option value="cloth">Cloth</option>  <option value="Readymate">Readymate</option> <option value="Dress" >Dress</option> </select>  </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Size</label> <select class="ad-posting" name="size"> <option value="null">Select an option</option>  <option value="Large">Large</option>  <option value="Medium">Medium</option>  <option value="Small">Small</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Condition</label> <select class="ad-posting" name="condition"> <option value="null" selected>Select an option</option> <option value="Old">Old</option> <option value="New">New</option> <option value="Used">Used</option> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Age</label><input type="text" name="age" class="ad-posting" placeholder="e.g 22 years">   <div class="col-md-12 pb-5"> <div class="row"> <div class="col-md-6"> <label class="ad-posting-label"> Type of Ad </label> <div class="p-5" style="background: #eee"> <div class="can-toggle demo-rebrand-2"> <input id="e" type="checkbox"> <label for="e"> <div class="can-toggle__switch" data-checked="I want to sell" data-unchecked="I want to buy"> </div> </label> </div> </div> </div> </div> </div> </div>')
            }

            if (category == "7") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events</label> <input type="text" name="event" class="ad-posting" placeholder="Concert"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events Category</label> <input type="text" name="event_category" class="ad-posting" placeholder="JWT Concerts"> </select> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events Start Date</label> <input type="date" name="start_date" class="ad-posting" placeholder="18-02-2019"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events Start Time</label> <input type="text" name="start_time" class="ad-posting" placeholder="9:00 A.M."> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events End Date</label> <input type="date" name="end_date" class="ad-posting" placeholder="18-03-2019"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Events End Time</label> <input type="text" name="end_time" class="ad-posting" placeholder="19:00 P.M."> </div> </div> </div>')
            }

            if (category == "8") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append(' <div class="my-detail-section bg-white"> <div class="form-section"> <h3 class="theme-text-color">About the company</h3> <div class="row"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Business Owner</label> <input type="text" name="business_owner" class="ad-posting" placeholder="e.g $100"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Business Establishment Date</label> <input type="date" name="established_date" class="ad-posting" placeholder="Date"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Number of Employees</label> <input type="text" name="no_of_employees" class="ad-posting" placeholder="5-10"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Working Days</label> <input type="text" name="working_days" class="ad-posting" placeholder="Mon-Fri"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Location</label> <input type="text" name="location" class="ad-posting" placeholder="Location"> </div> </div> </div> </div>')
            }
            if (category == "9") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row"> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Brand</label> <input type="text" name="brand" class="ad-posting" placeholder="Brand"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Material</label> <input type="text" name="material" class="ad-posting" placeholder="Material"> </div> <div class="col-md-6 pb-5"> <label class="ad-posting-label">Condition</label> <select class="ad-posting" name="condition"> <option value="Brand-new">Brand-new</option> <option value="Unused">Unused</option> <option value="Unopened">Unopened</option> <option value="Undamaged item in its original packaging">Undamaged item in its original packaging</option> </select> </div>  </div>')
            }

            if (category == "10") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('')
            }

            if (category == "12") {
                $('#selected-category-form').empty();
                $('#selected-category-form').append('<div class="row">  <div class="col-md-6 pb-5"> <label class="ad-posting-label">Pet Type</label> <input type="text" name="pet_type" class="ad-posting" placeholder="e.g"> </div> </div>')
            }
        });
    });
</script>

