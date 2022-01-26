<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
    <!DOCTYPE html>
    <head>
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="{{ asset('') }}admin/css/style.css" rel='stylesheet' type='text/css' />
        <link href="{{ asset('') }}admin/css/style-responsive.css" rel="stylesheet"/>
        <!-- font CSS -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{ asset('') }}admin/css/font.css" type="text/css"/>
        <link href="{{ asset('') }}admin/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('') }}admin/css/morris.css" type="text/css"/>
        <script src="{{ asset('') }}admin/js/jquery2.0.3.min.js"></script>
        <script src="{{ asset('') }}admin/js/raphael-min.js"></script>
        <script src="{{ asset('') }}admin/js/morris.js"></script>
    </head>
    <body >
        <aside >

            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{route('dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="{{route('home')}}">
                                <i class="fa fa-home"></i>
                                <span>home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Members</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('members.create') }}">Add members </a></li>
                                <li><a href="{{ route('members.index') }}">All Members</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Projects</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('projects.create') }}">Add Projects </a></li>
                                <li><a href="{{ route('projects.index') }}">All Projects</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Contacts</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('contacts.index') }}">All Contacts</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                              <a  href="{{url('register')}}">
                                <i class="fa fa-hand-lizard-o"></i>
                                <span>Admin Registration</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>

        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">

                @yield('maincontent')

        </section>

        <script src="{{ asset('') }}admin/js/bootstrap.js"></script>
        <script src="{{ asset('') }}admin/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="{{ asset('') }}admin/js/scripts.js"></script>
        <script src="{{ asset('') }}admin/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('') }}admin/js/jquery.nicescroll.js"></script>
        <script language="javascript" type="text/javascript" src="{{ asset('') }}admin/js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="{{ asset('') }}admin/js/jquery.scrollTo.js"></script>

    </body>
    </html>




