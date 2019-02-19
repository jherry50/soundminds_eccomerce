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
    <link href="{{asset('assets/css_1/sb-admin.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection
@section('content')

    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Checkout</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                @if(!session()->has('logged_in'))
                    <div class="col-md-7">
                    <!-- Billing Details -->

                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /Billing Details -->

                </div>
            @endif

                <!-- Order Details -->
                <div class="col-md-12 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                         @foreach( $product as $key=>$value)
                        <div class="order-products">
                            <div class="order-col">
                                <div><input type="number" value="1"  min="1" class="form-control-sm quantity" style="width:70px"> <span class="">{{$value->productName}}</span></div>
                                <div>₦ <span class="amount">{{$value->currentPrice}}</span></div>
                            </div>

                        </div>
                        @endforeach

                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total total">₦{{$total}}</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Pay on delivery
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms &amp; conditions</a>
                        </label>
                    </div>
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">

                                <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="3">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                <p>
                                    <button class="btn btn-success btn-lg btn-block order-submit" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>

                    </form>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
@section('script')
    <script>
        $(function () {

            $('.quantity').change(function () {
                var totalAmount = 0;
                var qty = $(this).val();
                var price = $(this).parent().next().find('span').text();
                var total = qty * price;
                $(this).parent().next().find('span').text(total);
                $('.amount').each(function (index) {
                    totalAmount += parseInt($(this).text());
                });
                $('.total').text('₦' + totalAmount);

            });

            $('.quantity').keyup(function () {
                var totalAmount = 0;
                var qty = $(this).val();
                var price = $(this).parent().next().find('span').text();
                var total = qty * price;
                $(this).parent().next().find('span').text(total);
                $('.amount').each(function (index) {
                    totalAmount += parseInt($(this).text());
                });
                $('.total').text('₦' + totalAmount);


            });
        });
    </script>
@endsection