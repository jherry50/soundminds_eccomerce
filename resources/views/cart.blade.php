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
    <div class="container">

        @foreach($product as $key=>$value)

            <div class="row" style="margin-left: 20px;margin-right: 20px;">
                <div class="col-md-3 col-xs-12 col-lg-4" style="width:100px;height:100px;">
                    {{--<div class="container">--}}

                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset($value->productPath)}}" alt="">
                        </div>
                    </div>
                    {{--</div>--}}
                </div>
                <div class="col-md-9 col-xs-12 col-lg-8">

                    {{--<div class="container">--}}
                    <table class="table table-hover table-responsive" style="margin-right: 20px;">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$value->productName}}</td>
                            <td>{{$value->categoryName}}</td>
                            <td>{{$value->currentPrice}}</td>
                            <td><input type="number" value="{{$value->quantity}}"  min="1" class="form-control quantity" style="width:70px"></td>
                            <td class="amount">{{$value->currentPrice}}</td>
                            <td class="delete_item"><i  class="fa fa-trash "></i>
                                <input name="product_id" class="product_id" type="hidden" value="{{$value->id}}">
                                @if(session()->has('logged_in'))<input name="product_id" type="hidden" value="{{$value->cartId}}">
                                    @endif
                            </td>
                        </tr>


                        </tbody>
                    </table>
                    {{--</div>--}}


                </div>


            </div>


        @endforeach

            {{--/section for your order--}}

            {{--/section for total price--}}
            <div style="float:right;">
            <h3>Total Price</h3>
            <h3 id="amountTotal">₦{{$total}}</h3>
            </div>
            <a href="{{url('checkout')}}"  id="checkout" class="primary-btn order-submit">Proceed to checkout</a>

    </div>
@endsection

@section('script')
    <script>

        $(function () {

            $('.quantity').change(function () {
                var totalAmount =0;
                var qty = $(this).val();
                var price =$(this).parent().prev().text();
                var total = qty * price;
                $(this).parent().next().text(total);
                $('.amount').each(function (index) {
                    totalAmount+=parseInt($(this).text());
                });
                $('#amountTotal').text('₦'+ totalAmount);

            });

            $('.quantity').keyup(function () {
                var totalAmount =0;
                var qty = $(this).val();
                var price =$(this).parent().prev().text();
                var total = qty * price;
                $(this).parent().next().text(total);
                $('.amount').each(function (index) {
                    totalAmount+=parseInt($(this).text());
                });
                $('#amountTotal').text('₦'+ totalAmount);

            });

         $('.delete_item').click(function () {

             var logged_in = "{{session()->has('logged_in')}}";
             // alert(logged_in)
              if (logged_in === "1"){
                  var productId = $(this).children().eq(2).val();
                  $.ajax({
                      url:'{{url('delete_item')}}',
                      type:'post',
                      data:{'product_id':productId,'_token':"{{csrf_token()}}"},
                      success: function (data) {
                          if(data==="success"){
                              location.reload();
                          }
                      }
                  })
              }
              else {
                  var product_id = $(this).children().eq(1).val();
                  $.cookie.json = true;
                  var basket = $.cookie("cart");
                  console.log(basket);
                  var index = basket.indexOf(product_id);
                  console.log(index);
                  if (index > -1) {
                      basket.splice(index, 1);
                  }
               console.log(basket);
                  $.cookie("cart", basket,{expires:1});
                  location.reload()
              }

         });

         $('#checkout').click(function () {
            var ids = [];
            var qty = [];
             $('.product_id').each(function (index, value) {
                 ids.push($(this).attr('value'));
            });
             $('.quantity').each(function (index, value) {
                 qty.push($(this).attr('value'));
             });
             console.log(ids);
             console.log(qty);
         });

        });

    </script>
@endsection





