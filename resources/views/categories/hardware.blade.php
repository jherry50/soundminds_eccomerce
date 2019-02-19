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
                    <h3 class="breadcrumb-header">Hardware Services</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Hardware Services</li>
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
                <div class="col-md-12">
                    <img src="{{asset('assets\img\banner\hardware_p1.jpg')}}" alt="" style="margin-bottom: 20px;">
                </div>
                <div class="col-md-12">
                    <h3>Hardware Services</h3>
                    <p style="text-align: justify" >
                        Whether you need a Home Network, a Local Area Network [LAN], a Wide Area Network [WAN],
                        a Wireless Local Area Network [WLAN] or a Wireless Wide Area Network [WWAN], we have
                        the equipment and experience to get you started or keep you going! We offer Free Network
                        Consultations for Business and Organizations!<br><br>

                        Soundminds Technologies Plus provides a wide range  of products to meet your networking needs.
                        We have experience installing and maintaining industry leading manufacturer equipment
                        such as Cisco, Linksys, 3Com, D-Link, and Netgear to name a few. All hardware is installed
                        by Certified Network Technicians.  Our Network Technicians can also install the needed network
                        infrastructure such as CAT5e, CAT6, RJ11 or Fiber runs.  We also can install patch panels,
                        junction boxes and terminate ends.

                        We offer wired and wireless business network solutions, that offer a consistent user experience
                        and address common networking challenges, whilst allowing you to take control of your networks future,
                        all the while allowing you to remain flexible to adopt new technologies, improve your infrastructure,
                        increase performance and lower your costs.
                    </p>
                    <b>
                        Our IT networking solutions include;

                    </b>
                    <ul style="list-style-type: circle">
                        <li>
                            Network Design
                        </li>
                        <li>
                            Network Planning
                        </li>
                        <li>
                            Network Deployment
                        </li>
                        <li>
                            Network Security
                        </li>
                        <li>
                            Network Analysis and Reporting
                        </li>
                        <li>
                            Remote Network Monitoring
                        </li>
                        <li>
                            Network Support
                        </li>
                    </ul>
                    <br><br>
                    <p style="text-align: justify">
                        Over the years we have built up an impressive list of client deployments and in recognition of our work
                        and achievements with these solutions we have been awarded the Dell EMC inaugural 'Networking Partner of
                        the Year' Award three times, an achievement we are understandably incredibly proud.

                    </p>
                    <br><br>
                    <b>Kindly contact us on <a href="tel:+2347031172829"><i class="fa fa-phone"></i> +234-7031172829</a> or send a mail to
                        <a href="mailto:mail2soundminds@gmail.com"><i class="fa fa-envelope-o"></i> mail2soundminds@gmail.com</a> </b>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="https://facebook.com/soundmindstechies"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/soundmindstechies"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/soundmindstechies"><i class="fa fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

@endsection