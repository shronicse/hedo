
<!DOCTYPE html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('') }}admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('') }}admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="{{ asset('') }}admin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='{{ asset('') }}admin//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('') }}admin/css/font.css" type="text/css"/>
<link href="{{ asset('') }}admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="{{ asset('') }}admin/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

		<form action="{{ route('adminregister') }}" method="post">
            @csrf
			<input type="text" class="ggg" name="name" placeholder="NAME" >
			<input type="email" class="ggg" name="email" placeholder="E-MAIL">
			<input type="text" class="ggg" name="phone" placeholder="PHONE" >
			<input type="password" class="ggg" name="password" placeholder="password" >
            <input type="submit" value="submit" name="">
		</form>
		<p>Already Registered.<a href="{{route('adminlogin')}}">Login</a></p>
</div>
</div>
<script src="{{ asset('') }}admin/js/bootstrap.js"></script>
<script src="{{ asset('') }}admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('') }}admin/js/scripts.js"></script>
<script src="{{ asset('') }}admin/js/jquery.slimscroll.js"></script>
<script src="{{ asset('') }}admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('') }}admin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('') }}admin/js/jquery.scrollTo.js"></script>
</body>
</html>
