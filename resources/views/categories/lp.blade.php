@extends('layout')

@section('header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SoundMinds - An Integrated Technologist</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

@endsection


@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li class="active">Laptops & Phones  (Results)</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                {{--<!-- ASIDE -->--}}
                {{--<div id="aside" class="col-md-3">--}}
                    {{--<!-- aside Widget -->--}}
                    {{--<div class="aside">--}}
                        {{--<h3 class="aside-title">Categories</h3>--}}
                        {{--<div class="checkbox-filter">--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-1">--}}
                                {{--<label for="category-1">--}}
                                    {{--<span></span>--}}
                                    {{--Laptops--}}
                                    {{--<small>(120)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-2">--}}
                                {{--<label for="category-2">--}}
                                    {{--<span></span>--}}
                                    {{--Smartphones--}}
                                    {{--<small>(740)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-3">--}}
                                {{--<label for="category-3">--}}
                                    {{--<span></span>--}}
                                    {{--Cameras--}}
                                    {{--<small>(1450)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-4">--}}
                                {{--<label for="category-4">--}}
                                    {{--<span></span>--}}
                                    {{--Accessories--}}
                                    {{--<small>(578)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-5">--}}
                                {{--<label for="category-5">--}}
                                    {{--<span></span>--}}
                                    {{--Laptops--}}
                                    {{--<small>(120)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="category-6">--}}
                                {{--<label for="category-6">--}}
                                    {{--<span></span>--}}
                                    {{--Smartphones--}}
                                    {{--<small>(740)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /aside Widget -->--}}

                    {{--<!-- aside Widget -->--}}
                    {{--<div class="aside">--}}
                        {{--<h3 class="aside-title">Price</h3>--}}
                        {{--<div class="price-filter">--}}
                            {{--<div id="price-slider"></div>--}}
                            {{--<div class="input-number price-min">--}}
                                {{--<input id="price-min" type="number">--}}
                                {{--<span class="qty-up">+</span>--}}
                                {{--<span class="qty-down">-</span>--}}
                            {{--</div>--}}
                            {{--<span>-</span>--}}
                            {{--<div class="input-number price-max">--}}
                                {{--<input id="price-max" type="number">--}}
                                {{--<span class="qty-up">+</span>--}}
                                {{--<span class="qty-down">-</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /aside Widget -->--}}

                    {{--<!-- aside Widget -->--}}
                    {{--<div class="aside">--}}
                        {{--<h3 class="aside-title">Brand</h3>--}}
                        {{--<div class="checkbox-filter">--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-1">--}}
                                {{--<label for="brand-1">--}}
                                    {{--<span></span>--}}
                                    {{--SAMSUNG--}}
                                    {{--<small>(578)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-2">--}}
                                {{--<label for="brand-2">--}}
                                    {{--<span></span>--}}
                                    {{--LG--}}
                                    {{--<small>(125)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-3">--}}
                                {{--<label for="brand-3">--}}
                                    {{--<span></span>--}}
                                    {{--SONY--}}
                                    {{--<small>(755)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-4">--}}
                                {{--<label for="brand-4">--}}
                                    {{--<span></span>--}}
                                    {{--SAMSUNG--}}
                                    {{--<small>(578)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-5">--}}
                                {{--<label for="brand-5">--}}
                                    {{--<span></span>--}}
                                    {{--LG--}}
                                    {{--<small>(125)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="input-checkbox">--}}
                                {{--<input type="checkbox" id="brand-6">--}}
                                {{--<label for="brand-6">--}}
                                    {{--<span></span>--}}
                                    {{--SONY--}}
                                    {{--<small>(755)</small>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /aside Widget -->--}}

                    {{--<!-- aside Widget -->--}}
                    {{--<div class="aside">--}}
                        {{--<h3 class="aside-title">Top selling</h3>--}}
                        {{--<div class="product-widget">--}}
                            {{--<div class="product-img">--}}
                                {{--<img src="./img/product01.png" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="product-body">--}}
                                {{--<p class="product-category">Category</p>--}}
                                {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="product-widget">--}}
                            {{--<div class="product-img">--}}
                                {{--<img src="./img/product02.png" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="product-body">--}}
                                {{--<p class="product-category">Category</p>--}}
                                {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="product-widget">--}}
                            {{--<div class="product-img">--}}
                                {{--<img src="./img/product03.png" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="product-body">--}}
                                {{--<p class="product-category">Category</p>--}}
                                {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /aside Widget -->--}}
                {{--</div>--}}
                {{--<!-- /ASIDE -->--}}

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            {{--<label>--}}
                                {{--Show:--}}
                                {{--<select class="input-select">--}}
                                    {{--<option value="0">10</option>--}}
                                    {{--<option value="1">15</option>--}}
                                {{--</select>--}}
                            {{--</label>--}}
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <!-- product -->
                        @foreach($product as $key=>$value)

                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{asset($value->productPath)}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">- {{$value->discountRate}}</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$value->categoryName}}</p>
                                    <h3 class="product-name"><a href="#">{{$value->productName}}</a></h3>
                                    <h4 class="product-price">₦ {{$value->currentPrice}} <del class="product-old-price">₦ {{$value->previousPrice}}</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        <input type="hidden" value="{{$value->id}}">
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    <input type="hidden" value="{{$value->id}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /product -->

                        {{--/comment for the remaining product--}}
                        <!-- product -->
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product02.png" alt="">--}}
                                    {{--<div class="product-label">--}}
                                        {{--<span class="new">NEW</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<div class="clearfix visible-sm visible-xs"></div>--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product03.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<div class="clearfix visible-lg visible-md"></div>--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product04.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<div class="clearfix visible-sm visible-xs"></div>--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product05.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product06.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product07.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                        {{--<i class="fa fa-star"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product08.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /product -->--}}

                        {{--<div class="clearfix visible-sm visible-xs"></div>--}}

                        {{--<!-- product -->--}}
                        {{--<div class="col-md-4 col-xs-6">--}}
                            {{--<div class="product">--}}
                                {{--<div class="product-img">--}}
                                    {{--<img src="./img/product09.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="product-body">--}}
                                    {{--<p class="product-category">Category</p>--}}
                                    {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                                    {{--<h4 class="product-price">₦980.00 <del class="product-old-price">₦990.00</del></h4>--}}
                                    {{--<div class="product-rating">--}}
                                    {{--</div>--}}
                                    {{--<div class="product-btns">--}}
                                        {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                        {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                        {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="add-to-cart">--}}
                                    {{--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- /product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix" style="float:right;">

                            {{$product->links()}}
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
@section('script')

@endsection