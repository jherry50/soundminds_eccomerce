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
    <body class="bg-secondary">
    <div class="container">
        <div class="panel panel-register bg-dark text-white mx-auto mt-5">
            <div class="panel-header text-center font-weight-bold">Customer Registration Form<br>
                @if(session('success'))
                    <br><div class="alert alert-success">
                        {{session('success')}}<br>
                        <a href="{{url('login')}}">Login now</a>
                    </div>

                @elseif(session('fail'))
                    <br><div class="alert alert-danger">
                        {{session('fail')}}
                    </div>
                @endif
            </div>
            <div class="panel-body">
                <form action="{{url('register')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="firstname">First name</label>
                        <input class="form-control" name="firstname" id="firstname" value="{{old('firstname')}}" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
                        <small class="text-danger">{{$errors->has('firstname')?$errors->first('firstname'):''}}</small>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input class="form-control" name="lastname" id="lastname" type="text" value="{{old('lastname')}}" aria-describedby="nameHelp" placeholder="Enter last name" required>
                        <small class="text-danger">{{$errors->has('lastname')?$errors->first('lastname'):''}}</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" id="password" type="password"  aria-describedby="nameHelp" placeholder="Enter password" required>
                        <small class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confrim Password</label>
                        <input class="form-control {{$errors->has('confirm_password')?$errors->first('confirm_password'):''}}" name="confirm_password" id="confirm_password" type="password"  aria-describedby="nameHelp" placeholder="Enter confirm password" required>
                        <small class="text-danger">{{$errors->has('confirm_password')?$errors->first('confirm_password'):''}}</small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" type="text" value="{{old('address')}}" aria-describedby="nameHelp" placeholder="Enter Address" required></textarea>
                        <small class="text-danger">{{$errors->has('address')?$errors->first('address'):''}}</small>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input class="form-control" name="email" id="email" type="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</small>
                    </div>
                    <div class="form-group">
                        <label for="phone_no">Phone number</label>
                        <input id="phone_no" name="phone_no" type="text" class="form-control" placeholder="Enter Phone number" required="required">
                        <small class="text-danger">{{$errors->has('phone_no')?$errors->first('phone_no'):''}}</small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>

            </div>
        </div>
        <div class="panel-footer">

        </div>
    </div>
@endsection

