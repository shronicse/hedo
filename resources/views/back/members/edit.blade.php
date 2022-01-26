
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
        <div class="row">

            <div class="col-lg-12 margin-tb">

                <div class="pull-left">

                    <h2>Edit member</h2>

                </div>



            </div>

        </div>



        @if ($errors->any())

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif



        <form action="{{ route('members.update',$member->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')



            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Name:</strong>

                        <input type="text" name="name" value="{{ $member->name }}" class="form-control" placeholder="Name">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Email:</strong>

                        <input type="text" name="email" value="{{ $member->email }}" class="form-control" placeholder="Email">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Phone:</strong>

                        <input type="number" name="phone" value="{{ $member->phone }}" class="form-control" placeholder="Phone">

                    </div>

                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Address:</strong>

                        <textarea class="form-control" style="height:150px" name="address" placeholder="Detail">{{ $member->address }}</textarea>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Image:</strong>

                        <input type="file" name="image" class="form-control" placeholder="image">

                        <img src="/image/{{ $member->image }}" width="300px">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                    <button class="btn btn-primary" href="{{ route('members.index') }}"> Back</button>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>


            </div>



        </form>
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










