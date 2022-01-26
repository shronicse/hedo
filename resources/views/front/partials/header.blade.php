<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to HEDOBD Organization</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
   <link href="{{ asset('') }}css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('') }}css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="{{ asset('') }}css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="{{ asset('') }}js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('') }}js/bootstrap.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{ asset('') }}https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>
<body class="antialiased">

    <!-- banner start-->
    <div class="banner">
        <div class="header">
            <div class="container">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('login') }}"> Log in</a>
                </div>
                <div class="header-left">
                    <div class="w3layouts-logo">

                        <h1>
                            <a href="{{route('home')}}">HEDOBD <span>Organization</span></a>
                        </h1>
                    </div>
                </div>
                <div class="header-right">
                    <div class="top-nav">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                                    <li><a class="about" href="{{route('about')}}">About</a></li>
                                   <li class=""><a href="#" class="btn-outline-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Department<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="hvr-bounce-to-bottom" href="{{route('health')}}">Health</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="{{ route('education') }}">Education</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('projects')}}">Projects</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </nav>
                    </div>
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>


