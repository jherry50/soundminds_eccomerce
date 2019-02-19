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
        <hr>
        {{--</div>--}}
        @if(session()->has('response'))
            <div class="alert alert-info">
                {{session()->get('response')}}
            </div>
            @endif

        <div class="panel" style="background: #1b1e21; color: white">
            <div class="panel-heading">
                <h3 class="text-center" style="color: whitesmoke">Add Product</h3>
            </div>

            <div class="panel-body">
              <form method="post" action="{{url('add')}}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <select id="categories" name="categories" class="form-control">
                        @foreach($categories as $key =>$value)
                            <option value="{{$value->id}}">{{$value->categoryName}}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">{{$errors->has('categories')?$errors->first('categories'):''}}</small>
                </div>
                  <div class="form-group">

                    <label for="product_name">Product Name</label>
                    <input type="text" id="product_name" name="product_name" value="{{old('product_name')}}" class="form-control" required>
                      <small class="text-danger">{{$errors->has('product_name')?$errors->first('product_name'):''}}</small>
                  </div>
                  <div class="form-group">

                    <label for="price">Current Price</label>
                    <input type="number" id="price" name="price" value="{{old('price')}}" class="form-control" required>
                    <small class="text-danger">{{$errors->has('price')?$errors->first('price'):''}}</small>
                  </div>

                  <div class="form-group">
                    <label for="previous_price">Previous Price</label>
                    <input type="number" id="previous_price" name="previous_price" value="{{old('previous_price')}}" class="form-control" required>
                    <small class="text-danger">{{$errors->has('previous_price')?$errors->first('previous_price'):''}}</small>
                  </div>

                  <div class="form-group">

                    <label for="discount">Discount</label>
                    <input type="number" id="discount" name="discount" value="{{old('discount')}}" class="form-control" required>
                    <small class="text-danger">{{$errors->has('discount')?$errors->first('discount'):''}}</small>
                  </div>
                  <div class="form-group">

                    <label for="upload">Product Image</label>
                    <input type="file" id="upload" name="upload" value="{{old('upload')}}" class="form-control form-control-file" required>
                    <small class="text-danger">{{$errors->has('upload')?$errors->first('upload'):''}}</small>
                  </div>

                    <button class="btn btn-danger btn-block form-control">Add Product!</button>

              </form>

            </div>

        </div>


    </div>

@endsection





@section('script')
@endsection