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
    <div class="container">
        <br>
        <ul class="main-nav list-inline text-center">
            <li class="nav-item"><a  class="nav-link" href="{{url('admin')}}">Add Product</a></li>
            <li class="nav-item"><a  class="nav-link" href="{{url('admin/edit/phones')}}">Edit Phones</a></li>
            <li class="nav-item"><a class="nav-link"  href="{{url('admin/edit/laptops')}}">Edit Laptops</a></li>
            <li class="nav-item"><a  class="nav-link" href="{{url('admin/edit/accessories')}}"> Edit Accessories</a></li>
        </ul>
        {{--</div>--}}
        <hr>
        <table id="edit_phone" class="table table-responsive table-borderless">
            <thead>
            <th>Name</th>
            <th>Curr Price</th>
            <th>Prev Price</th>
            <th>Discount rate</th>
            <th>Sold Out</th>
            <td>Action</td>
            </thead>

            <tbody>
             @foreach($phones as $key=>$value)
                 <tr>
                     <td>{{$value->productName}}</td>
                     <td>{{$value->currentPrice}}</td>
                     <td>{{$value->previousPrice}}</td>
                     <td>{{$value->discountRate}}</td>
                     <td>{{$value->soldOut == 0 ? 'No':'yes'}}</td>
                     <td>
                         <button  value="{{$value->id}}" class="btn btn-sm btn-info edit_phone"><i class="fa fa-edit"></i></button>
                         <button  value="{{$value->id}}" class="btn btn-sm btn-danger delete_phone"><i class="fa fa-trash"></i></button>
                     </td>
                 </tr>
                 @endforeach

            </tbody>

            <tfoot>
            <th>Name</th>
            <th>Curr Price</th>
            <th>Prev Price</th>
            <th>Discount rate</th>
            <th>Sold Out</th>
            <th>Action</th>
            </tfoot>

        </table>


    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Response</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="result">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="refresh">Refresh</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title text-muted" id="modal_title2">Update Phone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="">


                    <div class="form-group">
                        <label for="phone_name">Phone Name</label>
                        <input name="phone_name" class="form-control" id="phone_name" >

                    </div>
                    <div class="form-group">
                        <label for="current_price">Current Price</label>
                        <input name="current_price" class="form-control" id="current_price" >

                    </div>
                    <div class="form-group">
                        <label for="previous_price">Previous Price</label>
                        <input name="previous_price" class="form-control" id="previous_price" >

                    </div>
                    <div class="form-group">
                        <label for="discount_rate">Discount Rate</label>
                        <input name="discount_rate" class="form-control" id="discount_rate" >

                    </div>

                    <div class="form-group">
                        <label for="sold_out">Sold Out?</label>
                        <select id="sold_out" name="sold_out" class="form-control">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>

                    </div>
                    <input type="hidden" id="product_id">
                    <p id="update_error" class="text-danger text-center"></p>
                </div>
                <div class="modal-footer">


                    <button  value="" type="submit" class="update_phone btn btn-primary btn-block">Update</button>
                </div>
            </div>
        </div>
    </div>

@endsection





@section('script')
    <script>
         $(function () {
             $('#refresh').click(function () {
                 location.reload();
             });
             $('#edit_phone').on('click', '.edit_phone', function () {
                 var name, curr_price, prev_price, discount_rate, sold_out, soldOut, product_id;
                 sold_out = $(this).parent().prevAll().eq(0).text();
                 if (sold_out === 'No') {
                     soldOut = 0;
                 } else {
                     soldOut = 1;
                 }
                 discount_rate = $(this).parent().prevAll().eq(1).text();
                 prev_price = $(this).parent().prevAll().eq(2).text();
                 curr_price = $(this).parent().prevAll().eq(3).text();
                 name = $(this).parent().prevAll().eq(4).text();
                 product_id = $(this).val();

                 $('#update_product_modal #sold_out').val(soldOut);
                 $('#update_product_modal #discount_rate').val(discount_rate);
                 $('#update_product_modal #previous_price').val(prev_price);
                 $('#update_product_modal #current_price').val(curr_price);
                 $('#update_product_modal #phone_name').val(name);
                 $('#update_product_modal #product_id').val(product_id);

                 $('#update_product_modal').modal();
             });


             $('.update_phone').click(function () {
                 var name, curr_price, prev_price, discount_rate, sold_out, product_id;
                 var token = "{{csrf_token()}}";
                 sold_out = $(' #sold_out').val();
                 discount_rate = $(' #discount_rate').val();
                 prev_price = $(' #previous_price').val();
                 curr_price = $(' #current_price').val();
                 name = $(' #phone_name').val();
                 product_id = $('#product_id').val();

                 if (sold_out != '' && discount_rate != '' && prev_price != '' && curr_price != '' && name != '') {
                     $.ajax({
                         type: 'post',
                         url: "{{url('admin/edit/phones')}}",
                         data: {
                             id: product_id,
                             soldOut: sold_out,
                             discountRate: discount_rate,
                             previousPrice: prev_price,
                             currentPrice: curr_price,
                             productName: name,
                             _token: token
                         },
                         beforeSend: function () {
                             $('#update_product_modal #update_error').html('Handling request...');
                         },
                         complete: function () {
                             $('#update_product_modal #update_error').html('Sent');
                             $('#update_product_modal').modal('hide');
                         },
                         success: function (result) {
                             $('#modal #result').html(result + "<br>" + " Click refresh to reflect changes");
                             $('#modal').modal();

                         }
                     });
                 } else {
                     $('#update_error').html('Please enter required fields');
                 }

             });
             $('#edit_phone').on('click', '.delete_phone', function () {

                 if (confirm('Are you sure ?') === true) {
                     var id = $(this).val();
                     var  token = "{{csrf_token()}}";
                     $.ajax({
                         type: 'post',
                         url: "{{url('admin/edit/phones')}}",
                         data: {
                             delete_id: id,
                             _token: token
                         },
                         complete: function(){
                             alert(id)

                         },
                         success: function (result) {

                             $('#modal #result').html(result + "<br>" + " Click refresh to reflect changes");
                             $('#modal').modal();

                         }
                     });
                 }


             });
         });




    </script>
@endsection