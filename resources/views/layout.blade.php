<!DOCTYPE html>
<html lang="en">
<head>
    @yield('header')
</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="tel:+2347031172829"><i class="fa fa-phone"></i> +234-7031172829</a></li>
                    <li><a href="mailto:mail2soundminds@gmail.com"><i class="fa fa-envelope-o"></i> mail2soundminds@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Zone C, Block 11, Shop 3, Central Market, OAU, ILE-IFE.</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @if(session()->has('logged_in'))
                        <li><a href="{{url('logout')}}"><i class="fa fa-sign-in"></i> Logout</a></li>
                        @else
                        <li><a href="{{url('login')}}"><i class="fa fa-sign-out"></i> Login/Register</a></li>
                        @endif

                    <li><a href="#"><i class="fa fa-user-o"></i> {{session()->has('user') ? session('user'): 'My Account'}}</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{url('/')}}" class="logo">
                                <img src="{{asset('assets/img/pro_logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        {{--<!-- Wishlist -->--}}
                        {{--<div>--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-heart-o"></i>--}}
                                {{--<span>Your Wishlist</span>--}}
                                {{--<div id="wish_list_item" class="qty"></div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<!-- /Wishlist -->--}}

                        <!-- Cart -->
                        <div>
                            <a href="{{url('cart')}}"  aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div id="cart_item" class="qty"></div>
                            </a>
                            {{--<div class="cart-dropdown">--}}
                                {{--<div class="cart-list">--}}
                                    {{--<div class="product-widget">--}}
                                        {{--<div class="product-img">--}}
                                            {{--<img src="./img/product01.png" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="product-body">--}}
                                            {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                            {{--<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>--}}
                                        {{--</div>--}}
                                        {{--<button class="delete"><i class="fa fa-close"></i></button>--}}
                                    {{--</div>--}}

                                    {{--<div class="product-widget">--}}
                                        {{--<div class="product-img">--}}
                                            {{--<img src="./img/product02.png" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="product-body">--}}
                                            {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                            {{--<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>--}}
                                        {{--</div>--}}
                                        {{--<button class="delete"><i class="fa fa-close"></i></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="cart-summary">--}}
                                    {{--<small>3 Item(s) selected</small>--}}
                                    {{--<h5>SUBTOTAL: $2940.00</h5>--}}
                                {{--</div>--}}
                                {{--<div class="cart-btns">--}}
                                    {{--<a href="#">View Cart</a>--}}
                                    {{--<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('laptops_and_phones')}}">Laptops & Phones</a></li>
                <li><a href="{{url('accessories')}}">Accessories</a></li>
                <li><a href="{{url('networking_service')}}">Networking</a></li>
                <li><a href="{{url('audio_visuals')}}">Audio Visuals</a></li>
                <li><a href="{{url('video_and_camera_security')}}">Video Surveillance & Security</a></li>
                <li><a href="{{url('hardware_building_and_repair')}}">Hardware Building & Repairs</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<!-- /NAVIGATION -->
</header>
@yield('content')

<!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>We are an Integrated Technologist that provides services evolving around technology domain.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Zone C, Block 11, Shop 3, Central Market, OAU, ILE-IFE.</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+234-7031172829</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>mail2soundminds@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="{{url('laptops_and_phones')}}"">Laptops</a></li>
                                <li><a href="{{url('laptops_and_phones')}}">phones</a></li>
                                <li><a href="{{url('accessories')}}">Laptop Accessories</a></li>
                                <li><a href="{{url('accessories')}}">Phone Accessories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://websitecreativ.com" target="_blank">WebsiteCreativ</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/jquery-cookie/src/jquery.cookie.js')}}"></script>


@if(session('logged_in')){
<script>
    $(function () {
        $('#cart_item').load("{{url('cart_no')}}");
        $('.add-to-cart-btn').click(function () {
            var product_id = $(this).next().val();
            $.ajax({
                url: '{{url('add_to_cart')}}',
                type: 'post',
                data: {'product_id': product_id, '_token': "{{csrf_token()}}"},
                success: function (data) {
                     if(data>0){
                         $('#cart_item').html(data);
                     }



                }
            })
        });


    });
</script>


@else
    <script>
        $(function () {
            //Turn on automatic storage of JSON objects passed as the cookie value. Assumes JSON.stringify and JSON.parse:
            $.cookie.json = true;
            var c = $.cookie('cart')? $.cookie('cart').length :0;
            if (c>0){
                $('#cart_item').html(c)
            }


            $('.add-to-cart-btn').click(function () {
                //Turn on automatic storage of JSON objects passed as the cookie value. Assumes JSON.stringify and JSON.parse:
                $.cookie.json = true;
                var basket = $.cookie("cart") || []; //if not defined use an empty array
                var product_id = $(this).next().val();

                if(!basket.includes(product_id)){
                    basket.push(product_id);
                }

                $.cookie("cart", basket,{expires:1});
                $('#cart_item').html(basket.length);

            });
        });

    </script>

@endif


@yield('script')
</body>
</html>
